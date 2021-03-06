import os.path
import sublime
from sublime_plugin import WindowCommand

PREF = "Preferences"
PREF_EXT = ".sublime-settings"
PREF_USER = PREF + PREF_EXT
PREF_SKIN = "Skins" + PREF_EXT
# least required entries of a valid skin
COLOR_SCHEME = "color_scheme"
THEME = "theme"


def decode_resource(name):
    """Load and decode sublime text resource.
    Arguments:
        name    - Name of the resource file to load.
    retruns:
        This function always returns a valid dict object of the decoded
        resource. The returned object is empty if something goes wrong.
    """
    try:
        return sublime.decode_value(sublime.load_resource(name)) or {}
    except Exception as e:
        message = "Skins: loading %s failed with %s" % (name, e)
        sublime.status_message(message)
        print(message)
    return {}


def validate_skin(skin_data):
    """Check skin integrety and return the boolean result.
    For a skin to be valid at least 'color_scheme' and 'theme' must exist.
    Otherwise SublimeText's behaviour when loading the skin is unpredictable.
    SublimeLinter automatically creates and applies patched color schemes if
    they doen't contain linter icon scopes. To ensure not to break this feature
    this function ensures not to apply such a hacked color scheme directly so
    SublimeLinter can do his job correctly.
    Arguments:
        skin_data - JSON object with all settings to apply for the skin.
    """
    # check theme file
    theme_name = os.path.basename(skin_data[PREF][THEME])
    theme_ok = any(sublime.find_resources(theme_name))
    # check color scheme
    path, tail = os.path.split(skin_data[PREF][COLOR_SCHEME])
    name = tail.replace(" (SL)", "")
    color_schemes = sublime.find_resources(name)
    if not color_schemes:
        return False
    # Try to find the exact path from *.skins file
    resource_path = "%s/%s" % (path, name)
    for found in color_schemes:
        if found == resource_path:
            return theme_ok
    # Use the first found color scheme which matches 'name'
    skin_data[PREF][COLOR_SCHEME] = color_schemes[0]
    return theme_ok


def load_skin(pkg_name, skin_name):
    """Load a single skin from a Packages/<pkg_name>/*.skins.
    Arguments:
        pkg_name    - the package name to look for skin files in.
        skin_name   - the name of the skin whose data to load.
    returns:
        skin    - tuble with all skin information
                  skin[0] = package name
                  skin[1] = skin name
                  skin[2] = skin data
    """
    for skins_file in sublime.find_resources("*.skins"):
        if pkg_name in skins_file:
            data = decode_resource(skins_file)[skin_name]
            if validate_skin(data):
                return (pkg_name, skin_name, data)
    return None


def load_skins():
    """Generate a list of all valid skins from all packages.
    Each skin is a tuble with following fields
      skin[0] = package name
      skin[1] = skin name
      skin[2] = skin data
    """
    for skins_file in sublime.find_resources("*.skins"):
        pkg_name = skins_file.split("/")[1]
        for skin_name, data in decode_resource(skins_file).items():
            if validate_skin(data):
                yield (pkg_name, skin_name, data)
    return None


def have_user_skins():
    """Check if 'Saved Skins.skins' contains at least one valid skin."""
    return any(validate_skin(data) for data in decode_resource(
                "Packages/User/Saved Skins.skins").values())


def load_user_skins():
    """Open the 'Saved Skins.skins' and read all valid skins from it."""
    return {name: data
            for name, data in decode_resource(
                "Packages/User/Saved Skins.skins").items()
            if validate_skin(data)}


def save_user_skins(skins):
    """Save the skins to the 'Saved Skins.skins'."""
    user_skins_file = os.path.join(
        sublime.packages_path(), "User", "Saved Skins.skins")
    with open(user_skins_file, "w", encoding="utf-8") as file:
        file.write(sublime.encode_value(skins, True))


class SetSkinCommand(WindowCommand):
    """Implements the 'set_skin' command."""

    def __init__(self, window):
        """Create 'set_skin' command object."""
        self.window = window
        self.changeset = {}
        self.settings = sublime.load_settings(PREF_USER)

    def run(self, package=None, name=None):
        """Run the command 'set_skin'.
        If 'set_skin' is called with both args 'package' and 'name',
        the provided information will be used to directly switch to
        the desired skin.
        If at least one of the args is None, a quick panel with all
        available skins is displayed.
        Arguments:
            package   - name of the package providing the skin or (User)
            name      - name of the skin in the <skins>.skins file
        """
        if package and name:
            try:
                self.apply_settings(load_skin(package, name))
            except:
                sublime.status_message("Can't switch to invalid skin!")
        else:
            current_skin = self.settings.get("skin")
            selected_index = -1
            idx = 0

            skins = []
            for pkg, name, data in load_skins():
                skins.append([pkg, name, data])
                if current_skin == pkg + "/" + name:
                    selected_index = idx
                idx += 1

            self.changeset = {}
            self.window.show_quick_panel(
                items=[[skin[1], skin[0]] for skin in skins],
                selected_index=selected_index,
                on_select=lambda x: self.on_select(skins[x], x < 0),
                on_highlight=lambda x: self.on_highlight(skins[x]))

    def on_select(self, skin, abort):
        """On select event handler for quick panel.
        Arguments:
            skin    - tuble with all skin information
                      skin[0] = package name
                      skin[1] = skin name
                      skin[2] = skin data
            abort   - TRUE to restore old settings.
        """
        if abort:
            for key, val in self.changeset.items():
                if val:
                    self.settings.set(key, val)
                else:
                    self.settings.erase(key)
            sublime.save_settings(PREF_USER)
        else:
            self.apply_settings(skin)

    def on_highlight(self, skin):
        """Preview the theme and color scheme as soon as a skin is highlighted.
        Arguments:
            skin    - tuble with all skin information
                      skin[0] = package name
                      skin[1] = skin name
                      skin[2] = skin data
        """
        for key, val in skin[2][PREF].items():
            # backup settings before changing the first time
            if key not in self.changeset:
                self.changeset[key] = self.settings.get(key)
            if val:
                self.settings.set(key, val)
            else:
                self.settings.erase(key)

    def apply_settings(self, skin):
        """Apply all settings.
        Arguments:
            skin    - tuble with all skin information
                      skin[0] = package name
                      skin[1] = skin name
                      skin[2] = skin data
        """
        self.settings.set("skin", skin[0] + "/" + skin[1])
        for pkg_name, skns in skin[2].items():
            try:
                pkgs = sublime.load_settings(pkg_name + PREF_EXT)
                for key, val in skns.items():
                    if type(val) is dict:
                        pkgs.set(key, pkgs.get(key).update(val))
                    elif val:
                        pkgs.set(key, val)
                    else:
                        pkgs.erase(key)
                sublime.save_settings(pkg_name + PREF_EXT)
            except:
                pass


class DeleteUserSkinCommand(WindowCommand):
    """Implements the 'delete_user_skin' command."""

    def is_visible(self):
        """Show command only if user skins exist."""
        return have_user_skins()

    def run(self, name=None):
        """Run the command 'delete_user_skin'.
        Arguments:
            name    If not None, this is names the skin to delete.
                    If None, show quick panel to select skin.
        """
        skins = load_user_skins()
        if skins:
            if name:
                self.delete(skins, name)
            else:
                names = sorted(skins.keys())
                self.window.show_quick_panel(
                    items=[[skin, "User"] for skin in names],
                    on_select=lambda x: self.delete(skins, names[x], x < 0))

    @staticmethod
    def delete(skins, skin, abort=False):
        """Delete the skin from 'Saved Skins.skins' file."""
        if not abort and skin in skins.keys():
            del skins[skin]
            save_user_skins(skins)
            message = "Skin %s deleted!" % skin
        else:
            message = "Skin not deleted!"
        sublime.status_message(message)


class SaveUserSkinCommand(WindowCommand):
    """Implements the 'save_user_skin' command."""

    def run(self, name=None):
        """Run the command 'save_user_skin'.
        If the command is called without arguments, it shows an input panel
        to ask the user for the desired name to save the skin as.
            sublime.run_command("save_user_skin")
        The command can be called to save the current skin
        with a predefined name:
            sublime.run_command("save_user_skin", {"name": "Preset 1"})
        Arguments:
            name    If not None this names the skin to save the current
                    visual settings as.
        """
        if name:
            # Compose the new skin by loading all settings from all existing
            # <pkg_name>.sublime-settings files defined in <template>.
            template = sublime.load_settings(PREF_SKIN).get("skin-template")
            new_skin = {}
            for pkg_name, css in template.items():
                val = self.transform(decode_resource(
                    "Packages/User/%s.sublime-settings" % pkg_name), css)
                # do not add empty objects
                if val:
                    new_skin[pkg_name] = val

            # Save new skin only if minimum requirements are met
            if validate_skin(new_skin):
                skins = load_user_skins()
                skins[name] = new_skin
                save_user_skins(skins)
                message = "Saved skin %s!" % name
            else:
                message = "Invalid skin %s not saved!" % name
            sublime.status_message(message)
        else:
            self.window.show_input_panel(
                "Enter skins name:", "", self.run, None, None)

    @classmethod
    def transform(cls, json, css):
        """Filter JSON object by a stylesheet.
        This function transforms the <json> object by recursivly
        parsing it and returning only the child objects whose keys
        match the values in the cascaded stylesheed <css>.
        Arguments:
            json    The data source to filter
            css     The stylesheet used as filter
                    Each <object> must exist in <json>.
                    Each <key> and its value is read from <json> and
                    added to the returned object.
                    EXAMPLE:
                    <object> : [<key>, <key>, ...],
                    <object> : {
                        <object> : [<key>, <key>, ...]
                    }
        """
        if json and css:
            if type(css) is dict:
                node = {}
                for key, ss in css.items():
                    value = cls.transform(json[key], ss)
                    # do not add empty objects
                    if value:
                        node[key] = value
                return node
            if type(css) is list:
                return {key: json[key] for key in css if key in json}
            elif css in json:
                return {css: json[css]}
        return None
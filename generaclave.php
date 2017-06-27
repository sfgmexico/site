<?php
function generar_clave($longitud){ 
       $cadena="[^A-Z0-9]"; 
       return substr(eregi_replace($cadena, "", md5(rand())) . 
       eregi_replace($cadena, "", md5(rand())) . 
       eregi_replace($cadena, "", md5(rand())), 
       0, $longitud); 
} 
//Ejemplo de utilizaci�n para una clave de 10 caracteres: 
echo 'Clave aleatoria: '.generar_clave(6).''; 
?>
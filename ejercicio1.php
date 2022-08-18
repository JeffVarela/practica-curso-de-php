<?php
/* en php no hay una distinción de tipos de datos al declararlos y pasa a ser del tipo que se defina. */
$nombre = "José";
$apellido = "Pérez"; //string
$edad = 30; //entero
$altura = 1.90; //float o decimal
$programador = null; //valor nulo

//uso de constantes
define("NOMBRE","Oscar");

//instrucciones de impresión de información

//podemos mesclar etiquetas html con código php.
echo "hola mundo"."<br/>";

/*
instrucciones para imprimir valores 
 */

print_r("hola mundo"."<br/>");

print("hola mundo"."<br/>");

//concatenación 
echo "hola"." ".$nombre." ".$apellido."<br/>";

//imprimir constante

echo NOMBRE;

?>
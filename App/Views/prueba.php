<?php
     $titulo = $_POST['titulo'];
     $consola  = $_POST['consola'];
     $ex2 = $_POST['ex2'];
     $ex2 = explode(",", $ex2);
     $rango1 = $ex2[0]; 
     $rango2 = $ex2[1]; 
     echo "El titulo es: ".$titulo; 
     echo "La consola es:".$consola;
     echo "El valor menor es:".$rango1;
     echo "El valor mayor es:".$rango2;

?>
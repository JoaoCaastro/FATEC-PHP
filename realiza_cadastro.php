<?php
include_once("valida.php");

$filename = "cadastra.txt";
 if(!file_exists("cadastra.txt")){
   $handle = fopen("cadastra.txt", "w");
 } else {
   $handle = fopen("cadastra.txt", "a");
 }

 fwrite($handle, $_POST['nome'] . " - " . $_POST['cpf']);

 fclose($handle);

 header('location: welcome.php')


?>
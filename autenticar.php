<?php

$usuarios = file_get_contents('senhas.txt');
$usuarios = json_decode($usuarios, true);

require './cripto.php';


$jsonD = json_decode($json, true);



function autenticar($usuarios, $jsonD) {
  foreach ($usuarios as $usuario) {
    
  if ($jsonD['login'] == $usuario['login'] && $jsonD['senha'] == $usuario['senha']) {
    
    echo ("<script>window.location.href='card-green.php'</script>");
    exit();
  }// if 

}// foreach 
  echo ("<script>window.location.href='card-red.php'</script>");
}// function

?>
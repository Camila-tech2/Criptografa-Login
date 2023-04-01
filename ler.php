<?php
  function realizarLeitura(){
    //endereco do arquivo
    $arquivo = "./senhas.txt";
    //método que abre on arquivo e executa uma função
    $abrir = fopen($arquivo, "r");

    $json = fread($abrir, filesize($arquivo));

    fclose($abrir);
    $resposta = json_decode($json);

    return $json;
  }

?>
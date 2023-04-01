<html>
  <head>
    <title>PHP Test</title>
    <link rel="stylesheet" href="./style.css"/>
  </head>
  <body>
    <?php

  require './user.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$novoLogin = base64_encode($login);
$novaSenha = base64_encode($senha);

$usuario1 = new Usuario($novoLogin, $novaSenha);

$json = json_encode($usuario1);
//echo $json;


?>
  </body>
</html>
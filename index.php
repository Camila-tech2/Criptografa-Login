<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>LOGIN</title></title>
</head>
<body>
  <form method="POST" action="./index.php">
    <label for="">LOGIN</label>
    <input name="login" type="text">
    <br>
    <label for="">SENHA</label>
    <input name="senha" type="password">
    <button type="submit">ENTRAR</button>
  </form>
</body>
</html>

  <?php 
if(isset($_POST['login'])){
  
$usuarios = file_get_contents('senhas.txt');
$usuarios = json_decode($usuarios, true);
  
  require "./autenticar.php";
  //echo $json;

  autenticar($usuarios, $jsonD);
}

?>
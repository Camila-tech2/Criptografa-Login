<?php

   // Aplica o hash md5() no resultado rand(). Em seguida, ele extrai a substring do hash com o tamanho especificado.
    function token($tamanho = 40) {
        $string = md5(rand());
        $randomString = substr($string, 0, $tamanho);
        return $randomString;
    }

    // Coloca o token criado em uma variavel
    $token = token();

  require "./ler.php";

  $usuarios = realizarLeitura();
  $usuarios = json_decode($usuarios);

  /*if (!isset($_POST['login'])) {
    echo ("<script>location.href='index.php'</script>");
  }*/
?>
<!DOCTYPE>
<html>
  <head>
    <title>Logado!</title>
    <link rel='stylesheet' type='text/css' href='./style.css'>
  </head>

  <body><div class="card">
<img class="icon" src="./img/verificacao.png">
  <h1 class="titulo">Bem-vindo(a) você está logado!</h1>
<p class="token">
  Token de acesso: <?php echo $token; ?>
</p>
  </div>
  </div>
  </body>
</html>
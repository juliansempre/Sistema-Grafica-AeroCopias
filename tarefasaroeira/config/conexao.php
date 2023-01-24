<?php

date_default_timezone_set('America/Sao_Paulo');
// Configuração do Banco de Dados
$servidor   = "localhost";
$senha      = "";
$usuario    = "root";
$banco      = "lista_tarefas";
$site       = "http://127.0.0.1/sistemaaerocopias/tarefas/index.php";
$con = mysqli_connect($servidor,$usuario,$senha,$banco);
mysqli_set_charset ( $con , 'utf8' );

// Checando a Conexão
if (mysqli_connect_errno())
  {
  echo "Falha ao Conectar: " . mysqli_connect_error();
  }

mysqli_select_db($con, $banco);

?>
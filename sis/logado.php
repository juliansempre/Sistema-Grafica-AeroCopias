<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">

    </head>
<body>
<div id="cabecalho">
        <img id="logob" src="img/logob.png"> </img>
    </div>
<div id="usu">
<?php 
include '../conexao.php'; 
session_start();
echo "Olá " . $_SESSION['nome'] . " ";
date_default_timezone_set('America/Sao_Paulo');
$agora = new DateTime(); // Pega o momento atual
//$umDia = new DateInterval('P1D');
//$agora->add($umDia);
echo $agora->format("d/m/Y "); //  H:i Exibe no formato desejado


?>
<a href="../index.php"><input type="submit" value=" Sair "></a>
</div>


<br>
<iframe src="index.html" width="100%" height="80%"></iframe>
</body>
<html>
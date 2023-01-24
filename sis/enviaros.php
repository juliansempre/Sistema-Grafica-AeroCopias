<?php


ini_set('display_errors', 0 );
error_reporting(0);


include '../conexao.php'; 
session_start();

include '../enviaros.php'; 

//coletar dados
$datadopedido = $_POST["datadopedido"];
$aprovacao = $_POST["aprovacao"];
$entrega = $_POST["entrega"];
$horario = $_POST["horario"];
$funcionario = $_SESSION['nome'];
$cliente = $_POST["cliente"];
$contato = $_POST["contato"];
$email = $_POST["email"];
$arquivosalvoem = $_POST["arquivosalvoem"];

//campo de produtos
$_POST[""] = "";
$quantidade1 = $_POST["quantidade1"];
$discriminacao1 = $_POST["discriminacao1"];
$valorunitario1 = $_POST["valorunitario1"];
$valortotal1 = $_POST["valortotal1"];

$quantidade2 = $_POST["quantidade2"];
$discriminacao2 = $_POST["discriminacao2"];
$valorunitario2 = $_POST["valorunitario2"];
$valortotal2 = $_POST["valortotal2"];

$quantidade3 = $_POST["quantidade3"];
$discriminacao3 = $_POST["discriminacao3"];
$valorunitario3 = $_POST["valorunitario3"];
$valortotal3 = $_POST["valortotal3"];

$quantidade4 = $_POST["quantidade4"];
$discriminacao4 = $_POST["discriminacao4"];
$valorunitario4 = $_POST["valorunitario4"];
$valortotal4 = $_POST["valortotal4"];

$quantidade5 = $_POST["quantidade5"];
$discriminacao5 = $_POST["discriminacao5"];
$valorunitario5 = $_POST["valorunitario5"];
$valortotal5 = $_POST["valortotal5"];

$quantidade6 = $_POST["quantidade6"];
$discriminacao6 = $_POST["discriminacao6"];
$valorunitario6 = $_POST["valorunitario6"];
$valortotal6 = $_POST["valortotal6"];

$quantidade7 = $_POST["quantidade7"];
$discriminacao7 = $_POST["discriminacao7"];
$valorunitario7 = $_POST["valorunitario7"];
$valortotal7 = $_POST["valortotal7"];

$quantidade8 = $_POST["quantidade8"];
$discriminacao8 = $_POST["discriminacao8"];
$valorunitario8 = $_POST["valorunitario8"];
$valortotal8 = $_POST["valortotal8"];

$quantidade9 = $_POST["quantidade9"];
$discriminacao9 = $_POST["discriminacao9"];
$valorunitario9 = $_POST["valorunitario9"];
$valortotal9 = $_POST["valortotal9"];

$quantidade10 = $_POST["quantidade10"];
$discriminacao10 = $_POST["discriminacao10"];
$valorunitario10 = $_POST["valorunitario10"];
$valortotal10 = $_POST["valortotal10"];
///////////////////////////////////////////////////////////////
$sinal = $_POST["sinal"];

$total = 
$valortotal1
+ $valortotal2
+ $valortotal3
+ $valortotal4
+ $valortotal5
+ $valortotal6
+ $valortotal7
+ $valortotal8
+ $valortotal9
+ $valortotal10;


$resta = $total - $sinal;

/*
// valores padrão formulario em branco, INT
if($datadopedido ||  $aprovacao ||  $entrega ||  $horario ||  $funcionario || $cliente ||  $contato ||  $email ||  $arquivosalvoem ||  $quantidade1 ||  $discriminacao1 ||  $valorunitario1 ||  $valortotal1 ||  $quantidade2 ||  $discriminacao2 ||  $valorunitario2 ||  $valortotal2 ||  $quantidade3 ||  $discriminacao3 ||  $valorunitario3 ||  $valortotal3 ||  $quantidade4 ||  $discriminacao4 ||  $valorunitario4 ||  $valortotal4 ||  $quantidade5 ||  $discriminacao5 ||  $valorunitario5 ||  $valortotal5 ||  $quantidade6 ||  $discriminacao6 ||  $valorunitario6 ||  $valortotal6 ||  $quantidade7 ||  $discriminacao7 ||  $valorunitario7 ||  $valortotal7 ||  $quantidade8 ||  $discriminacao8 ||  $valorunitario8 ||  $valortotal8 ||  $quantidade9 ||  $discriminacao9 ||  $valorunitario9 ||  $valortotal9 ||  $quantidade10 ||  $discriminacao10 ||  $valorunitario10 ||  $valortotal10 ||  $total ||  $sinal ||  $resta == ""){
    $datadopedido = "2022/01/01";
    $aprovacao = "2022/01/01";
    $entrega = "2022/01/01";
    $quantidade1 = 0;
    $valorunitario1 = 0;
    $valortotal1 = 0;

    $quantidade2 = 0;
    $valorunitario2 = 0;
    $valortotal2 = 0;

    $quantidade3 = 0;
    $valorunitario3 = 0;
    $valortotal3 = 0;

    $quantidade4 = 0;
    $valorunitario4 = 0;
    $valortotal4 = 0;

    $quantidade5 = 0;
    $valorunitario5 = 0;
    $valortotal5 = 0;

    $quantidade6 = 0;
    $valorunitario6 = 0;
    $valortotal6 = 0;

    $quantidade7 = 0;
    $valorunitario7 = 0;
    $valortotal7 = 0;

    $quantidade8 = 0;
    $valorunitario8 = 0;
    $valortotal8 = 0;
    
    $quantidade8 = 0;
    $valorunitario8 = 0;
    $valortotal8 = 0;

    $quantidade8 = 0;
    $valorunitario8 = 0;
    $valortotal8 = 0;

    $quantidade9 = 0;
    $valorunitario9 = 0;
    $valortotal9 = 0;

    $quantidade10 = 0;
    $valorunitario10 = 0;
    $valortotal10 = 0;

    $sinal = 0;
    $total = 0;
    $resta = 0;

}
*/
//--------------------------------------------------------


//VERIFICADOR 

if(!($datadopedido || $aprovacao || $entrega || $horario = "")){

    //verificador se está em branco
    echo"<script>alert('O horário de entrega é obrigatório'); window.history.back(); </script>";

}else{

// ENVIAR OS DADOS

$sql = "INSERT INTO `pedido` (`id`, `datadopedido`, `aprovacao`, `entrega`, `horario`, `funcionario`, `cliente`, `contato`, `email`, `arquivosalvoem`, `quantidade1`, `discriminacao1`, `valorunitario1`, `valortotal1`, `quantidade2`, `discriminacao2`, `valorunitario2`, `valortotal2`, `quantidade3`, `discriminacao3`, `valorunitario3`, `valortotal3`, `quantidade4`, `discriminacao4`, `valorunitario4`, `valortotal4`, `quantidade5`, `discriminacao5`, `valorunitario5`, `valortotal5`, `quantidade6`, `discriminacao6`, `valorunitario6`, `valortotal6`, `quantidade7`, `discriminacao7`, `valorunitario7`, `valortotal7`, `quantidade8`, `discriminacao8`, `valorunitario8`, `valortotal8`, `quantidade9`, `discriminacao9`, `valorunitario9`, `valortotal9`, `quantidade10`, `discriminacao10`, `valorunitario10`, `valortotal10`, `total`, `sinal`, `resta`) VALUES (NULL,'$datadopedido', '$aprovacao', '$entrega', '$horario', '$funcionario','$cliente', '$contato', '$email', '$arquivosalvoem', '$quantidade1', '$discriminacao1', '$valorunitario1', '$valortotal1', '$quantidade2', '$discriminacao2', '$valorunitario2', '$valortotal2', '$quantidade3', '$discriminacao3', '$valorunitario3', '$valortotal3', '$quantidade4', '$discriminacao4', '$valorunitario4', '$valortotal4', '$quantidade5', '$discriminacao5', '$valorunitario5', '$valortotal5', '$quantidade6', '$discriminacao6', '$valorunitario6', '$valortotal6', '$quantidade7', '$discriminacao7', '$valorunitario7', '$valortotal7', '$quantidade8', '$discriminacao8', '$valorunitario8', '$valortotal8', '$quantidade9', '$discriminacao9', '$valorunitario9', '$valortotal9', '$quantidade10', '$discriminacao10', '$valorunitario10', '$valortotal10', '$total', '$sinal', '$resta')";

  if ($conn->query($sql) === TRUE) {
    echo "<center><h2>Pedido feito com sucesso!</h2></center>";
	echo "<script>window.open('imp/imp_arquivos/sheet001.php');</script>";
	echo "<script> window.setTimeout(function() {window.location = 'index.html'; }, 3000); </script>";
	
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
      
}

  
  $conn->close();



?>

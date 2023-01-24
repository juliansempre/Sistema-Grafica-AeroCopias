<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Tarefa</title>
</head>
<body>
<?php  require_once("header.php");?>
    <h3>Cadastro de Tarefa</h3>
    <form action="config/cadastrar_tarefa.php" method="post">
        Data: 
        <input type="date" name="data_tarefa"> <br>
        Hora: 
        <input type="time" name="hora_tarefa"> <br>
        Descrição:   
        <input type="text" name="descricao"> <br>
        Usuário:   
        <input type="text" name="usuario"> <br>
        <button>Cadastrar</button>
    </form>
    <?php require_once "footer.php"; ?>
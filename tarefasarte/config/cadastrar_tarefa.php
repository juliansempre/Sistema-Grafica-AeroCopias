<?php

// Buscar as configurações do banco de dados
require_once ("conexao.php");

$data_tarefa = $_POST['data_tarefa'];
$hora_tarefa = $_POST['hora_tarefa'];
$descricao = $_POST['descricao'];
$usuario = $_POST['usuario'];

$sql = "INSERT INTO 
            tarefasarte (data_tarefa, hora_tarefa, descricao, usuario)
            VALUES
            ('$data_tarefa', '$hora_tarefa', '$descricao', '$usuario')
        ";

$resultado = mysqli_query($con, $sql);

// Retornando o resultado
if($resultado == true){
    header("Location:../index.php");
} else {
    header("Location:../index.php");
    echo "<script> alert('Falha ao tentar enviar os dados!');</script>";
}




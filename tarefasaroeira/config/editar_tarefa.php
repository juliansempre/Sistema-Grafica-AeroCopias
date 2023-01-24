<?php

// Buscar as configurações do banco de dados
require_once ("conexao.php");

$cod = $_POST['id'];
$data_tarefa = $_POST['data_tarefa'];
$hora_tarefa = $_POST['hora_tarefa'];
$descricao = $_POST['descricao'];
$usuario = $_POST['usuario'];

$sql = "UPDATE tarefasaroeira SET 
            data_tarefa = '$data_tarefa',
            hora_tarefa = '$hora_tarefa',
            descricao = '$descricao',
            usuario = '$usuario'
        ";

$resultado = mysqli_query($con, $sql);

// Retornando o resultado
if($resultado == true){
    header("Location:../index.php");
} else {
    echo "Falha ao tentar editar os dados!";
}




<?php
    //Função para edição das tarefas
    require_once("config/conexao.php");
    $cod = $_GET['id'];
    $sql = "SELECT * FROM tarefasarte where id = $cod";
    $result_tarefas = mysqli_query($con, $sql);
    $tarefa = mysqli_fetch_array($result_tarefas);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edição de Tarefa - Lista de Tarefas</title>
</head>
<body>
<?php  require_once("header.php");?>

    <h3>Editar de Tarefa</h3>
    <form action="config/editar_tarefa.php" method="post">
        Data: 
        <input type="date" name="data_tarefa" value="<?= $tarefa['data_tarefa']?>"> <br>
        Hora: 
        <input type="time" name="hora_tarefa" value="<?= $tarefa['hora_tarefa']?>"> <br>
        Descrição: 
        <input type="text" name="descricao" value="<?= $tarefa['descricao']?>"> <br>
        Usuário: 
        <input type="text" name="usuario" value="<?= $tarefa['usuario']?>"> <br>
        <button>Salvar</button>
    </form>
    <?php require_once "footer.php"; ?>
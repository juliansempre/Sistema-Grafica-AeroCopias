<?php
    // Buscando o item a ser visualizado
    require_once("config/conexao.php");
    $cod = $_GET['id'];
    $sql = "SELECT * FROM tarefas where id = $cod";
    $result_tarefas = mysqli_query($con, $sql);
    $tarefa = mysqli_fetch_array($result_tarefas);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Tarefas</title>
</head>
<body>
    <?php  require_once("header.php");?>
    <h3>Visualizar Tarefa</h3>
    Data: <?= date("d/m/Y", strtotime($tarefa['data_tarefa']));?> <br>
    Hora: <?= date("H:i", strtotime($tarefa['hora_tarefa']));?> <br>
    Descrição: <?= $tarefa['descricao']?> <br>
    Usuário: <?= $tarefa['usuario']?> <br>
    </form>
    <br> &nbsp; <a href="index.php"><i class="fa fa-undo"></i> Voltar</a>
</body>
</html>
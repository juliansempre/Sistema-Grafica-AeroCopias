    <?php 
	
	//date_default_timezone_set('America/Sao_Paulo'); echo "Hoje é dia ".date("d/m/Y");
	
	require_once("header.php");?>
    <main class="container">
        <table class="striped">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Descrição</th>
                    <th>Usuário</th>
                    <th>Estado</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <!--Buscando todas as tarefas cadastradas-->
            <?php foreach ($result_tarefas as $tarefa) { ?>
                <td><?= date("d/m/Y", strtotime($tarefa['data_tarefa']));?></td>
                <td><?= date("H:i", strtotime($tarefa['hora_tarefa']));?></a></td>
                <td><?= $tarefa['descricao']?></td>
                <td><?= $tarefa['usuario']?></a></td>
                <td style="color: green; text-transform: uppercase; font-weight: bold;"><?= $tarefa['situacao']?></a></td>
                <td>
                    <a href="visualizar_tarefa.php?id=<?= $tarefa['id']?>" title="Visualizar Tarefa"><i style="font-size: 20px" class="fa fa-eye"></i></a>
                    <a href="editar_tarefa.php?id=<?= $tarefa['id']?>" title="Editar Tarefa"><i style="font-size: 20px" class="fa fa-edit"></i></a>
                    <a href="config/excluir_tarefa.php?id=<?= $tarefa['id']?>" title="Excluir Tarefa"><i style="font-size: 20px" class="fa fa-trash"></i></a>
                    <a href="config/pronto_tarefa.php?id=<?= $tarefa['id']?>" title="Pronto"><button> Pronto </button></a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </main>
   <?php require_once "footer.php"; ?>
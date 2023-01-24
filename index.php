<html lang="pt-br">
<head>
    <meta charset="utf-8"
    <tittle> </tittle>
	<link rel="stylesheet" type="text/css" href="sis/style.css">
    <?php
    include("conexao.php");


    
    ?>
</head>
<body>
<center>



<div id="principal">

<center>
    <form method="POST" action="">
<br>
	<table border="0" id="tabelaa">
		<td colspan="3" style="text-align: center"><img style="height: 50px;" src="sis/img/logob.png"> </img><h3>Sistema Aero Cópias</h3></td>
<tr>
	<td><label>Nome: </label></td>
	<td><label><input type="text" name="nome" class="nome" placeholder="Digite o nome completo"></label></td>
</tr>
<tr>
	<td><label>Senha: </label></td>
	<td> <input type="text" name="senha" class="senha" placeholder="Digite sua senha"> </td>
</tr>

<td colspan="3" style="text-align: center">
<input type="submit" name="entrar" class="entrar" value="Entrar">
    <p><input type="hidden" name="entrar" value="login" /></p>
</td>

</table>
    
    
    <br>
    
   
    <br>

    </form>
    
    <?php
	if(isset($_POST['entrar'])&& $_POST['entrar'] == "login"){
		$nome= $_POST['nome'];
		$senha = $_POST['senha'];
		
		session_start();
		$_SESSION['nome'] = $nome;

		if(empty($nome) || empty($senha)){
			echo'Preencha todos os campos!';
		}
		else{
			$query = "SELECT nome, senha FROM usuarios WHERE nome = '$nome' AND senha = '$senha'";
			$result = $conn->query($query);
			$busca = $result->num_rows; // vai retornar se achou ou não
			$linha = $result->fetch_assoc();
			
			if($busca > 0){
				$_SESSION['nome'] = $linha['nome'];
				$_SESSION['senha'] = $linha['senha'];
				header('location: sis/logado.php'); //aqui redireciona para a pagina de logado!
				exit;
			}else{
				echo'Usuario e senha invalidos!';
			}
		}
	}
    ?>

<br>
<a href="cadastro.php">Clique aqui para se cadastrar</a>
</center>
<div>
</center>
</body>
</html>

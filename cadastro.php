<html lang="pt-br">
<head>
<link rel="stylesheet" type="text/css" href="sis/style.css">
    <meta charset="utf-8"
    <title> </title>
</head>
<body>
    <center>
<div id="principal">

<center>
    <form method="POST" action="processa.php">
<br>
	<table border="0" id="tabelaa">
		<td colspan="2" style="text-align: center"><img style="height: 50px;" src="sis/img/logob.png"> </img><h3>Faça seu cadastro</h3></td>
<tr>
	<td><label>Nome: </label></td>
	<td><label><input type="text" name="nome" class="nome" placeholder="Digite o nome completo"></label></td>
</tr>
<tr>
	<td><label>Senha: </label></td>
	<td> <input type="text" name="senha" class="senha" placeholder="Digite sua senha"> </td>
</tr>

<td colspan="3" style="text-align: center">
<input type="submit"  class="entrar" value="Cadastrar">
    <p><input type="hidden" name="entrar" value="Cadastrar" /></p>
</td>

</table>

    </form>
    <center>
    <a href="index.php">Fazer Login</a>
    <div>
</center>
</body>
</html>

<html><body>

<table>
	<tr><td><a href="sis/index.html"><button> Inicio </button></a>


<form action="" method="POST">
</td><td>Pesquisar por nome</td><td>Pesquisar pelo contato </td><td>Pesquisar por data do pedido</td> <td>Visualizar nota do pedido</td></tr>

<tr><td></td>
	<td><input type="text" name="nome" placeholder="Digite o nome do cliente"><input type="submit" name="pesquisar" value="Pesquisar"></td>
	<td><input type="text" name="contato" placeholder="Digite o contato do cliente"><input type="submit" name="pesquisar" value="Pesquisar"></td>
<td><input type="date" name="data"><input type="submit" name="pesquisar" value="Pesquisar"></td>
</form>

<form action="sis/imp/imp_arquivos/verpedido.php" target="_blank" method="POST">

<td><input type="text" name="verpedido" placeholder="Digite o número do pedido"><input type="submit" name="visualizar" value="Visualizar"></td>
</tr>
</form>
</table> 

</body></html>

<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_POST){
$nome = $_POST['nome'];
$contato = $_POST['contato'];
$data = $_POST['data'];

	if($_POST['nome']){
		$sql = "SELECT * FROM pedido WHERE cliente LIKE '%$nome%' ORDER BY id DESC limit 50 ";
				
		// SELECT * FROM suatabela WHERE coluna LIKE '%p%'
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			// output data of each row
				echo"<table border='1'><tr><td>Nº do pedido</td><td>Cliente</td><td>Contato</td><td>Data do pedido</td></tr>";
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["id"]. "</td><td>" . $row["cliente"] . "</td><td>" . $row["contato"] . " </td><td>" . date('d/m/Y', strtotime($row["datadopedido"])). "</td></tr>";
		
			}
			echo"</table>";
		} else {
			echo "0 resultados";
		}
		$conn->close();
	}//nome
	if($_POST['data']){
		$sql = "SELECT * FROM pedido WHERE datadopedido LIKE '%$data%' ORDER BY id DESC limit 50 ";
				
		// SELECT * FROM suatabela WHERE coluna LIKE '%p%'
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			// output data of each row
			echo"<table border='1'><tr><td>Nº do pedido</td><td>Cliente</td><td>Contato</td><td>Data do pedido</td></tr>";
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["id"]. "</td><td>" . $row["cliente"] . "</td><td>" . $row["contato"] . " </td><td>" . date('d/m/Y', strtotime($row["datadopedido"])). "</td></tr>";
		
			}
			echo"</table>";
		} else {
			echo "0 resultados";
		}
		$conn->close();
	}//data
	if($_POST['contato']){
		$sql = "SELECT * FROM pedido WHERE contato LIKE '%$contato%' ORDER BY id DESC limit 50 ";
				
		// SELECT * FROM suatabela WHERE coluna LIKE '%p%'
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			// output data of each row
			echo"<table border='1'><tr><td>Nº do pedido</td><td>Cliente</td><td>Contato</td><td>Data do pedido</td></tr>";
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["id"]. "</td><td>" . $row["cliente"] . "</td><td>" . $row["contato"] . " </td><td>" . date('d/m/Y', strtotime($row["datadopedido"])). "</td></tr>";
		
			}
			echo"</table>";
		} else {
			echo "0 resultados";
		}
		$conn->close();
	}//contato

}
?>
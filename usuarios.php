
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema";


//Pega os dados da form
if($_POST){

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

session_start();
//conexão

$nome = mysqli_real_escape_string ($conn, trim($_POST['nome']));
$senha = mysqli_real_escape_string ($conn, trim($_POST['senha']));

$sql = "Select count(*) as total from usuario where nome = '$nome'";
$result = mysqli_query($sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
	$_SESSION['usuario_existe'] = true;
	header('location: cadastro.php');
	exit;
}

}
?>
<html><body>
<form action="" method="POST">
      <input type="text" name="nome">
      <input type="senha" name="senha">
      <input type="submit">
   </form>
</body></html>

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
  if($_POST['nome'] != ""){
    echo "Seu nome �: " . $_POST['nome'];
    $nome = $_POST['nome'];
    $senha = '123';
    $sql = "INSERT INTO usuarios (nome, senha, created) VALUES ('$nome', 

'$senha', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  }else{
    echo 'Digite seu nome';
  }
	
}

$conn->close();
?>
<html><body>
<form action="" method="POST">
<input type="text" name="nome">
<input type="submit" name="entrar" value="entrar">
</form>
</body></html>
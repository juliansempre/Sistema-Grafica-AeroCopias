<?php
include_once("conexao.php"); // once apenas 1 vez

//receber os dados do usuarios

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

//echo"Nome: $nome <br>";
//echo"Variaveis funcionando!"

/*
Crie a o banco e a tabela no PHPmyadmin
tabela: usuarios /6 colunas / 
primeira coluna id /int /indice = primary / A_I (auto encremento)
segunda coluna / nome / varchar / tamanho 220 / 
terceira coluna / senha / varchar / tamanho 220 / 
quarta coluna / created / DATETIME / 
quinta coluna / modified / DATETIME / [o]nulo
sexta coluna / vazia
salvar



*/
//inserir no banco de dados

if(!($nome || $senha = "")){
    //verificador se está em branco
    echo"<script>alert('Digite suas informações'); window.history.back(); </script>";

}else // se a conexão inseriu um id então conectou com sucesso!
{
    //verificador duplicados
    if($_POST){
        $nome = $_POST['nome'];
        
        $sql = "SELECT id, nome, senha FROM usuarios WHERE nome = '$nome' ";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              //  echo "id: " . $row["id"]. " - Name: " . $row["nome"]. " " . $row["senha"]. "<br>";
            }
            if($row['nome'] = $nome){
               echo "<script> alert('Já existe esse usuário'); window.history.back(); </script>";
            }
        } else {
            echo "0 resultados";
                    // INSERIR DADOS NA TABELA AQUI.
                    
                    $sqlo = "INSERT INTO usuarios (nome, senha, created) VALUES ('$nome', '$senha', NOW())";

                    if ($conn->query($sqlo) === TRUE) {
                        echo "Dados inseridos com sucesso! ";
                        header("location: index.php");
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    
        }
        $conn->close();
}
}

?>
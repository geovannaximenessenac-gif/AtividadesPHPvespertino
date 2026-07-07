<?php 
//incluindo a conexao
include "banco.php";

//sql para selecionar todos os registros
$sql ="SELECT * FROM form";

//criamos a variavel $resultado para guardar a consulta
$resultado = $conexao->query($sql);

//laço de repetição while(enquanto)
//fetch_assoc busca o registro no banco de dados
while ($cliente = $resultado->fetch_assoc()) {


//mostro o campo nome da tabela form
    echo "Nome: ".$cliente['nome']."<br>";
    echo "Idade: ".$cliente['idade']."<br>";
    echo "Cidade: ".$cliente['cidade']."<br>";
    echo "Email: ".$cliente['email']."<br>";
}


?>
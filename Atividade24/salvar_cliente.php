<?php 
include "banco.php";

$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$preço = $_POST['preço'];


$sql = "INSERT INTO produto (nome, quantidade, preço)
VALUES ('$nome', '$quantidade', '$preço' )";

if ($conexao->query($sql)) {
    echo "Dados enviados com sucesso...";
}else {
    echo "Erro ao enviar os dados...";
}


?>
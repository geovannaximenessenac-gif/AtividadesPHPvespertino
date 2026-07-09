<?php 

include "banco.php";

$sql ="SELECT * FROM produto";


$resultado = $conexao->query($sql);


while ($cliente = $resultado->fetch_assoc()) {



    echo "Nome : ".$cliente['nome']."<br>";
    echo "Quantidade: ".$cliente['quantidade']."<br>";
    echo "Preço: ".$cliente['preço']."<br>";
    
}


?>
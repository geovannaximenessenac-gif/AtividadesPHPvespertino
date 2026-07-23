<?php 
include "banco.php";  

$id = $_GET['id'];

$sql ="DELETE FROM form WHERE id=$id";

if ($conexao->query($sql)) {
   header("location: listar_clientes.php");
   
   exit();
}else {
    echo "Erro ao excluir o cliente....";
}


?>
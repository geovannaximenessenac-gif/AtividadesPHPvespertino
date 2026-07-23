<?php
include "banco.php";

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Erro: ID não informado.");
}

$id = (int) $_GET['id'];

$sql = "DELETE FROM alunos WHERE id = $id";

if ($conexao->query($sql)) {
    echo "Aluno excluído com sucesso!";
} else {
    echo "Erro ao excluir: " . $conexao->error;
}
?>
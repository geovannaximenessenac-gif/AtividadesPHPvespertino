<?php 
//incluindo a conexao
include "banco.php";

//sql para selecionar todos os registros
$sql ="SELECT * FROM alunos";

//criamos a variavel $resultado para guardar a consulta
$resultado = $conexao->query($sql);

//laço de repetição while(enquanto)
//fetch_assoc busca o registro no banco de dados
while ($cliente = $resultado->fetch_assoc()) {


//mostro o campo nome da tabela form
    echo "Nome: ".$cliente['nome']."<br>";
    echo "Idade: ".$cliente['idade']."<br>";
    echo "Curso: ".$cliente['curso']."<br>";
    echo "Cidade: ".$cliente['cidade']."<br>";
    

 echo "<a href='formulario.php?id=" . $cliente['id'] . "'> <button> cadastrar </button> </a>";
   echo "<a href='editar_clientes.php?id=".$cliente['id']."' class='btn btn-warning'>Editar</a>";
   echo "<a href='excluir_cliente.php?id=".$cliente['id']."' class='btn btn-danger'>Excluir</a>";

    echo "<hr>";
}


?>
<?php 
session_start();
require_once('../Mdstore/server/db_connect.php');

if(isset($_GET['id'])) {

    $id = $_GET['id'];

    // print_r($id);

}

$sql = "SELECT * FROM produto WHERE id = $id";
$result = $conn->query($sql);

if($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $nome = $row["nome_produto"];
        $preco = $row["preco_produto"];
        $descricao = $row["descricao_produto"];
        $imagem_produto = $row["imagem_produto"];
        $imagem_tras = $row["imagem_tras"];
        $categoria = $row["produto_categoria"];

    }

    $conn->close();
} else {
    echo "erro encontrado";
}


// print_r("<br>");
// print_r($nome);
// print_r("<br>");
// print_r($preco);
// print_r("<br>");
// print_r($descricao);
// print_r("<br>");
// print_r($imagem_produto);
// print_r("<br>");
// print_r($imagem_tras);
// print_r("<br>");
// print_r($categoria);
// print_r("<br>");


?>


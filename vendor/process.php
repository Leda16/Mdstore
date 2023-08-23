<?php
include '../server/db_connect.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_produto = $_POST["nome_produto"];
    $preco_produto = $_POST["preco_produto"];
    $produto_categoria = $_POST["produto_categoria"];
    $descricao_produto = $_POST["descricao_produto"];


    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["imagem_produto"]["name"]);
    move_uploaded_file($_FILES["imagem_produto"]["tmp_name"], $target_file);

    $target_dir2 = "../images/";
    $target_file2 = $target_dir2 . basename($_FILES["imagem_tras"]["name"]);
    move_uploaded_file($_FILES["imagem_tras"]["tmp_name"], $target_file2);

    $sql = "INSERT INTO produto (nome_produto, preco_produto, descricao_produto, imagem_produto, produto_categoria, imagem_tras) VALUES ('$nome_produto', '$preco_produto', '$descricao_produto', '$target_file', '$produto_categoria', '$target_file2')";
    
    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Erro adicionar produto". $conn->error;
    }

    header('Location: index.php');
}

$conn->close();
?>
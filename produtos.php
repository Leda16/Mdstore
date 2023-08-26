<?php 
require_once('server/db_connect.php');

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
        $tamanho = $row["tamanho"];

    }

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
$url = '/checkout/?id=' . $id;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto | <?php echo $nome ?></title>
    <script src="/scripts/produto.js"></script>
</head>
<body>
    <form action="">
    <h1><?php echo $nome ?></h1> <br>
    <img src="<?php echo $imagem_produto ?>" alt="<?php echo $nome ?>"> <br>
    <p><strong>Preço:</strong><?php echo $preco ?></p> <br>
    <p><strong>Descrição:</strong><?php echo $descricao ?></p> <br>
    <p><strong>Tamanho disponivel:</strong><?php echo $tamanho ?></p> <br>
    <?php 
        $sql2 = "SELECT tamanho FROM produto WHERE id = $id";
        $result2 = $conn->query($sql2);

        if($result2->num_rows > 0) {
            $row2 = $result2->fetch_assoc();
            $tamanhos = explode(";", $row2["tamanho"]);

            echo '<select name="tamanho">';
            foreach($tamanhos as $tamanho2) {
                echo '<option value"' . $tamanho2 . '">' . $tamanho2 . '</option>';
            }
            echo '</select>';
        }
    ?>
    </form>
    
        <a href="<?php echo $url;?>" >Finalizar compra</a>
</body>
</html>


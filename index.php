<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD Store</title>

    <link rel="stylesheet" href="/styles/index.css">
    <link rel="shortcut icon" href="/public/" type="image/x-icon">
    <script src="/scripts/index.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <meta name="description" content="Melhor E-Commerce de roupas do Brasil! Venha adquirir sua peça hoje.">
</head>
<body>

<div class="navbar">
    <a href="#" class="esquerda">Galeria</a>

    <div class="elementos">
        <a href="#" class="direita">Buscar</a>
        <a href="#" class="direita">Entrar</a>
        <a href="#" class="direita">Carrinho</a>
    </div>
</div>

<div class="categoria">
    <div class="vendas">
    <?php
            include 'server/db_connect.php';

            $sql = "SELECT * FROM produto";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="produto">';
                    echo "<div class='venda-img'>";
                    echo '<img src="'. $row["imagem_produto"]. '" alt="' . $row['nome_produto'] .'" class="imagem-frente" >';
                    echo '<img src="'. $row["imagem_tras"]. '" alt="' . $row['nome_produto'] .'" class="imagem-tras">';
                    echo '<p class="nome">' . $row['nome_produto'] . '</p>';
                    echo '<p class="preco">R$ ' . $row['preco_produto'] . ' BRL</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "0 produtos";
            }
        ?>
    </div>
</div>

<div class="faixa">
    
</div>

<div class="footer">
    MD Store &copy; 2023
</div>
</body>
</html>
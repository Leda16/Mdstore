<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD Store | Painel</title>

    <link rel="stylesheet" href="../styles/vendor.css">
    <script src="../scripts/vendor.js"></script>
</head>
<body>

<div class="container">

<form class="form-vendor" action="process.php" method="post" enctype="multipart/form-data">
    <label for="nome_produto">Nome do Produto:</label>
    <input type="text" id="nome_produto" name="nome_produto" required>

<br>

    <label for="preco_produto">Preço do Produto:</label>
    <input type="text" id="preco_produto" name="preco_produto" required>

    <br>


    <label for="descricao_produto">Descriçao do Produto:</label>
    <textarea name="descricao_produto" id="descricao_produto" rows="4" name="descricao_produto"></textarea>

    <br>


    <label for="produto_categoria">Categoria do Produto:</label>
    <select name="produto_categoria" id="produto_categoria" name="produto_categoria" required>
        <!-- Adicionar nova opcao caso queira adicionar uma nova categoria de produto -->
        <option value="calcados">Calçados</option>
        <option value="calcas">Calças</option>
        <option value="camisas">Camisas</option>
        <option value="bermudas">Bermudas</option>
    </select>

    <br>


    <label for="imagem_produto" class="file-upload">Selecionar imagem</label>
    <input type="file" id="imagem_produto" name="imagem_produto" accept="image/*" onchange="previewImagem(event)" required>

    <label for="imagem_tras" class="file-upload">Selecionar imagem Troca</label>
    <input type="file" id="imagem_produto" name="imagem_tras" accept="image/*" onchange="previewImagem(event)" required>

    <br>


    <img src="#" alt="pre-visualizacao" id="preview" style="display: none;">

    <br>


    <button id="submit" type="submit">Adicionar produto</button>
</form>
</div>
<div id="warningMessage" style="display:none; color:red;">Adicionar produto?</div>

<div id="sucessMessage" style="display:none; color:green;">Produto adicionado.</div>
</body>
</html>
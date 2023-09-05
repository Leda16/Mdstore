<?php
session_start();

require_once('../../server/db_connect.php');

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



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://sdk.mercadopago.com/js/v2"></script>
  <script type="text/javascript" src="index.js" defer></script>
  <link rel="stylesheet" href="index.css">
</head>
<body>

	<form id="form-checkout" action="process_payment.php" method="POST">

	<label for="payerFirstName">Nome</label>
	<input id="form-checkout__payerFirstName" name="payerFirstName" type="text" value="">

	<label for="payerLastName">Sobrenome</label>
	<input id="form-checkout__payerLastName" name="payerLastName" type="text" value="">

	<label for="identificationEmail">E-mail</label>
	<input id="form-identificationEmail" name="identificationEmail" type="text" value="">

	<label for="identificationType">Tipo de documento</label>
	<select id="form-checkout__identificationType" name="identificationType" type="text"></select>

	<label for="identificationNumber">Número do documento</label>
	<input id="form-checkout__identificationNumber" name="identificationNumber" type="text" value="">

	<label for="description">Produto</label>
	<input type="text" name="description" id="description" value="">

	<label for="transactionAmount">Valor do Produto</label>
	<input type="text" name="transactionAmount" id="transactionAmount" value="<?php echo $preco; ?>">

	<br>

	<button type="submit" id="form-checkout__submit">Gerar Pix</button>
	</form>

</body>
</html>
 
  

  
  

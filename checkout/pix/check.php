<?php 

include_once '../vendor/autoload.php'; 
include_once '../../Server/db_connect.php';

MercadoPago\SDK::setAccessToken("TEST-4932412515501302-081012-8306146566e34747f03d859b906beff3-565440202");

if(isset($_GET['paymentId'])) {

    $paymentId = $_GET['paymentId'];

    $sql = "SELECT * FROM payments WHERE id = $paymentId";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        // echo "ID achado";

        while($row = $result->fetch_assoc()){
            $status = $row["status"];
            $status_detail = $row["status_detail"];
            $id = $row["id"];
        }

        // print_r("<br>");
        // print_r($status);
        // print_r("<br>");
        // print_r($status_detail);
        // print_r("<br>");
        // print_r($id);
        // print_r("<br>");


        if($status === "pending"){
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Pagamento pix | Processamento</title>
            </head>
            <body>
                <h1>Seu pagamento PIX ainda esta em processamento, voce recebera um email quando aprovado</h1>
                <h2>Seu id de pagamento <?php echo $id ?></h2>
            </body>
            </html>
            <?php
        }

        if($status === "approved") {
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Pagamento pix | Aprovado</title>
            </head>
            <body>
                <h1>Seu pagamento PIX foi aprovado, voce recebera mais informacoes no seu email em breve</h1>
                <h2>Seu id de pagamento <?php echo $id ?></h2>

            </body>
            </html>
            <?php
        }

    } else {
        echo "Id nao achado";
    }

}

?>
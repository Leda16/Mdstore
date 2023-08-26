<?php

   include_once '../vendor/autoload.php'; 
 
   MercadoPago\SDK::setAccessToken("TEST-4932412515501302-081012-8306146566e34747f03d859b906beff3-565440202");
    $payment = new MercadoPago\Payment();
    $payment->transaction_amount = $_POST['transactionAmount'];
    $payment->description = $_POST['description'];
    $payment->payment_method_id = "pix";
    $payment->payer = array(
        "email" => $_POST['identificationEmail'],
        "first_name" => $_POST['checkout__payerFirstName'],
        "last_name" => $_POST['checkout__payerLastName'],
        "identification" => array(
            "type" => $_POST['checkout__identificationType'],
            "number" => $_POST['checkout__identificationNumber']
        ),
        "address"=>  array(
            "zip_code" => "06233200",
            "street_name" => "Av. das Nações Unidas",
            "street_number" => "3003",
            "neighborhood" => "Bonfim",
            "city" => "Osasco",
            "federal_unit" => "SP"
        )
    );

    $payment->save();

    $response = array(
        'status' => $payment->status,
        'status_detail' => $payment->status_detail,
        'id' => $payment->id,
        'ticket_url' => $payment->point_of_interaction->transaction_data->ticket_url,
        'qr_code' => $payment->point_of_interaction->transaction_data->qr_code,
        'qr_code_base64' => $payment->point_of_interaction->transaction_data->qr_code_base64
    );

    // echo json_encode($response);
	
?>


<a href="<?= $response['ticket_url'] ?>" target="_blank">Pagar com Pix</a> 

<div style="width: 60%; margin: 100px 20%; ">
    <a href="index.php">Voltar</a>

    <br>
    <br>
    <p>Pagar com Pix</p>
    <img src="data:image/jpeg;base64,<?= $response['qr_code_base64'] ?>" style="width: 150px; height: 150px;"/><br><br>

    <label>Copiar Hash:</label><br>
    <input type="text" value="<?= $response['qr_code'] ?>">
</div>

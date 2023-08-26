<?php
session_start();
include_once 'vendor/autoload.php'; 

if(isset($_POST['email'])) {
    $_SESSION['email'] = $_POST['email'];
}

$email = $_SESSION['email'];

MercadoPago\SDK::setAccessToken("TEST-4932412515501302-081012-8306146566e34747f03d859b906beff3-565440202");
$payment = new MercadoPago\Payment();
$payment->transaction_amount = (float)$_POST['transactionAmount'];
$payment->token = $_POST['token'];
$payment->description = $_POST['description'];
$payment->installments = (int)$_POST['installments'];
$payment->payment_method_id = $_POST['paymentMethodId'];
$payment->issuer_id = (int)$_POST['issuer'];
$payment->notification_url = 'https://altaclasse-stripe.ultrahook.com/checkout/response.php';

$payer = new MercadoPago\Payer();
$payer->email = $_POST['email'];
$payer->identification = array(
    "type" => $_POST['identificationType'],
    "number" => $_POST['identificationNumber']
);
$payment->payer = $payer;

$additionalData = array(
    'email' => $_SESSION['email']
);
$additionalDataJson = json_encode($additionalData);
$payment->metadata = array(
    'additional_data' => $additionalDataJson
);

$payment->save();

$response = array(
    'status' => $payment->status,
    'status_detail' => $payment->status_detail,
    'id' => $payment->id,
    'amount_paid' => $payment->transaction_amount,
    'email' => $email
);

echo json_encode($response);

// header('Location: /Carrinho');

?>

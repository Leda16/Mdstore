<?php
session_start();

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;


include_once 'vendor/autoload.php'; 
include_once '../Server/db_connect.php';

MercadoPago\SDK::setAccessToken("TEST-4932412515501302-081012-8306146566e34747f03d859b906beff3-565440202");
	
$payment = MercadoPago\Payment::find_by_id($_GET['data_id']);
$paymentStatus = $payment->{'status'};
$paymentStatusDetail = $payment->{'status_detail'};
$paymentDescription = $payment->{'description'};
$paymentId = $payment->{'id'};
$paymentAmount = $payment->{'transaction_amount'};

$paymentId = $_GET['data_id'];
$payment = MercadoPago\Payment::find_by_id($paymentId);
$metadata = $payment->metadata;
$additionalData = json_decode($metadata->additional_data, true);
// $iduser = $additionalData['iduser'];
// $username = $additionalData['username'];
$email = $additionalData['email'];


$logLine = $paymentStatus . ' | ' . $paymentStatusDetail . ' | ' . $paymentDescription . ' | ' . $paymentId . ' | ' . $paymentAmount . ' | ' . $email . "\n";
	
$fp = fopen('log.txt', 'a');
$write = fwrite($fp, $logLine);
fclose($fp);

$paymentStatus = $conn->real_escape_string($payment->{'status'});
$paymentStatusDetail = $conn->real_escape_string($payment->{'status_detail'});
$paymentDescription = $conn->real_escape_string($payment->{'description'});
$paymentId = $conn->real_escape_string($payment->{'id'});
$paymentAmount =$conn->real_escape_string($payment->{'transaction_amount'});
$email = $conn->real_escape_string($additionalData['email']);


	$sql = "INSERT INTO payments (status, status_detail, description, id, transaction_amount, email) 
			VALUES ('$paymentStatus', '$paymentStatusDetail', '$paymentDescription', '$paymentId' , '$paymentAmount', '$email')";

	if ($conn->query($sql) === TRUE) {
		// echo "Dados inseridos com sucesso!";
	} else {
		// echo "Erro ao inserir dados: " . $conn->error;
	}

	// $emailSubject = '';
	// $emailBody = '';

	// switch ($paymentStatus) {
	// 	case 'approved':
	// 		$emailSubject = 'Pagamento Aprovado';
	// 		$emailBody = 'Parabéns! Seu pagamento foi aprovado. Você comprou: ' . $paymentDescription . ' por R$ ' . $paymentAmount;
	// 		break;
	// 	case 'in_process':
	// 		$emailSubject = 'Pagamento em Processo';
	// 		$emailBody = 'Seu pagamento está em processo de análise. Abra um ticket para mais detalhes';
	// 		break;
	// 	case 'rejected':
	// 		$emailSubject = 'Pagamento Rejeitado';
	// 		$emailBody = 'Lamentamos informar que seu pagamento foi rejeitado.';
	// 		break;
	// 	default:
	// 		$emailSubject = 'Status Desconhecido';
	// 		$emailBody = 'Recebemos um status de pagamento desconhecido. Caso algum valor foi creditado do seu cartao abra um ticket.';
	// }

	// $mail = new PHPMailer(true);

	// 		$mail->SMTPDebug = 0; 
	// 		$mail->isSMTP();
	// 		$mail->Host = 'smtp.gmail.com';
	// 		$mail->SMTPAuth = true;
	// 		$mail->Username = 'AltaClasseLojaFivem@gmail.com'; 
	// 		$mail->Password = 'mzzbcptibvmppwtt';           
	// 		$mail->SMTPSecure = 'tls';
	// 		$mail->Port = 587;
	
	// 		$mail->setFrom('AltaClasseLojaFivem@gmail.com', 'Alta Classe');
	// 		$mail->addAddress($email, 'Nome do Destinatário');
	
	// 		$mail->Subject = $emailSubject;
	// 		$mail->Body    = $emailBody;
	
	// 		if ($mail->send()) {
	// 			echo 'Email sent successfully';
	// 		} else {
	// 			echo 'Email could not be sent. Mailer Error: ' . $mail->ErrorInfo;
	// 		}
	

	$webhookurl = "https://discord.com/api/webhooks/1139738927046074389/6WOJY7IHBQtGC0icGpWhToiVXNJVrjskZobzp_tQgKAnmVsuA8kt0TyOZ5Gv3gwNSmHj";

	$timestamp = date("c", strtotime("now"));
	
	$json_data = json_encode([
		"content" => "Status pagamento loja @everyone",
		
		// Username
		"username" => "LaSystem",
	

		"tts" => false,
	
		"embeds" => [
			[
				"title" => "LaSystem Checkout System",
	
				"type" => "rich",

				"timestamp" => $timestamp,
	
				"color" => hexdec( "ac7f20" ),
	
				"author" => [
					"name" => "LaSystem"
				],

				"fields" => [
					// Field 1
					[
						"name" => "Status pagamento",
						"value" => "$paymentStatus",
						"inline" => false
					],
					// Field 2
					[
						"name" => "Produtos Comprados",
						"value" => "$paymentDescription",
						"inline" => false
					],
					[
						"name" => "Id de Transacao",
						"value" => "$paymentId",
						"inline" => false
					],
					[
						"name" => "Email do Comprador",
						"value" => "$email",
						"inline" => false
					]
				]
			]
		]
	
	], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
	
	
	$ch = curl_init( $webhookurl );
	curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
	curl_setopt( $ch, CURLOPT_POST, 1);
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt( $ch, CURLOPT_HEADER, 0);
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
	
	$response = curl_exec( $ch );
	curl_close( $ch );

	// if ($paymentStatus === 'approved') {
	// $query = "SELECT * FROM compras WHERE iduser = '$iduser'";
	// $result = $conn->query($query);
	
	// if ($result->num_rows > 0) {
	// 	$row = $result->fetch_assoc();
	// 	$existingPaymentDescription = $row['paymentDescription'];
	// 	$existingPaymentIds = $row['paymentIds'];
	
	// 	$newPaymentDescription = $conn->real_escape_string($paymentDescription);
	// 	$newPaymentIds = $conn->real_escape_string($paymentId);
	
	// 	$updatedPaymentDescription = $existingPaymentDescription . ';' . $newPaymentDescription;
	// 	$updatedPaymentIds = $existingPaymentIds . ';' . $newPaymentIds;
	
	// 	$updateQuery = "UPDATE compras SET paymentDescription = '$updatedPaymentDescription', paymentIds = '$updatedPaymentIds' WHERE iduser = '$iduser'";
	// 	$conn->query($updateQuery);
	// } else {
	// 	$insertQuery = "INSERT INTO compras (iduser, paymentDescription, paymentIds) VALUES ('$iduser', '$paymentDescription', '$paymentId')";
	// 	$conn->query($insertQuery);
	// }
	// }
	// $conn->close();

?>
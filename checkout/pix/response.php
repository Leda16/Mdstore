<?php 
	include_once 'composer/autoload.php'; 

    MercadoPago\SDK::setAccessToken("TEST-#");
	
	
	$payment = MercadoPago\Payment::find_by_id($_GET['data_id']);
	$payment->{'status'};
	
	$fp = fopen('log.txt', 'a');
	$html = $payment->{'status'} . ' | '. 
	$payment->{'status_detail'} . ' | '. 
	$payment->{'description'} . ' | '. 
	$payment->{'id'} ;
	$write = fwrite($fp, $html);
	
	fclose($fp);

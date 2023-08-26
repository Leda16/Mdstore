<?php

// ARQUIVO DE TRATAMENTO DE FUNCOES PHP 
session_start();
require_once('db_connect.php');

// TRATAMENTO DA ACAO DE LOGIN 
if(isset($_POST['loginaction'])) {
$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE user = '$user' AND pass = '$pass'";
$result = $conn->query($sql);

if($result->num_rows === 1) {
    $_SESSION['loggedin'] = true; //VARIAVEL PARA SETAR USUARIO LOGADOS
    header('Location: /vendor');
}else {
    // echo "sem usuario";
    header('Location: /vendor');
}

}else {
}

?>

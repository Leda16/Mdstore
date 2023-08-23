<?php
$config_json = file_get_contents('config.json');
if ($config_json === false) {
    die("Não foi possível carregar as configurações do JSON.");
}
$config = json_decode($config_json, true);
if ($config === null) {
    die("Erro ao analisar o JSON.");
}
$servername = $config['servername'];
$username = $config['username'];
$password = $config['password'];
$dbname = $config['dbname'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
?>
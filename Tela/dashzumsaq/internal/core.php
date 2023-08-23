<?php
session_start();
if (isset($_POST['form1'])) {
    if ($_POST['chave'] === "zumsaq-8mefqe") {
        $_SESSION['loggedin_form1'] = true;

        header("Location: modulo.php");
        exit();
    } else {
        header("Location: ../install.php");
        
    }
}

if (isset($_POST['form2'])) {
    if (isset($_SESSION['loggedin_form1']) === true) {
        $_SESSION['loggedin_form2'] = true;
        
        $db_servidor = $_POST['servidor'];
        $db_user = $_POST['usuario'];
        $db_pass = $_POST['senha'];
        $db_name =  $_POST['nome_db'];

        $_SESSION['servidor'] = $db_servidor;
        $_SESSION['usuario'] = $db_user;
        $_SESSION['senha'] = $db_pass;
        $_SESSION['nome_db'] = $db_name;

        header("Location: user.php");

    } else {
        header("Location: ../install.php");
    }
}

if (isset($_POST['form3'])) {
    if (isset($_SESSION['loggedin_form1']) && $_SESSION['loggedin_form2'] === true) {
        $_SESSION['loggedin_form3'] = true;
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;

        header("Location: database.php");

    } else {
        header("Location: ../install.php");
    }
}

?>

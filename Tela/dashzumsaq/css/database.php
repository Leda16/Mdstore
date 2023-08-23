<?php

session_start();

if ($_SESSION['loggedin_form1'] && $_SESSION['loggedin_form2'] && $_SESSION['loggedin_form3']  === true) {
    ?>
    <!DOCTYPE html>
    <html lang="en" class="h-100">
      <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="keywords" content="admin, dashboard" />
        <meta name="author" content="DexignZone" />
        <meta name="robots" content="index, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Painel - Leda</title>
        <link
          href="../vendor/bootstrap-select/dist/css/bootstrap-select.min.css"
          rel="stylesheet"
        />
        <link href="../css/style.css" rel="stylesheet" />
      </head>
    
      <body class="vh-100">
        <div class="authincation h-100">
          <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
              <div class="col-md-6">
                <div class="authincation-content">
                  <div class="row no-gutters">
                    <div class="col-xl-12">
                      <div class="auth-form">
                        <div class="text-center mb-3">
                          <a href="index.html"> </a>
                        </div>
                        <h4 class="text-center mb-4">Finalizando...</h4>
                        <form
                          action="core.php" method="POST"
                        >
                        <input type="hidden" name="form2" value="form2">

                          <div class="form-group">
                            <label class="mb-1"><strong>Inserindo usuario</strong></label>
<br>
                            <label class="mb-1"><strong>Inserindo BINS</strong></label>
<br>
                            <label class="mb-1"><strong>Insirindo tabelas</strong></label>
<br>
                            <label class="mb-1"><strong>Setando dominio</strong></label>
                            <br>
                            <label class="mb-1"><strong>Espere ser redirecionado...</strong></label>
                          </div>
                          <div
                            class="form-row d-flex justify-content-between mt-4 mb-2"
                          ></div>
                          <div class="text-center">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
        <script src="../vendor/global/global.min.js"></script>
        <script src="../vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="../js/custom.min.js"></script>
        <script src="../js/deznav-init.js"></script>
        <script src="../js/demo.js"></script>
      </body>
    
    </html>
    <?php
session_start();

$db_servidor = $_POST['servidor'];
$db_user = $_POST['usuario'];
$db_pass = $_POST['senha'];
$db_name = $_POST['nome_db'];

// Crie um array associativo com as informações
$config = array(
    "servername" => $db_servidor,
    "username" => $db_user,
    "password" => $db_pass,
    "dbname" => $db_name
);

// Converta o array em JSON
$config_json = json_encode($config, JSON_PRETTY_PRINT);

// Salve o JSON em um arquivo chamado config.json
$json_file = 'config.json';

if (file_put_contents($json_file, $config_json) !== false) {
    echo "Configurações salvas com sucesso em $json_file!";
} else {
    echo "Não foi possível salvar as configurações em $json_file.";
}

} else {
    header("Location: ../install.php");
    exit();
}

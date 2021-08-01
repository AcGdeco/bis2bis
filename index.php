<script type="text/javascript" src="js/index.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thera Cosméticos</title>
</head>
<body>
    <div id = "bloquear" style = "display:none;height:100%;width:100%;background-color:gray;z-index:2;left:0;top:0;position:fixed;opacity:0.8;" ></div>

    <div>
        <img width = "100%"  src = "img/caminhao.png" />
    </div>
    <div class = "flex" style = "width:100%;z-index:1;border-bottom:solid 1px black;background-color:white;position: -webkit-sticky;position: sticky;top: 0;"  >
        <table  >
            <tr>
                <td>
                    <img width = "210px" src = "img/logo.png" />
                </td>
                <td>
                    <input class = "inputDigite" type = "text" placeholder="Digite o que procura" />
                </td>
                <td>
                    <div onmouseover = "alternarAcessarConta()" onmouseout="alternarAcessarConta()" >
                        <img class = "pointer" src = "img/acessarconta.png" />
                        <table id = "acessarConta" class = "tableAcessar" >
                            <tr>
                                <th class = "thAcessar">
                                    Acessar Conta
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <input class = "paddingTres" type="text" placeholder = "email">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class = "paddingTres" type="text" placeholder = "senha">
                                </td>
                            </tr>
                            <tr>
                                <td class = "esqueciSenha" >
                                    Esqueci minha senha
                                </td>
                            </tr>
                            <tr>
                                <td class = "entrar">
                                    <span class="btnDepoimento">Entrar</span>
                                </td>
                            </tr>
                            <tr>
                                <td class = "novo">
                                    Novo Cliente? Cadastre-se
                                </td>
                            </tr>
                            <tr>
                                <td class = "tdCadastrar">
                                    <span class="btnDepoimento cadastrar" >Cadastrar</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
                <td>
                    <div onmouseover = "alternarAjuda()" onmouseout="alternarAjuda()" >
                        <img class = "pointer" src = "img/ajuda.png" />
                        <table id = "ajuda" style = "display:none;position:absolute;background-color:white;margin-top:-30px;margin-left:-60;border:solid 1px gray;" >
                            <tr>
                                <td style = "padding:5px;text-align:center;font-size:20px;font-weight:bolder;" >
                                    Fale conosco
                                </td>
                            </tr>
                            <tr>
                                <td style = "padding:5px;color:gray;display:flex;justify-content:center;align-items:center;" >
                                    <img src="img/telefone.png" alt=""> 19 4102-6567 
                                </td>
                            </tr>
                            <tr>
                                <td style = "padding:5px;color:gray;display:flex;justify-content:center;align-items:center;" >
                                    <img src="img/duvidas.png" alt=""> Dúvidas Frequentes 
                                </td>
                            </tr>
                            <tr>
                                <td style = "padding:5px;color:gray;display:flex;justify-content:center;align-items:center;" >
                                    <img src="img/email.png" alt=""> meajuda@theracosmeticos.com.br
                                </td>
                            </tr>
                            <tr>
                                <td style = "padding:5px;text-align:center;font-size:16px;font-weight:bolder;display:flex;justify-content:center;align-items:center;" >
                                   Horário de Atendimento
                                </td>
                            </tr>
                            <tr>
                                <td style = "padding:5px;color:gray;display:flex;justify-content:center;align-items:center;" >
                                    <img src="img/horariodois.png" alt=""> Seg. à Sex. das 08:00 às 16:45
                                </td>
                            </tr>
                            <tr>
                                <td style = "padding:5px;color:gray;display:flex;justify-content:center;align-items:center;" >
                                    <span class = "btnDepoimento" >Clique aqui para obter ajuda</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
                <td>
                    <img class = "pointer" src = "img/carrinho.png" />
                </td>
            </tr>
        </table>
    </div>
    <div class = "flex" >
        <table class = "menu">
            <tr>
                <td onmouseover = "alternarPerfumes()" onmouseout="alternarPerfumes()" >
                    Perfumes
                    <div id = "perfumes">
                        <table class = "widthcem">
                            <tr>
                                <td class = "tdPerfumes" >
                                    <span class = "tituloPerfumes" >Perfumes</span><br><br>
                                    <span class = "textoCinza">
                                    Perfumes masculinos, femininos e compartilháveis tipo EDP (Wau de Parfum) seguindo as melhores tendências da perfumaria internacional.<br>
                                    As seleções das melhores fragrâncias do mundo estão aqui com ótimo custo benefício.<br>
                                    Com volumetrias de 50 e 100 mL, parcelamento em até 12 vezes e com promoções, nos consideramos uma perfumaria de acesso por oferecer produtos de qualidade premium a preços justos.
                                    </span>
                                </td>
                                <td class = "tdCentro" >
                                    <img src="img/perfume1.png" alt=""><br>
                                    <span class = "confira" >
                                        Confira todas as nossas Fragrâncias<br>
                                    </span>
                                    <span class = "confiraTexto" >
                                        Aadsfadsf akjf asdfjlakf, akldfjlkadsjf safdsf                                                
                                    </span>
                                </td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                <img src="img/perfume2.png" alt="">
                                            </td>
                                            <td>
                                                Fragrâncias Femininas<br>
                                                Eau de Parfum
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="img/perfume3.png" alt="">
                                            </td>
                                            <td>
                                                Fragrâncias Masculinas<br>
                                                Eau de Parfum
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="img/perfume4.png" alt="">
                                            </td>
                                            <td>
                                                Fragrâncias Compartilháveis<br>
                                                Eau de Parfum
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="img/perfume5.png" alt="">
                                            </td>
                                            <td>
                                                Fragrâncias Exclusivas<br>
                                                Eau de Parfum
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
                <td>
                    Corpo e Banho
                </td>
                <td>
                    Linha Ambiente
                </td>
                <td>
                    Blog
                </td>
            </tr>
        </table>
    </div>
    <br>
    <div class = "flex">
        <table>
            <tr>
                <td>
                    <img style = "width:100%;" class = "pointer" src = "img/img1.png" />
                </td>
                <td>
                    <table>
                        <tr>
                            <td>
                                <img style = "width:100%;" class = "pointer" src = "img/img2.png" />
                            </td>
                            <td>
                                <img style = "width:100%;" class = "pointer" src = "img/img3.png" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img style = "width:100%;" class = "pointer" src = "img/img4.png" />
                            </td>
                            <td>
                                <img style = "width:100%;" class = "pointer" src = "img/img5.png" />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <br>
    <br>
    <br>
    <br>

    <!--Lançamentos-->
    <div class = "flex" >
        <div class = "titulo" >
            <img src = "img/simbolologo.png" /> Lançamentos
        </div>
    </div>
    <div class = "veja">
        <span class = "veja" >Veja +</span>
    </div>
    <br>
    <br>
    <?php include("comprar.php"); ?>
    <?php include("lancamentos.php"); ?>
    
    <br><br><br><br>
    <!--Promoções-->
    <div class = "flex" >
        <div class = "titulo" >
            <img src = "img/simbolologo.png" /> Promoções
        </div>
    </div>
    <div class = "veja">
        <span class = "veja" >Veja +</span>
    </div>
    <br>
    <br>
    <?php include("produtos.php"); ?>
    <br><br><br><br>
    <div class = "flex" >
        <table>
            <tr>
                <td>
                    <img style = "width:100%;" src = "img/img6.png" />
                </td>
                <td>
                    <img style = "width:100%;" src = "img/img7.png" />
                </td>
                <td>
                    <img style = "width:100%;" src = "img/img8.png" />
                </td>
            </tr>
            <tr>
                <td colspan = "3" >
                    <img style = "width:100%;" src = "img/img9.png" />
                </td>
            </tr>
        </table>
    </div>
    <br><br><br><br>

    <!--Destaques-->
    <div class = "flex" >
        <div class = "titulo" >
            <img src = "img/simbolologo.png" /> Destaques
        </div>
    </div>
    <div class = "veja">
        <span class = "veja" >Veja +</span>
    </div>
    <br>
    <br>
    <?php include("produtos.php"); ?>
    <br><br><br><br>

    <!--Mais Vendidos-->
    <div class = "flex" >
        <div class = "titulo" >
            <img src = "img/simbolologo.png" /> Mais Vendidos
        </div>
    </div>
    <div class = "veja">
        <span class = "veja" >Veja +</span>
    </div>
    <br>
    <br>
    <?php include("produtos.php"); ?>
    <br><br><br><br>

    <div class = "flex" style = "width:100%;" >
            <?php include("depoimentos.php"); ?>
            <?php include("sobre.php"); ?>
    </div>
    <br><br><br><br>

    <!--Instagram-->
    <div class = "flex" >
        <div class = "titulo" >
            <img src = "img/simbolologo.png" /> Instagram
        </div>
    </div>
    <br><br>
    <div class = "flex">
        <div class = "flex" >
            <img style = "width:25%;" src = "img/instagramUm.png" /> <img style = "width:25%;" src = "img/instagramDois.png" /> <img style = "width:25%;" src = "img/instagramTres.png" /> <img style = "width:25%;" src = "img/instagramQuatro.png" /> 
        </div>
    </div>
<br>
<!--Penúltima parte-->
<?php include("penultima.php"); ?>
<br><br>
<!--Penúltima parte-->
<?php include("ultima.php"); ?>

</body>
</html>


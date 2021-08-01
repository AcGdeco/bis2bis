<table>
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
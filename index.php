<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style_padrao.css">
        <link rel="stylesheet" type="text/css" href="css/style_nav.css">
        <link rel="stylesheet" type="text/css" href="css/style_footer.css">
        
        <link rel="stylesheet" href="css/w3c_css.css">
    
        <title>Hospital HHealth</title>
    </head>
<style>
    
    
</style>
    <body>

        <div class="main"><!--Div Main que segura todas as divs-->
             <div class="suporte_menu">
                   <div class="menu"><!--**MENU**-->
                      
						<div class="header"><!--header-->
						      <a href="index.php">
						            <div class="logo">
						            </div>
						      </a>
						    <nav class="nav_menu">
						          <div class="faixa_texte">

						          </div>
						          <ul class="menu_nav">
						              <li class="item_nav">
						                  Hospital
						                  <ul class="submenu_nav_hhealth">
						                        <a href="../index.php">
						                              <li class="item_submenu_nav_hhealth">Home</li>
						                        </a>
						                        <a href="views/especialidades.php">
						                              <li class="item_submenu_nav_hhealth">Especialidades</li>
						                        </a>
						                        
						                        <a  href="views/ambientes.php" >
						                              <li class="item_submenu_nav_hhealth">Ambientes</li>
						                        </a>
						                        <a href="views/sobre_hhealth.php">
						                              <li class="item_submenu_nav_hhealth">Sobre</li>
						                        </a>
						                  </ul>
						              </li>
						              <a href="views/dicas_saude.php">
						                    <li class="item_nav">
						                        Dicas de Saúde
						                    </li>
						              </a>
						              <li class="item_nav">
						                  Unidades
						              </li>
                                      <a href="views/exames.php">
                                        <li class="item_nav">
                                            Exames
                                        </li>
                                      </a>
						              <li class="item_nav">
						                  Convênios
						              </li>

						              <li class="item_nav">
						                  Contatos
						                  <ul class="submenu_nav_contatos">
						                        <a href="views/fale_conosco.php">
						                              <li class="item_submenu_nav_contatos">Fale Conosco</li>
						                        </a>
						                        <li class="item_submenu_nav_contatos">Trabalhe Conosco</li>
						                  </ul>
						              </li>
						          </ul>
						    </nav>
						</div>

                  </div>
             </div>
            <div class="div_suporte_conteudo">

            </div>
            
            <!--***********************SLIDE***********************-->
            <div class="w3-content w3-display-container" style="max-width:100%;heigh:600px">
              <img class="mySlides" src="imagens/portada_doctuo.jpg" alt="" style="width:100%;height:600px;" >
              <img class="mySlides" src="imagens/hospital-teste.jpg" alt="" style="width:100%;height:600px;">
              <img class="mySlides" src="imagens/portada_doctuo.jpg" alt="" style="width:100%;height:600px;">
              <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" >
                <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
              </div>
            </div>
            
            <script type="text/javascript" src="js/slide_home.js"></script>
            
            
            
            <div id="suporte_menu_de_acesso_rapido"><!--MENU ACESSO RÁPIDO-->
              <div id="menu_de_acesso_rapido">
                  <div class="item_menu_de_acesso_rapido">
                  </div>

                  <div class="item_menu_de_acesso_rapido">
                  </div>

                  <div class="item_menu_de_acesso_rapido">
                  </div>

                  <div class="item_menu_de_acesso_rapido">
                  </div>

                  <div class="item_menu_de_acesso_rapido">
                  </div>
              </div>
            </div>
            <div class="suporte_content">
                  <div class="content"><!--**CONTENT**-->
                      <div class="faixa_1_content_home"><!--faixa1-->
                          <div class="content_login_usuario_home"><!--login-->
                              <form name="frm_login" method="post" action="router.php">
                                  <div class="faixa_login_home">
                                      <a>Login</a><br>
                                      <input name="txt_login" type="text" value="" placeholder="Email Adress">
                                  </div>

                                  <div class="faixa_login_home">
                                      <a>Senha</a><br>
                                      <input name="txt_senha" type="password" value="" placeholder="********">
                                  </div>

                                  <div class="faixa_login_home">
                                      <p>Esqueci minha senha?</p>
                                  </div>

                                  <div class="faixa_login_home">
                                      <input type="submit" name="btn_entrar" value="Entrar">
                                  </div>
                              </form>
                              <div class="faixa_login_home">
                                  <span>Ou</span>
                              </div>
                              <div class="faixa_login_home">
                                  <span>Cadastre-se</span>
                              </div>

                          </div>

                          
                            <!--SLIDER FICA AKI-->
                          <div id="content">
                            <div id="carrossel">
                                <ul>
                                    <li>
                                        <img src="imagens/saude-bucal.png" alt="Nome da Imagem" title="Nome da Imagem"/>
                                    </li>
                                    <li>
                                        <img src="imagens/saude-bucal.png" alt="Nome da Imagem" title="Nome da Imagem"/>
                                    </li>
                                    <li>
                                        <img src="imagens/cardiologia.jpg" alt="Nome da Imagem" title="Nome da Imagem"/>
                                    </li>
                                    <li>
                                        <img src="imagens/cardiologia.jpg" alt="Nome da Imagem" title="Nome da Imagem"/>
                                    </li>
                                    <li>
                                        <img src="imagens/cardiologia.jpg" alt="Nome da Imagem" title="Nome da Imagem"/>
                                    </li>
                                </ul>
                                
                            </div>
                            
                            <nav id="menu-carrossel">
                                <a href="#" class="prev" title="Anterior">Anterior</a>
                                <a href="#" class="next" title="Próximo">Próximo</a>
                            </nav>
                            
                          </div>
                            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
                            <script type="text/javascript" src="js/jcarousellite.js"></script>
                            <script type="text/javascript" src="js/carrossel.js"></script>

                      </div>

                      <div class="faixa_2_content_home"><!--faixa2-->
                          <div class="titulo_faixa_2_home">
                              <a> Ambientes do Hospital</a>
                          </div>

                          <div class="content_img_faixa_2_home">
                              <div class="img_faixa_2_home">
                              </div>

                              <div class="img_faixa_2_home">
                              </div>

                              <div class="img_faixa_2_home">
                              </div>

                              <div class="img_faixa_2_home">
                              </div>

                              <div class="img_faixa_2_home">
                              </div>

                              <div class="img_faixa_2_home">
                              </div>
                          </div>

                          <div class="content_btn_faixa_2_home">
                              <p>Ver todos os ambiente do hospital</p>
                          </div>
                      </div>

                      <div class="faixa_3_content_home">
                          <div class="content_faixa_3_unidades_home">
                              <div class="img_faixa_3_home">
                              </div>

                              <div class="descricao_faixa_3_home">
                              </div>
                          </div>

                          <div class="content_faixa_3_unidades_home">
                              <div class="img_faixa_3_home">
                              </div>

                              <div class="descricao_faixa_3_home">
                              </div>
                          </div>
                      </div>
                  </div>
            </div>


            <footer><!--**FOOTER**-->
                  <div class="footer">
                        <div class="faixa1_footer"><!--footer faixa1-->
                            <div class="menu_footer"><!--div menu footer-->
                                  <ul class="menu_mapa">
                                      <li class="item_mapa">
                                          Hospital
                                          <ul class="submenu_mapa_hhealth">
                                                <li class="item_submenu_mapa_hhealth">Home</li>
                                                <li class="item_submenu_mapa_hhealth">Especialidades</li>
                                                <li class="item_submenu_mapa_hhealth">Ambientes</li>
                                                <li class="item_submenu_mapa_hhealth">Sobre</li>
                                          </ul>
                                      </li>

                                      <li class="item_mapa">
                                          Dicas de Saúde
                                      </li>

                                      <li class="item_mapa">
                                          Unidades
                                      </li>

                                      <li class="item_mapa">
                                          Agendamentos
                                      </li>

                                      <li class="item_mapa">
                                          Convênios
                                      </li>

                                      <li class="item_mapa">
                                          Contatos
                                          <ul class="submenu_mapa_contatos">
                                                <li class="item_submenu_mapa_contatos">Fale Conosco</li>
                                                <li class="item_submenu_mapa_contatos">Trabalhe Conosco</li>
                                          </ul>
                                      </li>
                                  </ul>
                                  <div class="linha_branca">

                                  </div>
                            </div>
                        </div>
                        <div class="faixa2_footer"><!--footer faixa2-->
                          <div class="limitador_faixa2_footer">
                                <div class="informacoes">
                                     <div class="informacoes_img1">
                                           <img src="imagens/phone-receiver.png" alt="">
                                     </div>
                                     <div class="informacoes_txt1">
                                           (11) 4142-6479
                                     </div>
                                </div>
                                <div class="informacoes">
                                     <div class="informacoes_img2">
                                           <img src="imagens/envelope.png" alt="">
                                     </div>
                                     <div class="informacoes_txt2">
                                           hhealth@outlook.com
                                     </div>
                                </div>
                                <div class="informacoes">
                                     <div class="informacoes_img4">
                                           <img src="imagens/facebook-logo-button.png" alt="">
                                     </div>
                                     <div class="informacoes_txt3">
                                           Acesse nossa página
                                     </div>
                                </div>
                                <div class="informacoes">
                                     <div class="informacoes_img4">
                                           <img src="imagens/play-button.png" alt="">
                                     </div>
                                     <div class="informacoes_txt4">
                                           Baixe nosso app
                                     </div>
                                </div>

                          </div>
                        </div>
                        <div class="faixa4_footer"><!--footer faixa4-->
                              <div class="limitador_faixa4_footer">
                                    © COPYRIGHT 2018
                              </div>
                        </div>
                  </div>
            </footer>
        </div>

    </body>
</html>

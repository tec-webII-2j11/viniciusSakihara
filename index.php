<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vizuu</title>
        <script type="text/javascript" src="JS/js_login2.js"></script>
        <script type="text/javascript" src="JS/js_login.js"></script>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
        <link type="text/css" rel="stylesheet" href="CSS/css_index.css">
    </head>
    <body>
        <?php include "header.php"; ?>
        <section id="grade_imagens">
            <article><a href=""><img alt="figure1" src="Images/tab1.jpg"></a></article>
            <article><a href=""><img alt="figure1" src="Images/tab2.jpg"></a></article>
            <article><a href=""><img alt="figure1" src="Images/tab3.jpg"></a></article>
            <article><a href=""><img alt="figure1" src="Images/tab4.jpg"></a></article>
            <article><a href=""><img alt="figure1" src="Images/tab5.jpg"></a></article>
            <article><a href=""><img alt="figure1" src="Images/tab6.jpg"></a></article>
            <article><a href=""><img alt="figure1" src="Images/tab7.jpg"></a></article>
            <article><a href=""><img alt="figure1" src="Images/tab8.jpg"></a></article>
        </section>

        <article id="top_vizuu">
            <h2><a href="pagina_vizuugrapher">Vizuugraphers </a></h2>
            <nav>
                <ul>
                    <li><a href="link_pagina_vizuugrapher">User 1<figure><img alt="foto_user" src="Images/user1.jpg" width="100" height="100"/></figure></a></li>
                    <li><a href="link_pagina_vizuugrapher">User 2<figure><img alt="foto_user2" src="Images/user2.jpg" width="100" height="100"/></figure></a></li>
                    <li><a href="link_pagina_vizuugrapher">User 3<figure><img alt="foto_user3" src="Images/user3.jpg" width="100" height="100"/></figure></a></li>
                    <li><a href="link_pagina_vizuugrapher">User 4<figure><img alt="foto_user4" src="Images/user4.jpg" width="100" height="100"/></figure></a></li>
                </ul>
            </nav>
        </article>
        <article id="Vizuu_Month">
            <h2><a href="pagina_vizuugrapher">Vizzugrapher of The Month </a></h2>
            <h3>Moça da Câmera</h3>
            <figure>
                <a href="pagina_vizuugrapher_month"><img alt="Pagina_do_user" src="Images/woman.jpg" width="200" height="200"></a></figure>
            <p>A Moça da Câmera foi a eleita do mês, pois o seu estilo é composto com angulos inusitados e composição única. Nessa entrevista, ela mostra como iniciou no mundo da fotografia. Quais foram as suas dificuldades, seus aprendizados e ALGUMAS das suas tecnicas.</p>
            <a href=""><p>Saiba Mais.</p></a>
        </article>

        <article id="Equip_Review">
            <h2><a href="pagina_news">Latest Equipment Reviews </a></h2>
            <nav>
                <ul>
                    <li>
                        <h4>Canon g12</h4>
                        <figure>
                            <img alt="foto_review1" src="Images/g12.jpg-923500.jpg" width="200" height="200">
                        </figure>

                        <p>Análise da Canon G12 com estudo comparativo de seus recursos e performance em relação às concorrentes. Veja nas páginas "Imagem" testes da qualidade de imagem que ela produz. Classificação dos diferenciais em Prós x Contras para facilitar a avaliação de seu custo-benefício e potencial.</p></li>
                    <li>
                        <h4>Nikon p900 </h4>
                        <figure>
                            <img alt="foto_review2" src="Images/p900.jpg" width="200" height="200">
                        </figure>

                        <p>O poder de zoom da COOLPIX P900 é nada menos que espetacular. São 83x de zoom ótico (ou equivalente a 2.000 mm), maior do que qualquer outra COOLPIX da Nikon. Fotógrafos avançados irão apreciar a excelente qualidade de imagem e o estilo DSLR dessa câmera.</p></li>
                </ul>
            </nav>
        </article>
        
        <div id="modal" class="popupContainer" style="display:none;">
                <header class="popupHeader">
                    <span class="header_title">Login</span>
                    <span class="modal_close"><i class="fa fa-times"></i></span>
                </header>

                <section class="popupBody">
                    <!-- Social Login -->
                    <div class="social_login">
                        <div class="">
                            <a href="#" class="social_box fb">
                                <span class="icon"><i class="fa fa-facebook"></i></span>
                                <span class="icon_title">Connect with Facebook</span>

                            </a>

                            <a href="#" class="social_box google">
                                <span class="icon"><i class="fa fa-google-plus"></i></span>
                                <span class="icon_title">Connect with Google</span>
                            </a>
                        </div>

                        <div class="centeredText">
                            <span>Or use your Email address</span>
                        </div>

                        <div class="action_btns">
                            <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                            <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
                        </div>
                    </div>

                    <!-- Username & Password Login form -->
                    <div class="user_login">
                        <form>
                            <label>Email / Username</label>
                            <input type="text" />
                            <br />

                            <label>Password</label>
                            <input type="password" />
                            <br />

                            <div class="checkbox">
                                <input id="remember" type="checkbox" />
                                <label for="remember">Remember me on this computer</label>
                            </div>

                            <div class="action_btns">
                                <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                                <div class="one_half last"><a href="#" class="btn btn_hover">Login</a></div>
                            </div>
                        </form>

                        <a href="#" class="forgot_password">Forgot password?</a>
                    </div>

                    <!-- Register Form -->
                    <div class="user_register">
                        <form>
                            <label>Full Name</label>
                            <input type="text" />
                            <br />

                            <label>Email Address</label>
                            <input type="email" />
                            <br />

                            <label>Password</label>
                            <input type="password" />
                            <br />

                            <div class="checkbox">
                                <input id="send_updates" type="checkbox" />
                                <label for="send_updates">Send me occasional email updates</label>
                            </div>

                            <div class="action_btns">
                                <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                                <div class="one_half last"><a href="#" class="btn btn_hover">Register</a></div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        <script type="text/javascript">
            $("#modal_trigger").leanModal({top: 200, overlay: 0.6, closeButton: ".modal_close"});

            $(function () {
                // Calling Login Form
                $("#login_form").click(function () {
                    $(".social_login").hide();
                    $(".user_login").show();
                    return false;
                });

                // Calling Register Form
                $("#register_form").click(function () {
                    $(".social_login").hide();
                    $(".user_register").show();
                    $(".header_title").text('Register');
                    return false;
                });

                // Going back to Social Forms
                $(".back_btn").click(function () {
                    $(".user_login").hide();
                    $(".user_register").hide();
                    $(".social_login").show();
                    $(".header_title").text('Login');
                    return false;
                });

            })
        </script>
        
        
        
        <article id="footer">
            <footer>
                <p> @Copyright 2016 - Developed by Vinicius Sakihara</p>
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="community.html">Community</a></li>
                        <li><a href="market.html">Market</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </footer>
        </article>



    </body>
</html>

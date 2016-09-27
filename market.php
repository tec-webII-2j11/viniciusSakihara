<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vizuu</title>
        <link type="text/css" rel="stylesheet" href="CSS/css_market.css">
        <script type="text/javascript" src="JS/js_login2.js"></script>
        <script type="text/javascript" src="JS/js_login.js"></script>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
    </head>
    <body>
         <?php include "header.php"; ?>
        <section id="busca_contato">
            <div id="mensagem">
                <h1><strong> Find what you are looking for in a Photography.</strong></h1>
                <h4>  Here you will find prime and original images for brands and agencies.</h4>
            </div>

            <div id="busca">
                <article>
                    <form>
                        <input id="campo" type="search"/>
                        <input type="submit"  value="Search"/>
                    </form>
                </article>

                <div id="contato"> 
                    <p>Free Creative Services. You ask. We help.</p>
                    <a href="contact.html">
                        <figure id="email">
                            <img class="flutuaEsq" alt="email" src="Images/email.png">
                        </figure>
                        <p>contact@vizuu.com.br</p>
                    </a>
                </div>
            </div>
        </section>
        <section id="banners">
            <article>
                <h1><strong>If you are not convinced yet, let's look in another perspective.</strong></h1>
                <br>
                <figure id="first">
                    <img alt="photographer" src="Images/photographer.jpg" width="150" height="400">
                </figure>
                <figure>
                    <img alt="photographer2" src="Images/photographer2.jpg" width="150" height="400">
                </figure>
                <figure>
                    <img alt="photographer2" src="Images/photographer3.jpg" width="150" height="400">
                </figure>
            </article>
            <article>
                <p>Everyone wants to create it, and photography is one of the best ways to do it. </p>
            </article>
        </section>
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

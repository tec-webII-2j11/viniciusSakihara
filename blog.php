<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vizuu</title>
        <script type="text/javascript" src="JS/js_login2.js"></script>
        <script type="text/javascript" src="JS/js_login.js"></script>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
        <link type="text/css" rel="stylesheet" href="CSS/css_blog.css">
    </head>
    <body>
         <?php include "header.php"; ?>
        <article id="artigo1">
            <figure><a><img alt="Artigo1" src="Images/artigo1.jpg" ></a></figure>
            <h1><a href=".txt">The Best Of #VizuuOnInstagram</a></h1>
            <p>See what’s been happening on @Vizuu</p>
            <figure id="share"><a><img alt="facebook" src="Images/facebook.svg"></a></figure>
            <figure id="share"><a><img alt="twitter" src="Images/twitter_16x19.svg"></a></figure>
            <figure id="share"><a><img alt="google" src="Images/google_plus_19x16.svg"></a></figure>
        </article>
        <article id="artigo2">
            <figure><a><img alt="Artigo1" src="Images/artigo2.jpg" ></a></figure>
            <h1><a href=".txt">Fresh on Market </a></h1>
            <p>News pictures today!!</p>
            <p>Check it out, what the Vizuugraphers have today for you!</p>
            <figure id="share"><a><img alt="facebook" src="Images/facebook.svg"></a></figure>
            <figure id="share"><a><img alt="twitter" src="Images/twitter_16x19.svg"></a></figure>
            <figure id="share"><a><img alt="google" src="Images/google_plus_19x16.svg"></a></figure>
        </article>

        <article id="artigo3">
            <figure><a><img alt="Artigo1" src="Images/artigo3.jpg" ></a></figure>
            <h1><a href=".txt">These Streets Belong To Me!</a></h1>
            <p>We asked Vizuugraphers to show us the culture of where they’re from.</p>
            <figure id="share"><a><img alt="facebook" src="Images/facebook.svg"></a></figure>
            <figure id="share"><a><img alt="twitter" src="Images/twitter_16x19.svg"></a></figure>
            <figure id="share"><a><img alt="google" src="Images/google_plus_19x16.svg"></a></figure>
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

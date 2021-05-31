<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet"/>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet"/>

    <!-- TITLE OF SITE -->
    <title>Festivel</title>

    <!-- favicon img -->
    <link rel="shortcut icon" type="image/icon" href="view/content/logo/favicon.png"/>

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="view/content/css/font-awesome.min.css"/>

    <!--animate.css-->
    <link rel="stylesheet" href="view/content/css/animate.css"/>

    <!--hover.css-->
    <link rel="stylesheet" href="view/content/css/hover-min.css">

    <!--datepicker.css-->
    <link rel="stylesheet" href="view/content/css/datepicker.css">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="view/content/css/owl.carousel.min.css">
    <link rel="stylesheet" href="view/content/css/owl.theme.default.min.css"/>

    <!-- range css-->
    <link rel="stylesheet" href="view/content/css/jquery-ui.min.css"/>

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="view/content/css/bootstrap.min.css"/>

    <!-- bootsnav -->
    <link rel="stylesheet" href="view/content/css/bootsnav.css"/>

    <!--style.css-->
    <link rel="stylesheet" href="view/content/css/style.css"/>

    <!--responsive.css-->
    <link rel="stylesheet" href="view/content/css/responsive.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- main-menu Start -->
<header class="top-area">
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo">
                        <a>
                            <span><strong>Festivel</strong></span>
                        </a>
                    </div><!-- /.logo-->
                </div><!-- /.col-->
                <div class="col-sm-10">
                    <div class="main-menu">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button><!-- / button-->
                        </div><!-- /.navbar-header-->
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a id="navi" href="index.php?action=home">Home</a></li>
                                <li><a id="navi" href="index.php?action=programme">Programme</a></li>
                                <li><a id="navi" href="index.php?action=billetterie">Billetterie</a></li>
                                <?php if (!isset($_SESSION['userEmailAddress'])) : ?>
                                    <li>
                                        <button class="book-btn"><a href="index.php?action=register">S'inscrire</a>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="book-btn"><a href="index.php?action=login">Se connecter</a>
                                        </button>
                                    </li>
                                <?php else: ?>
                                    <li>
                                        <button id="btnDeconnexion" class="book-btn"><a href="index.php?action=logout">Se déconnecter</a></button>
                                    </li>
                                    <li><a id="navi" href="index.php?action=panier">Panier</a></li>
                                <?php endif; ?>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.main-menu-->
                </div><!-- /.col-->
            </div><!-- /.row -->
            <div class="home-border"></div><!-- /.home-border-->
        </div><!-- /.container-->
    </div><!-- /.header-area -->

</header><!-- /.top-area-->
<!-- main-menu End -->
<div class="content">
    <?= $content; ?>
</div>
<!-- footer-copyright start -->

<footer class="footer-copyright">
    <div class="container">
        <div class="footer-content">
            <div class="row">

                <div class="col-sm-3">
                    <div class="single-footer-item">
                        <div class="footer-logo">
                            <a><span id="titre_footer"><strong>Festivel</strong></span></a>
                            <p>
                                Meilleut festival au monde
                            </p>
                        </div>
                    </div><!--/.single-footer-item-->
                </div><!--/.col-->

                <div class="col-sm-3">
                    <div class="single-footer-item">
                        <h2>Liens</h2>
                        <div class="single-footer-txt">
                            <p><a href="index.php?action=home">Home</a></p>
                            <p><a href="index.php?action=programme">Programme</a></p>
                            <p><a href="index.php?action=register">S'inscrire</a></p>
                        </div><!--/.single-footer-txt-->
                    </div><!--/.single-footer-item-->

                </div><!--/.col-->

                <div class="col-sm-3">
                    <div class="single-footer-item">
                        <h2>top chanteurs</h2>
                        <div class="single-footer-txt">
                            <p><a href="#">Nekfeu</a></p>
                            <p><a href="#">Freeze Coreleone</a></p>
                            <p><a href="#">Zola</a></p>
                        </div><!--/.single-footer-txt-->
                    </div><!--/.single-footer-item-->
                </div><!--/.col-->
                <div class="col-sm-3">
                    <div class="single-footer-item text-center">
                        <h2 class="text-left">contacts</h2>
                        <div class="single-footer-txt text-left">
                            <p>+41 24 847 31 81</p>
                            <p>info.festivel@gmail.com</a></p>
                            <p>Avenue de la Gare 14</p>
                            <p>1450 Sainte-Croix, CH</p>
                        </div><!--/.single-footer-txt-->
                    </div><!--/.single-footer-item-->
                </div><!--/.col-->

            </div><!--/.row-->

        </div><!--/.footer-content-->
        <hr>
        <div class="foot-icons ">
            <ul class="footer-social-links list-inline list-unstyled">
                <li><a href="https://m.facebook.com/profile.php?ref=m_upload_pic&_rdr" target="_blank"
                       class="foot-icon-bg-1"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100068881327400" target="_blank" class="foot-icon-bg-1"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" target="_blank" class="foot-icon-bg-2"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/festivel_2021/" target="_blank" class="foot-icon-bg-3"><i
                                class="fa fa-instagram"></i></a></li>
            </ul>
            <p>&copy; 2017 <a href="https://www.themesine.com">ThemeSINE</a>. All Right Reserved</p>

        </div><!--/.foot-icons-->
        <div id="scroll-Top">
            <i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top"
               title="" data-original-title="Back to Top" aria-hidden="true"></i>
        </div><!--/.scroll-Top-->
    </div><!-- /.container-->

</footer><!-- /.footer-copyright-->
<!-- footer-copyright end -->


<script src="view/content/js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<!--modernizr.min.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


<!--bootstrap.min.js-->
<script src="view/content/js/bootstrap.min.js"></script>

<!-- bootsnav js -->
<script src="view/content/js/bootsnav.js"></script>

<!-- jquery.filterizr.min.js -->
<script src="view/content/js/jquery.filterizr.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!--jquery-ui.min.js-->
<script src="view/content/js/jquery-ui.min.js"></script>

<!-- counter js -->
<script src="view/content/js/jquery.counterup.min.js"></script>
<script src="view/content/js/waypoints.min.js"></script>

<!--owl.carousel.js-->
<script src="view/content/js/owl.carousel.min.js"></script>

<!-- jquery.sticky.js -->
<script src="view/content/js/jquery.sticky.js"></script>

<!--datepicker.js-->
<script src="view/content/js/datepicker.js"></script>

<!--Custom JS-->
<script src="view/content/js/custom.js"></script>
</body>
</html>
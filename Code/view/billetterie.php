<?php
ob_start();
?>

<section class="about-us">

    <div class="services-wrapper">
        <div class="container svcs-container">
            <div class="row">
                <div id="boxConcert" class="col-sm-6 services-box hoverServices">
                    <div class="info text-center">
                        <h3 class="services-subheading">
                            Vendredi 26 Juin
                        </h3>
                    </div>
                    <div class="info col-lg-10 col-lg-offset-1">
                        <ul id="boxdescription">
                            <li>Billet individuel pour le 26 Juin
                            </li>
                            <li>Prix : 40 CHF
                            </li>
                            <br>
                            <li>
                                <?php if (isset($_SESSION['userType'])) : ?>
                                        <a href="index.php?action=buyBillet&day=2021-06-26&vip=0&price=40&name=Billet individuel pour le 26 Juin">
                                            <button id="btnAcheter" type="submit"
                                                    class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">Acheter
                                            </button>
                                        </a>
                                    <?php else : ?>
                                    <a href="index.php?action=register">
                                        <button id="btnAcheter" type="submit"
                                                class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">Inscrivez
                                            vous pour acheter ce billet !
                                        </button>
                                    </a>
                                <?php endif; ?>
                            </li>
                    </div>
                </div>

                <div id="boxConcert" class="col-sm-6 services-box hoverServices">
                    <div class="info text-center">
                        <h3 class="services-subheading">
                            Vendredi 26 Juin VIP
                        </h3>
                    </div>
                    <div class="info col-lg-10 col-lg-offset-1">
                        <ul id="boxdescription">
                            <li>Billet individuel pour le 26 Juin
                            </li>
                            <li>Prix : 60 CHF
                            </li>
                            <br>
                            <li>
                                <?php if (isset($_SESSION['userType'])) : ?>
                                        <a href="index.php?action=buyBillet&day=2021-06-26&vip=1&price=60&name=Billet individuel pour le 26 Juin">
                                            <button id="btnAcheter" type="submit"
                                                    class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">Acheter
                                            </button>
                                        </a>
                                    <?php else : ?>
                                    <a href="index.php?action=register">
                                        <button id="btnAcheter" type="submit"
                                                class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">Inscrivez
                                            vous pour acheter ce billet !
                                        </button>
                                    </a>
                                <?php endif; ?>
                            </li>
                    </div>
                </div>

                <div id="boxConcert" class="col-sm-6 services-box hoverServices">
                    <div class="info text-center">
                        <h3 class="services-subheading">
                            Samedi 27 Juin
                        </h3>
                    </div>
                    <div class="info col-lg-10 col-lg-offset-1">
                        <ul id="boxdescription">
                            <li>Billet individuel pour le 27 Juin
                            </li>
                            <li>Prix : 40 CHF
                            </li>
                            <br>
                            <li>
                                <?php if (isset($_SESSION['userType'])) : ?>
                                <a href="index.php?action=buyBillet&day=2021-06-27&vip=0&price=40&name=Billet individuel pour le 27 Juin">
                                    <button id="btnAcheter" type="submit"
                                            class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">Acheter
                                    </button>
                                </a>
                                <?php else : ?>
                                    <a href="index.php?action=register">
                                        <button id="btnAcheter" type="submit"
                                                class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">Inscrivez
                                            vous pour acheter ce billet !
                                        </button>
                                    </a>
                                <?php endif; ?>
                            </li>
                    </div>
                </div>

                <div id="boxConcert" class="col-sm-6 services-box hoverServices">
                    <div class="info text-center">
                        <h3 class="services-subheading">
                            Samedi 27 Juin VIP
                        </h3>
                    </div>
                    <div class="info col-lg-10 col-lg-offset-1">
                        <ul id="boxdescription">
                            <li>Billet VIP individuel pour le 27 Juin
                            </li>
                            <li>Prix : 60 CHF
                            </li>
                            <br>
                            <li>
                                <?php if (isset($_SESSION['userType'])) : ?>
                                <a href="index.php?action=buyBillet&day=2021-06-27&vip=1&price=60&name=Billet individuel pour le 27 Juin">
                                    <button id="btnAcheter" type="submit"
                                            class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">Acheter
                                    </button>
                                </a>
                                <?php else : ?>
                                    <a href="index.php?action=register">
                                        <button id="btnAcheter" type="submit"
                                                class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">Inscrivez
                                            vous pour acheter ce billet !
                                        </button>
                                    </a>
                                <?php endif; ?>
                            </li>
                    </div>
                </div>

                <div id="boxConcert" class="col-sm-6 services-box hoverServices">
                    <div class="info text-center">
                        <h3 class="services-subheading">
                            Pass 2 jours
                        </h3>
                    </div>
                    <div class="info col-lg-10 col-lg-offset-1">
                        <ul id="boxdescription">
                            <li>Pass individuel pour le 26-27 Juin
                            </li>
                            <li>Prix : 70 CHF
                            </li>
                            <br>
                            <li>
                                <?php if (isset($_SESSION['userType'])) : ?>
                                <a href="index.php?action=buyBillet&day=2021-06-26/27&vip=0&price=70&name=Pass individuel pour le 26-27 Juin">
                                    <button id="btnAcheter" type="submit"
                                            class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">Acheter
                                    </button>
                                </a>
                                <?php else : ?>
                                    <a href="index.php?action=register">
                                        <button id="btnAcheter" type="submit"
                                                class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">Inscrivez
                                            vous pour acheter ce billet !
                                        </button>
                                    </a>
                                <?php endif; ?>
                            </li>
                    </div>
                </div>

                <div id="boxConcert" class="col-sm-6 services-box hoverServices">
                    <div class="info text-center">
                        <h3 class="services-subheading">
                            Pass 2 jours VIP
                        </h3>
                    </div>
                    <div class="info col-lg-10 col-lg-offset-1">
                        <ul id="boxdescription">
                            <li>Pass VIP individuel pour le 26-27 Juin
                            </li>
                            <li>Prix : 100 CHF
                            </li>
                            <br>
                            <li>
                                <?php if (isset($_SESSION['userType'])) : ?>
                                <a href="index.php?action=buyBillet&day=2021-06-26/27&vip=1&price=100&name=Pass individuel pour le 26-27 Juin">
                                    <button id="btnAcheter" type="submit"
                                            class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">Acheter
                                    </button>
                                </a>
                                <?php else : ?>
                                    <a href="index.php?action=register">
                                        <button id="btnAcheter" type="submit"
                                                class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">Inscrivez
                                            vous pour acheter ce billet !
                                        </button>
                                    </a>
                                <?php endif; ?>
                            </li>
                    </div>
                </div>
            </div>

</section>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>

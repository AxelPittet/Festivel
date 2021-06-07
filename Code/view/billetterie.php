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
                            <li>Prix :
                            </li>
                            <br>
                            <li><a href="index.php?action=buyBillet&day=2021-06-26&vip=0&price=20&name=Billet individuel pour le 26 Juin"><input id="btnAcheter" type="submit" value="Acheter" class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
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
                            <li>Prix :
                            </li>
                            <br>
                            <li><a href="index.php?action=buyBillet&day=2021-06-26&vip=1&price=30&name=Billet individuel pour le 26 Juin"><input id="btnAcheter" type="submit" value="Acheter" class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
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
                            <li>Prix :
                            </li>
                            <br>
                            <li><a href="index.php?action=buyBillet&day=2021-06-27&vip=0&price=20&name=Billet individuel pour le 27 Juin"><input id="btnAcheter" type="submit" value="Acheter" class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
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
                            <li>Prix :
                            </li>
                            <br>
                            <li><a href="index.php?action=buyBillet&day=2021-06-27&vip=1&price=30&name=Billet individuel pour le 27 Juin"><input id="btnAcheter" type="submit" value="Acheter" class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
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
                            <li>Prix :
                            </li>
                            <br>
                            <li><a href="index.php?action=buyBillet&day=2021-06-26/27&vip=0&price=35&name=Pass individuel pour le 26-27 Juin"><input id="btnAcheter" type="submit" value="Acheter" class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
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
                            <li>Prix :
                            </li>
                            <br>
                            <li><a href="index.php?action=buyBillet&day=2021-06-26/27&vip=1&price=50&name=Pass individuel pour le 26-27 Juin"><input id="btnAcheter" type="submit" value="Acheter" class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                            </li>
                    </div>
                </div>
            </div>

</section>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>

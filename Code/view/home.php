<?php
ob_start();
?>

    <section id="home" class="about-us">

        <div class="about-btn">
            <h2 class="tire">
                Bienvenu sur Festivel, le meilleur festival de la région
            </h2>
        </div><!--/.about-btn-->
    </section>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
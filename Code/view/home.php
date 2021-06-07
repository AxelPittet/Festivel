<?php
ob_start();
?>

    <section id="home" class="about-us">

            <h2 id="titre_1">
                Bienvenue sur Festivel
            </h2>
    </section>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
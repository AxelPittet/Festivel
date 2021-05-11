<?php
ob_start();
?>

    <section id="home" class="about-us">

        <h2>
            TEST
        </h2>
        <div class="about-btn">
            <button class="about-view">
                explore now
            </button>
        </div><!--/.about-btn-->
    </section>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
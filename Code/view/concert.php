<?php
ob_start();
?>

<?php foreach ($concerts as $concert):
        if ($concert['id'] == $concertId):
            foreach ($artists as $artist):
                if ($artist['id'] == $concert['artist_id']):
                    foreach ($days as $day):
                        if ($day['id'] == $concert['days_id']):

                        ?>
                        <section id="concert" style="background-image: url('view/content/images/artistes/damso.png');">

                            <div id="concert-artist">
                                <h2 id="concert-artist-name">Damso</h2><br>
                                <p id="concert-artist-concert">Le concert de Damso se déroulera sur la grande scène le
                                    Vendredi 26 juin de
                                    18h00 à 20h00.</p><br><br>
                                <p id="concert-artist-description">Le concert de Damso se déroulera sur la grande scène
                                    le Vendredi 26 juin de
                                    18h00 à 20h00.Le concert de Damso se déroulera sur la grande scène le Vendredi 26
                                    juin de
                                    18h00 à 20h00.Le concert de Damso se déroulera sur la grande scène le Vendredi 26
                                    juin de
                                    18h00 à 20h00.Le concert de Damso se déroulera sur la grande scène le Vendredi 26
                                    juin de
                                    18h00 à 20h00.Le concert de Damso se déroulera sur la grande scène le Vendredi 26
                                    juin de
                                    18h00 à 20h00.Le concert de Damso se déroulera sur la grande scène le Vendredi 26
                                    juin de
                                    18h00 à 20h00.Le concert de Damso se déroulera sur la grande scène le Vendredi 26
                                    juin de
                                    18h00 à 20h00.Le concert de Damso se déroulera sur la grande scène le Vendredi 26
                                    juin de
                                    18h00 à 20h00.Le concert de Damso se déroulera sur la grande scène le Vendredi 26
                                    juin de
                                    18h00 à 20h00.</p><br><br><br>
                                <a href="index.php?action=billetterie">
                                    <button class="btn">Commandez votre place !</button>
                                </a>
                            </div>

                        </section>


                        <?php
                        $content = ob_get_clean();
                        require "gabarit.php";
                        ?>
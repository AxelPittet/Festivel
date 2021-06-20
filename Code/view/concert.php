<?php
ob_start();
?>

<?php
foreach ($concerts as $concert):
    if ($concert['id'] == $concertId):
        foreach ($artists as $artist):
            if ($artist['id'] == $concert['artist_id']):
                foreach ($days as $day):
                    if ($day['id'] == $concert['days_id']):
                        foreach ($concertsScenes as $concertScene):
                            if ($concertScene['concerts_id'] == $concert['id']):
                                foreach ($scenes as $scene):
                                    if ($concertScene['scenes_id'] == $scene['id']):
                                        $completDay = "";
                                        if ($day['date'] == '2021-06-26') {
                                            $completDay = 'vendredi 26 juin';
                                        } else {
                                            $completDay = 'samedi 27 juin';
                                        }
                                        ?>
                                        <section id="concert"
                                                 style="background-image: url('view/content/images/artistes/<?= $artist['picture'] ?>');">

                                            <div id="concert-artist">
                                                <h2 id="concert-artist-name"><?= $artist['artistName'] ?></h2><br>
                                                <p id="concert-artist-concert">Le concert
                                                    de <?= $artist['artistName'] ?> se déroulera sur
                                                    la <?= $scene['name'] ?> le <?= $completDay ?>
                                                    de <?= $concert['startTime'] ?>
                                                    à <?= $concert['endTime'] ?>.</p><br><br>
                                                <p id="concert-artist-description"><?= $artist['description'] ?></p><br><br><br>
                                                <?php if (isset($_SESSION['userType'])) : ?>
                                                        <a href="index.php?action=billetterie">
                                                            <button class="btn">Commandez votre place !</button>
                                                        </a>
                                                    <?php else : ?>
                                                    <a href="index.php?action=register">
                                                        <button class="btn">Inscrivez vous pour acheter ce billet !
                                                        </button>
                                                    </a>
                                                <?php endif; ?>
                                            </div>

                                        </section>
                                    <?php
                                    endif;
                                endforeach;
                            endif;
                        endforeach;
                    endif;
                endforeach;
            endif;
        endforeach;
    endif;
endforeach;
?>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
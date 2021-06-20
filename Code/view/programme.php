<?php
ob_start();
?>

<section class="about-us">
    <h3><span>Vendredi 26 Juin</span></h3><br>
</section>
<?php if (isset($_SESSION['userType'])) :
    if ($_SESSION['userType'] == 2) : ?>
        <a href="index.php?action=addConcert" style="position: fixed;
        top: 200px;
        left: 20px;
        z-index: 10">
            <button class="book-btn">Ajouter</button>
        </a>
    <?php endif;
endif; ?>
<section class="about-us-content">
    <div class="container svcs-container">
        <div class="row">
            <?php
            foreach ($concerts

                     as $concert):
                foreach ($artists

                         as $artist):
                    if ($concert['artist_id'] == $artist['id']):
                        foreach ($days

                                 as $day):
                            if ($concert['days_id'] == $day['id']):
                                if ($day['date'] == '2021-06-26'):?>
                                    <div class="col-sm-6">
                                        <a href="index.php?action=concert&concertId=<?= $concert['id'] ?>">
                                            <div class="programme-table" style="
                                                    height: 300px;
                                                    width: 500px;
                                                    background-image: url('/view/content/images/artistes/<?= $artist['picture'] ?>');
                                                    background-size: 500px 300px">

                                                <h2 class="programme-artist-name"><?= $artist['artistName'] ?></h2>
                                                <h2 class="programme-artist-hours"><?= $concert['startTime'] . " - " . $concert['endTime'] ?></h2>
                                            </div>
                                        </a>
                                        <?php if (isset($_SESSION['userType'])) :
                                            if ($_SESSION['userType'] == 2) : ?>
                                                <a href="index.php?action=supConcert&concertId=<?= $concert['id'] ?>">
                                                    <button class="book-btn">Supprimer</button>
                                                </a>
                                            <?php endif;
                                        endif; ?>
                                    </div>
                                <?php
                                endif;
                            endif;
                        endforeach;
                    endif;
                endforeach;
            endforeach; ?>
        </div>
    </div>
</section>


<section class="about-us">
    <h3><span>Samedi 27 Juin</span></h3><br>
</section>
<section class="about-us-content">
    <div class="container svcs-container">
        <div class="row">
            <?php
            foreach ($concerts

                     as $concert):
                foreach ($artists

                         as $artist):
                    if ($concert['artist_id'] == $artist['id']):
                        foreach ($days

                                 as $day):
                            if ($concert['days_id'] == $day['id']):
                                if ($day['date'] == '2021-06-27'):?>
                                    <div class="col-sm-6">
                                        <a href="index.php?action=concert&concertId=<?= $concert['id'] ?>">
                                            <div class="programme-table" style="
                                                    height: 300px;
                                                    width: 500px;
                                                    background-image: url('/view/content/images/artistes/<?= $artist['picture'] ?>');
                                                    background-size: 500px 300px">

                                                <h2 class="programme-artist-name"><?= $artist['artistName'] ?></h2>
                                                <h2 class="programme-artist-hours"><?= $concert['startTime'] . " - " . $concert['endTime'] ?></h2>
                                            </div>
                                        </a>
                                        <?php if ($_SESSION["userType"] == 2) : ?>
                                            <a href="index.php?action=supConcert&concertId=<?= $concert['id'] ?>">
                                                <button class="book-btn">Supprimer</button>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                <?php
                                endif;
                            endif;
                        endforeach;
                    endif;
                endforeach;
            endforeach; ?>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>

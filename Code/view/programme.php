<?php
ob_start();
?>
<div id="prog">
<section class="about-us">
    <h3><span>Vendredi 26 Juin</span></h3><br>
</section>
<section class="about-us-content">
    <table class="table-responsive col-lg-6">
        <?php
        $i = 0;
        foreach ($concerts

        as $concert):
        foreach ($artists

        as $artist):
        if ($concert['artist_id'] == $artist['id']):
        foreach ($days

        as $day):
        if ($concert['days_id'] == $day['id']):
        if ($day['date'] == '2021-06-26'):
        $i++;
        if ($i == 4 || $i == 7): ?>
        <tr>
            <?php endif; ?>
            <td>
                <a href="index.php?action=concert&concertId=<?= $concert['id']?>">
                    <div class="programme-table" style="
                            height: 300px;
                            width: 500px;
                            background-image: url('/view/content/images/artistes/<?= $artist['picture'] ?>');
                            background-size: 500px 300px">

                        <h2 class="programme-artist-name"><?= $artist['artistName'] ?></h2>
                        <h2 class="programme-artist-hours"><?= $concert['startTime'] . " - " . $concert['endTime'] ?></h2>
                    </div>
                </a>
            </td>
            <?php if ($i == 3 || $i == 6) : ?>
        <tr>
            <?php
            endif;
            endif;
            endif;
            endforeach;
            endif;
            endforeach;
            endforeach; ?>
    </table>
</section>


<section class="about-us">
    <h3><span>Samedi 27 Juin</span></h3><br>
</section>
<section class="about-us-content">
    <table class="table-responsive col-lg-6">
        <?php
        $i = 0;
        foreach ($concerts

        as $concert):
        foreach ($artists

        as $artist):
        if ($concert['artist_id'] == $artist['id']):
        foreach ($days

        as $day):
        if ($concert['days_id'] == $day['id']):
        if ($day['date'] == '2021-06-27'):
        $i++;
        if ($i == 4 || $i == 7): ?>
        <tr>
            <?php endif; ?>
            <td>
                <a href="index.php?action=concert&concertId=<?= $concert['id']?>">
                    <div class="programme-table" style="
                            height: 300px;
                            width: 500px;
                            background-image: url('/view/content/images/artistes/<?= $artist['picture'] ?>');
                            background-size: 500px 300px">

                        <h2 class="programme-artist-name"><?= $artist['artistName'] ?></h2>
                        <h2 class="programme-artist-hours"><?= $concert['startTime'] . " - " . $concert['endTime'] ?></h2>
                    </div>
                </a>
            </td>
            <?php if ($i == 3 || $i == 6) : ?>
        <tr>
            <?php
            endif;
            endif;
            endif;
            endforeach;
            endif;
            endforeach;
            endforeach; ?>
    </table>
</section>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>

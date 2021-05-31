<?php
ob_start();
?>

<section class="about-us">
    <h3><span>Vendredi 26 Juin</span></h3><br>
</section>
<section class="about-us-content">
    <table class="table-responsive col-lg-6">
        <tr>
            <?php foreach ($concerts as $concert):
                foreach ($artists as $artist):
                    if ($concert['artists_id'] == $artist['id']):
                        foreach ($days as $day):
                            if ($concert['days_id'] == $day['id']): ?>
                                <td>
                                    <div class="programme-table">
                                        <h2 class="programme-artist-name"><?=$artist['artistName'] ?></h2>
                                    </div>
                                </td>
                            <?php endif;
                        endforeach;
                    endif;
                endforeach;
            endforeach; ?>
        </tr>
    </table>
</section>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>

<?php
ob_start();
?>

<section class="about-us">
    <h3><span>Vendredi 26 Juin</span></h3><br>
</section>
<section class="about-us-content">
    <table class="table-responsive col-lg-6">
        <tbody>
        <tr>
            <td>
                <div class="programme-table-border">
                    <h2>Damso</h2>
                </div>
            </td>
            <td>
                <div class="programme-table-border">
                    <h2>PLK</h2>
                </div>
            </td>
            <td>
                <div class="programme-table-border">
                    <h2>Larry</h2>
                </div>
            </td>
            <td>
                <div class="programme-table-border">
                    <h2>Larry</h2>
                </div>
            </td>
            <td>
                <div class="programme-table-border">
                    <h2>Larry</h2>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</section>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>

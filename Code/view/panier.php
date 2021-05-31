<?php
ob_start();
?>
    <section class="about-us" id="center-top-card">
        <meta charset="utf-8">
        <h3>Votre panier</h3>
    </section>
<section class="about-us-content">
        <div class="col-lg-auto">
            <div class="table-responsive">
                <table class="tableCart center table textcolor">
                    <tbody>
                    <tr>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                        <th>Date</th>
                    </tr>
                    <tr>
                        <td>Un billet standard</td>
                        <td>1</td>
                        <td>80 CHF</td>
                        <td>26/06/2021</td>
                        <td>
                            <form method="post" action="/panier/del/">
                                <input type="hidden" name="date" value="">
                                <button class="btn btn-secondary" type="submit">
                                    Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
        <form class="center" method="post" action="/panier/checkout/">
            <button class="btn btn-secondary" type="submit">Procéder au paiment</button>
        </form>
    </section>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
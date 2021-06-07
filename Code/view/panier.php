<?php
ob_start();
?>
    <section class="center-top-card">
        <meta charset="utf-8">
        <h3>Votre panier</h3><br>
    </section>
    <section id="cart">
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
                    <?php
                    foreach ($reservations as $reservation) :
                        foreach ($users as $user) :
                            if ($user['reservations_id'] == $reservation['id']) :
                                if ($user['email'] == $_SESSION['userEmailAddress']) : ?>
                                    <tr>
                                        <td></td>
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
                                <?php
                                endif;
                            endif;
                        endforeach;
                    endforeach; ?>
                    <!-- <tr>
                        <td>Billet standard</td>
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
                    </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
        <form class="text-center" method="post" action="/panier/checkout/">
            <button class="btn btn-secondary" type="submit">Procéder au paiment</button>
        </form>
    </section>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
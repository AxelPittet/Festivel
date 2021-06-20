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
                        <th>VIP</th>
                        <th>Prix</th>
                        <th>Date</th>
                    </tr>
                    <?php
                    $day = '';
                    $vip = '';
                    foreach ($reservations as $reservation) :
                        foreach ($users as $user) :
                            if ($user['id'] == $reservation['users_id']) :
                                if ($user['email'] == $_SESSION['userEmailAddress']) :
                                    if ($reservation['days_id'] == 1) {
                                        $day = '2021-06-26';
                                    } elseif ($reservation['days_id'] == 2) {
                                        $day = '2021-06-27';
                                    } else {
                                        $day = '2021-06-26/27';
                                    }
                                    if ($reservation['vip'] == 0) {
                                        $vip = 'Non';
                                    } else {
                                        $vip = 'Oui';
                                    }
                                    ?>
                                    <tr>
                                        <td><?= $reservation['name'] ?></td>
                                        <td><?= $vip ?></td>
                                        <td><?= $reservation['price'] ?> CHF</td>
                                        <td><?= $day ?></td>
                                        <td>
                                            <a href="index.php?action=delCart&reservationId=<?= $reservation['id'] ?>">
                                                <button class="btn btn-secondary" type="submit"> Supprimer </button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                endif;
                            endif;
                        endforeach;
                    endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
        <a href="index.php?action=confirmCart&userEmailAddress=<?= $_SESSION['userEmailAddress'] ?>"><button class="btn btn-secondary" type="submit">Procéder au paiment</button></a>
    </section>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
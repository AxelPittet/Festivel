<?php
ob_start();
?>
    <section id="" class="about-us">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 bg-light">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3><strong>Ajouter un concert</strong></h3><br>
                            <form class="form" action="index.php?action=formConcert" method="post">
                                <div class="col-md-12 form-group p_star">
                                    <label for="inputID"><b>ID</b></label><input id="bordureTexte" type="number" class="form-control" placeholder="12" name="inputID" required>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label for="inputStartTime"><b>Start Time</b></label><input id="bordureTexte" type="number" class="form-control" placeholder="20:00" name="inputStartTime" required>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label for="inputEndTime"><b>End Time</b></label><input id="bordureTexte" type="number" class="form-control" placeholder="23:00" name="inputEndTime" required>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label for="inputArtistID"><b>ID de l'artiste</b></label><input id="bordureTexte" type="number" class="form-control" placeholder="5" name="inputArtistID" required>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label for="inputDaysID"><b>ID du jour</b></label><input id="bordureTexte" type="number" class="form-control" placeholder="2" name="inputDaysID" required>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </section>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
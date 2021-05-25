<?php
ob_start();
?>

<section id="" class="about-us">
			
									<div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Vous avez déjà un compte ?</h2>
                            <p>Dans ce cas, cliquez sur le lien qui suit :<br>
                            <a href="index.php?action=login" class="tag_btn ">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 bg-light">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3><strong>S'inscrire</strong></h3><br>
                            <form class="form" action="index.php?action=register" method="post">
                                <div class="col-md-12 form-group p_star">
                                    <label for="userName"><b>Nom</b></label><input type="name" class="form-control" placeholder="Nom" name="inputUserName" required>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label for="userFirstName"><b>Prénom</b></label><input type="firstName" class="form-control" placeholder="Prénom" name="inputFirstName" required>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label for="userNumberPhone"><b>Numéro de téléphone</b></label><input type="NumberPhone" class="form-control" placeholder="Numéro de téléphone" name="inputUserNumberPhone" required>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label for="userEmail"><b>Adresse email</b></label><input type="email" class="form-control" placeholder="Email address" name="inputUserEmailAddress" required>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label for="userPsw"><b>Mot de passe</b></label><input type="password" class="form-control" id="password" name="inputUserPsw" value=""
                                           placeholder="Mot de passe">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label for="psw-repeat"><b>Vérifier le mot de passe</b></label><input type="password" class="form-control" id="password" name="inputUserPswRepeat" value=""
                                                                                           placeholder="Mot de passe(vérification)">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input id="btnInscription" type="submit" value="Inscrivez-vous" class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
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
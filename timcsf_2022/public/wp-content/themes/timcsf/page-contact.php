<?php

/*Template name: Contact*/
get_header();
?>


<?php
    // Récupérer le fichier json avec les msg d'erreurs
    $json_data = file_get_contents(get_template_directory_uri() . '/liaisons/js/messages-erreur_form.json');
    $jsonMessagesErreur = json_decode($json_data, true);

    // Créer les tableaux qu'on va remplir dans le cas où une erreur est detectée
    $arrRetroactions = array();
    $arrMessagesRetroactions["retroactions"] = "";
    $arrChampsErreur = array();

    // Tableau des msg qui apparaitront sur l'interface utilisateur : ils sont initialement vides, et on les remplira s'il y a une erreur
    $arrMessagesErreur = array();
    $arrMessagesErreur["nom"] = "";
    $arrMessagesErreur["courriel"] = "";
    $arrMessagesErreur["destinataire"] = "";
    $arrMessagesErreur["sujet"] = "";
    $arrMessagesErreur["message"] = "";
    $arrMessagesErreur["consentement"] = "";
    $arrMessagesErreur["humain"] = "";
    $arrMessagesErreur["telephone"] = "";
    $arrMessagesErreur["retroactions"] = "";

    if (isset($_POST["envoyer"])) {

        if (isset($_POST['nom']) && $_POST['nom'] != null) {
            $nom = $_POST['nom'];
        } else {
            array_push($arrChampsErreur, ["nom", "vide"]);
        }
        if (isset($_POST['courriel']) && $_POST['courriel'] != null) {
            if (!filter_var($_POST['courriel'], FILTER_VALIDATE_EMAIL)) {
                array_push($arrChampsErreur, ["courriel", "motif"]);
            } else {
                $courriel = $_POST['courriel'];
            }

        } else {
            array_push($arrChampsErreur, ["courriel", "vide"]);
        }
        if (isset($_POST['sujet']) && $_POST['sujet'] != null) {
            $sujet = $_POST['sujet'];
        } else {
            array_push($arrChampsErreur, ["sujet", "vide"]);
        }
        if (isset($_POST['message']) && $_POST['message'] != null) {
            $message = $_POST['message'];
        } else {
            array_push($arrChampsErreur, ["message", "vide"]);
        }
        if (isset($_POST['destinataire']) && $_POST['destinataire'] != null) {
            $destinataire = $_POST['destinataire'];
        } else {
            array_push($arrChampsErreur, ["destinataire", "vide"]);
        }


        if (isset($_GET["ID"]) && $_GET["ID"] == 37) {
            if (isset($_POST['telephone']) && $_POST['telephone'] != null) {
                if (!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $_POST['telephone'])) {
                    array_push($arrChampsErreur, ["telephone", "motif"]);
                } else {
                    $telephone = $_POST['telephone'];
                }
            } else {
                array_push($arrChampsErreur, ["telephone", "vide"]);
            }
            if (isset($_POST['consentement']) && $_POST['consentement'] != null) {
                $consentement = $_POST['consentement'];
            } else {
                array_push($arrChampsErreur, ["consentement", "vide"]);
            }

        }

        if (isset($_POST["g-recaptcha-response"]) && $_POST['g-recaptcha-response'] != null) {
            $captcha = $_POST["g-recaptcha-response"];
        } else {
            array_push($arrChampsErreur, ["humain", "vide"]);
        }


        if ($captcha != false) {
            // Si pas d'erreur
            if (count($arrChampsErreur) == 0) {
                // Vérifier captcha
                $secretKey = "6Ld2xZAUAAAAAKTP2SAEIyikTTN2uzxmgcNRaiLv";
                $ip = $_SERVER['REMOTE_ADDR'];
                $response = file_get_contents("https://google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $captcha . "&remoteip=" . $ip);
                $responseKeys = json_decode($response, true);

                if (intval($responseKeys["success"]) === 1) {
                    // Envoyer courriel avec paramètres
                    // Trouver l'adresse du destinataire
                    // $post = get_post($destinataire);
                    $to=get_field('courriel', $destinataire);
                    //$to = get_option('admin_email');
                    $subject = $nom . " a envoyé un message depuis le site " . get_bloginfo('name');
                    $headers = 'De: ' . $courriel . "\r\n" .
                        'Répondre à: ' . $courriel . "\r\n";


                    $envoi = wp_mail($to, $subject, strip_tags($message), $headers);
                    if ($envoi) {
                        // Si envoyé
                        array_push($arrRetroactions, ["retroactions", "envoyer"]);
                    } else {
                        // Sinon message d'erreur
                        array_push($arrRetroactions, ["retroactions", "avorter"]);
                    }
                }
            }
        }
        if (count($arrChampsErreur) != 0) {
            for ($i = 0; $i < count($arrChampsErreur); $i++) {
                $champ = $arrChampsErreur[$i][0];
                $err = $arrChampsErreur[$i][1];
                $arrMessagesErreur[$champ] = $jsonMessagesErreur[$champ]["erreurs"][$err];
            }
        }

        if (count($arrRetroactions) != 0) {
            for ($i = 0; $i < count($arrRetroactions); $i++) {
                $champ = $arrRetroactions[$i][0];
                $err = $arrRetroactions[$i][1];
                $arrMessagesRetroactions[$champ] = $jsonMessagesErreur[$champ]["courriel"][$err];
            }
        }

    }
?>

<main class="page">
    <div class="section1">
        <h1><span>C</span>ontact</h1>
        <?php
            // query
            $args=array(
                'post_type'=>'responsables',
                'post_per_page'=>'6',
                'post_status'=>'publish'
            );
            $the_query = new WP_Query( $args );
        ?>
        <?php if( $the_query->have_posts() ): ?>
        <div class="responsables">
            <div class="ligne">
                <div class="responsable">
                    <?php
                        $image_info = get_field("photo", 48);
                        if($image_info!=null){
                    ?>
                    <img src="<?= $image_info['sizes']['large']?>" alt="<?= $image_info['alt']?>">
                        <?php }?>
                    <div class="textes">
                        <h3><?php echo get_field("prenom",48);?> <?php echo get_field("nom",48);?></h3>
                        <h4>Poste</h4>
                        <span><?php echo get_field("responsabilite",48);?></span>
                        <h4>Tél</h4>
                        <span><?php echo get_field("tel",48);?></span>
                    </div>
                </div>
                <a href="<?php echo get_field("url",1329);?>"><img src="<?php echo get_template_directory_uri();?>/liaisons/images/logoTwitterJaune.svg" alt=""></a>
            </div>
            <div class="ligne">
                <a href="<?php echo get_field("url",1331);?>"><img src="<?php echo get_template_directory_uri();?>/liaisons/images/logoFacebookJaune.svg" alt=""></a>
                <div class="responsable">
                    <div class="textes">
                        <h3><?php echo get_field("prenom",49);?> <?php echo get_field("nom",49);?></h3>
                        <h4>Poste</h4>
                        <span><?php echo get_field("responsabilite",49);?></span>
                        <h4>Tél</h4>
                        <span><?php echo get_field("tel",49);?></span>
                    </div>
                    <?php
                    $image_info = get_field("photo", 49);
                    if($image_info!=null){
                        ?>
                        <img src="<?= $image_info['sizes']['large']?>" alt="<?= $image_info['alt']?>">
                    <?php }?>
                </div>
            </div>
            <div class="ligne">
                <div class="responsable">
                    <?php
                    $image_info = get_field("photo", 50);
                    if($image_info!=null){
                        ?>
                        <img src="<?= $image_info['sizes']['large']?>" alt="<?= $image_info['alt']?>">
                    <?php }?>
                    <div class="textes">
                        <h3><?php echo get_field("prenom",50);?> <?php echo get_field("nom",50);?></h3>
                        <h4>Poste</h4>
                        <span><?php echo get_field("responsabilite",50);?></span>
                        <h4>Tél</h4>
                        <span><?php echo get_field("tel",50);?></span>
                    </div>
                </div>
                <a href="<?php echo get_field("url",1333);?>"><img src="<?php echo get_template_directory_uri();?>/liaisons/images/logoLinkedinJaune.svg" alt=""></a>
            </div>
            <div class="ligne">
                <a href="<?php echo get_field("url",1335);?>"><img src="<?php echo get_template_directory_uri();?>/liaisons/images/logoInstagramJaune.svg" alt=""></a>
                <div class="responsable">
                    <div class="textes">
                        <h3><?php echo get_field("prenom",51);?> <?php echo get_field("nom",51);?></h3>
                        <h4>Poste</h4>
                        <span><?php echo get_field("responsabilite",51);?></span>
                        <h4>Tél</h4>
                        <span><?php echo get_field("tel",51);?></span>
                    </div>
                    <?php
                    $image_info = get_field("photo", 51);
                    if($image_info!=null){
                        ?>
                        <img src="<?= $image_info['sizes']['large']?>" alt="<?= $image_info['alt']?>">
                    <?php }?>
                </div>
            </div>
        </div>
            <?php // endwhile; ?>
        <?php endif; ?>

        <?php wp_reset_query();     // Restore global post data stomped by the_post(). ?>
    </div>


    <div class="section2" id="formulaire">
        <div class="formulaire" id="contact">
            <h2>Écris-nous !</h2>

            <span class="contact__err"><?php echo $arrMessagesRetroactions["retroactions"] ?></span>
            <form action="" method="POST">
                <label for="nom"><?php echo $jsonMessagesErreur["nom"]["label"] ?></label>
                <input type="text" name="nom" id="nom" class="contact__nom"
                       data-validation-required-message="Merci d'entrer votre nom et prénom.">
                <span class="contact__err"><?php echo $arrMessagesErreur["nom"] ?></span>
                <label for="courriel"><?php echo $jsonMessagesErreur["courriel"]["label"] ?></label>
                <input type="email" name="courriel" id="courriel" class="contact__courriel">
                <span class="contact__err"><?php echo $arrMessagesErreur["courriel"] ?></span>
                <label for="destinataire"><?php echo $jsonMessagesErreur["destinataire"]["label"] ?></label>
                <select name="destinataire" id="destinataire" class="contact__destinataire">
                    <option disabled selected value> -- Sélectionner un destinataire --</option>
                    <?php
                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            foreach ($posts as $post) {
                                if ($post->ID != null) {
                                    $the_query->the_post();

                                    ?>
                                    <option value="<?php
                                    echo $destinataire = $post->ID;
                                    ?>" <?php
                                    if (isset($_GET["ID"]) && $destinataire == $_GET["ID"]) {
                                        echo "selected";
                                    }
                                    ?>><?= get_field("prenom"); ?> <?= get_field("nom"); ?></option>
                                <?php }
                            }
                        }
                    }
                    ?>
                </select>
                <span class="contact__err"><?php echo $arrMessagesErreur["destinataire"] ?></span>

                <?php
                if (isset($_GET["ID"]) && $_GET["ID"] == 37) {
                    ?>
                    <label for="tel"><?php echo $jsonMessagesErreur["telephone"]["label"] ?></label>
                    <input type="tel" name="tel" class="contact__tel"
                           data-validation-required-message="Merci d'entrer un sujet.">
                    <span class="contact__err"><?php echo $arrMessagesErreur["telephone"] ?></span>

                    <p><?php echo $jsonMessagesErreur["consentement"]["label"] ?></p>
                    <input type="checkbox" id="oui" name="consentement">
                    <label for="oui">Oui</label><br>
                    <span class="contact__err"><?php echo $arrMessagesErreur["consentement"] ?></span>
                    <?php
                }
                ?>
                <label for="sujet"><?php echo $jsonMessagesErreur["sujet"]["label"] ?></label>
                <input type="sujet" name="sujet" id="sujet" class="contact__sujet"
                       data-validation-required-message="Merci d'entrer un sujet.">
                <span class="contact__err"><?php echo $arrMessagesErreur["sujet"] ?></span>
                <label for="message"><?php echo $jsonMessagesErreur["message"]["label"] ?></label>
                <textarea rows="10" cols="7" style="resize: none;" name="message" id="message" class="contact__message"></textarea>
                <span class="contact__err"><?php echo $arrMessagesErreur["message"] ?></span>
                <div class="g-recaptcha" data-sitekey="6Ld2xZAUAAAAAJ2AKX2HBkO1X3vSb6vuQ4ireXAK"></div>
                <span class="contact__err"><?php echo $arrMessagesErreur["humain"] ?></span>
                <input type="submit" name="envoyer" value="Envoyer" class="contact__envoyer">
            </form>

        </div>
        <div class="map">
            <h2>Où nous trouver ?</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2731.928523268118!2d-71.28838738439772!3d46.786012779138844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cb896dea093d777%3A0xf81581457f682cd6!2sC%C3%A9gep%20de%20Sainte-Foy!5e0!3m2!1sfr!2sca!4v1645647065773!5m2!1sfr!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</main>

<?php
    get_footer();
?>

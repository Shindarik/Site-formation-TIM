<?php

/*Template name: Contact*/
get_header();
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
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/liaisons/images/logoTwitterJaune.svg" alt=""></a>
            </div>
            <div class="ligne">
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/liaisons/images/logoFacebookJaune.svg" alt=""></a>
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
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/liaisons/images/logoLinkedinJaune.svg" alt=""></a>
            </div>
            <div class="ligne">
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/liaisons/images/logoInstagramJaune.svg" alt=""></a>
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


    <div class="section2">
        <div class="formulaire">
            <h2>Écris-nous !</h2>
            <form action="">
                <label for="name">Prénom et nom</label>
                <input type="text" name="name" id="name" placeholder="Entre ton prénom et ton nom ...">

                <label for="responsable">Responsable</label>
                <select name="responsable" id="responsable">
                    <option value="0" selected disabled hidden>Choisis un responsable</option>
                    <option value="1">Sylvain Lamoureux</option>
                </select>

                <label for="mail">Email</label>
                <input type="email" name="mail" id="mail" placeholder="Entre ton email ...">

                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" style="resize:none;" placeholder="Entre ton message ..."></textarea>
            </form>
        </div>
        <div class="map">
            <h2>Où nous trouver ?</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2731.928523268118!2d-71.28838738439772!3d46.786012779138844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cb896dea093d777%3A0xf81581457f682cd6!2sC%C3%A9gep%20de%20Sainte-Foy!5e0!3m2!1sfr!2sca!4v1645647065773!5m2!1sfr!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

</main>

<?php
    get_footer();
?>

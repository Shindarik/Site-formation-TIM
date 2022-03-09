<?php
/*Template name: Formation*/
get_header();
?>

<main class="page">
    <div class="section1">
        <h1><span>F</span>ormation</h1>
        <?php
        // query
        $args=array(
            'post_type'=>'section_accueil',
            'post_per_page'=>'11',
            'post_status'=>'publish'
        );
        $the_query = new WP_Query( $args );
        ?>
        <?php if( $the_query->have_posts() ): ?>
        <div class="section__temoignages">
            <div class="section__temoignages__textes">
                <h2 class="textes__title"><?php echo get_field("titre",69);?></h2>
                <p class="textes__description"><?php echo get_field("texte_descriptif", 69);?></p>
                <?php endif;?>
                <div class="boutons">
                    <?php
                    // query
                    $args=array(
                        'post_type'=>'formation',
                        'post_per_page'=>'5',
                        'post_status'=>'publish'
                    );
                    $the_query = new WP_Query( $args );
                    ?>
                    <?php if( $the_query->have_posts() ): ?>
                    <button title="<?php echo get_field("titre",691);?>" class="active" data-card="integration"><?php echo get_field("texte_descriptif", 691);?></button>
                    <button title="<?php echo get_field("titre",693);?>" data-card="programmation"><?php echo get_field("texte_descriptif", 693);?></button>
                    <button title="<?php echo get_field("titre",695);?>" data-card="conception"><?php echo get_field("texte_descriptif", 695);?></button>
                    <button title="<?php echo get_field("titre",697);?>" data-card="medias"><?php echo get_field("texte_descriptif", 697);?></button>
                    <button title="<?php echo get_field("titre",699);?>" data-card="autres"><?php echo get_field("texte_descriptif", 699);?></button>
                </div>
                <a href="<?php echo get_field("fichier",69);?>" target="_blank">
                    <span><?php echo get_field("caption",69);?></span>
                    <img src="<?php echo get_template_directory_uri();?>/liaisons/images/link.svg" alt="">
                </a>
            </div>
            <div class="temoignages">
                <div class="card integration active">
                    <div class="card__titre">
                        <h3><?php echo get_field("titre",707);?></h3>
                        <?php
                            $image_info = get_field("photo", 707);
                            if($image_info!=null){
                        ?>
                        <img class="card__image" src="<?= $image_info['sizes']['large']?>" alt="<?= $image_info['alt']?>">
                        <?php }?>
                    </div>
                    <div class="card__textes">
                        <?php echo get_field("texte_descriptif",707);?>
                    </div>
                </div>
                <div class="card programmation">
                    <div class="card__titre">
                        <h3><?php echo get_field("titre",715);?></h3>
                        <?php
                        $image_info = get_field("photo", 715);
                        if($image_info!=null){
                            ?>
                            <img class="card__image" src="<?= $image_info['sizes']['large']?>" alt="<?= $image_info['alt']?>">
                        <?php }?>
                    </div>
                    <div class="card__textes">
                        <?php echo get_field("texte_descriptif",715);?>
                    </div>
                </div>
                <div class="card conception">
                    <div class="card__titre">
                        <h3><?php echo get_field("titre",717);?></h3>
                        <?php
                        $image_info = get_field("photo", 717);
                        if($image_info!=null){
                            ?>
                            <img class="card__image" src="<?= $image_info['sizes']['large']?>" alt="<?= $image_info['alt']?>">
                        <?php }?>
                    </div>
                    <div class="card__textes">
                        <?php echo get_field("texte_descriptif",717);?>
                    </div>
                </div>
                <div class="card medias">
                    <div class="card__titre">
                        <h3><?php echo get_field("titre",719);?></h3>
                        <?php
                        $image_info = get_field("photo", 719);
                        if($image_info!=null){
                            ?>
                            <img class="card__image" src="<?= $image_info['sizes']['large']?>" alt="<?= $image_info['alt']?>">
                        <?php }?>
                    </div>
                    <div class="card__textes">
                        <?php echo get_field("texte_descriptif",719);?>
                    </div>
                </div>
                <div class="card autres">
                    <div class="card__titre">
                        <h3><?php echo get_field("titre",722);?></h3>
                        <?php
                        $image_info = get_field("photo", 722);
                        if($image_info!=null){
                            ?>
                            <img class="card__image" src="<?= $image_info['sizes']['large']?>" alt="<?= $image_info['alt']?>">
                        <?php }?>
                    </div>
                    <div class="card__textes">
                        <?php echo get_field("texte_descriptif",722);?>
                    </div>
                </div>
            </div>
        </div>

        <div class="section2">
            <h2><?php echo get_field("titre",734);?></h2>
            <div class="contenus">
                <div class="medias">
                    <video controls preload="metadata">
                        <?php $chemin=wp_upload_dir();?>
                        <source src="<?php echo $chemin['baseurl'];?>/2022/03/presentationVideo.mp4" type="video/mp4">
                        <source src="<?php echo $chemin['baseurl'];?>/2022/03/presentationVideo.webmhd.webm" type="video/webm">
                        <p>Votre navigateur ne prend pas en charge les vidéos HTML5.
                            Voici <a href="<?php echo wp_upload_dir();?>/2022/03/presentationVideo.mp4">un lien pour télécharger la vidéo</a>.</p>
                    </video>

                    <?php
                        $image_info = get_field("image1", 734);
                        if($image_info!=null){
                    ?>
                    <img src="<?php echo $image_info['sizes']['medium'];?>" alt="<?php $image_info['alt']?>" class="image1">
                    <?php }?>
                    <?php
                    $image_info = get_field("image2", 734);
                    if($image_info!=null){
                        ?>
                        <img src="<?php echo $image_info['sizes']['medium'];?>" alt="<?php $image_info['alt']?>" class="image2">
                    <?php }?>
                </div>
                <div class="stats">
                    <div class="stats1">
                        <?php
                        $image_info = get_field("photo", 760);
                        if($image_info!=null){
                            ?>
                            <img src="<?php echo $image_info['sizes']['large'];?>" alt="<?php $image_info['alt']?>" class="image2">
                        <?php }?>
                        <p><?php echo get_field("titre", 760);?></p>
                    </div>
                    <div class="stats2">
                        <p><?php echo get_field("titre", 766);?></p>
                        <?php
                        $image_info = get_field("photo", 766);
                        if($image_info!=null){
                            ?>
                            <img src="<?php echo $image_info['sizes']['large'];?>" alt="<?php $image_info['alt']?>" class="image2">
                        <?php }?>
                    </div>
                    <div class="stats3">
                        <?php
                        $image_info = get_field("photo", 768);
                        if($image_info!=null){
                            ?>
                            <img src="<?php echo $image_info['sizes']['large'];?>" alt="<?php $image_info['alt']?>" class="image2">
                        <?php }?>
                        <p><?php echo get_field("titre", 768);?></p>
                    </div>
                    <div class="stats4">
                        <p><?php echo get_field("titre", 770);?></p>
                        <?php
                        $image_info = get_field("photo", 770);
                        if($image_info!=null){
                            ?>
                            <img src="<?php echo $image_info['sizes']['large'];?>" alt="<?php $image_info['alt']?>" class="image2">
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <div class="section3">
            <?php
            // query
            $args=array(
                'post_type'=>'temoignages',
                'post_per_page'=>'9',
                'post_status'=>'publish'
            );
            $the_query = new WP_Query( $args );
            $slide1Id = random_int(777, 793);
            $slide2Id = random_int(777, 793);
            while ($slide2Id == $slide1Id){
                $slide2Id = random_int(777, 793);
            }
            $slide3Id = random_int(777, 793);
            while ($slide3Id == $slide2Id || $slide3Id == $slide1Id){
                $slide3Id = random_int(777, 793);
            }
            ?>
            <?php if( $the_query->have_posts() ): ?>
        <?php // while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="slider formation">
                <h2>Les témoignages</h2>
                <div class="slider__projets">
                    <img class="prevSlide" src="<?php echo get_template_directory_uri();?>/liaisons/images/arrow.svg" alt="" style="transform: rotate(180deg)">
                    <ul class="slider__list">
                        <li class="slide" data-slide="1">
                            <div class="slide__entete">
                                <h3 class="slide__title"><?php echo get_field("temoin",$slide1Id);?></h3>
                                <span class="slide__cours"><?php echo get_field("annee_diplomation",$slide1Id);?></span>
                            </div>
                            <div class="slide__corps">
                                <?php
                                $image_info = get_field("photo", $slide1Id);
                                if($image_info!=null){
                                    ?>
                                    <img class="slide__corpsImage" src="<?= $image_info['sizes']['large']?>" alt="<?= $image_info['alt']?>">
                                <?php }?>
                                <div class="slide__corpsTexte">
                                    <?php echo get_field("temoignage", $slide1Id);?>
                                    <p class="poste"><?php echo get_field("poste", $slide1Id);?> <a href="<?php echo get_field("url_entreprise", $slide1Id);?>"><?php echo get_field("entreprise", $slide1Id);?></a></p>
                                </div>
                            </div>

                        </li>
                        <li class="slide" data-slide="2" style="display: none">
                            <div class="slide__entete">
                                <h3 class="slide__title"><?php echo get_field("temoin",$slide2Id);?></h3>
                                <span class="slide__cours"><?php echo get_field("annee_diplomation",$slide2Id);?></span>
                            </div>
                            <div class="slide__corps">
                                <?php
                                $image_info = get_field("photo", $slide2Id);
                                if($image_info!=null){
                                    ?>
                                    <img class="slide__corpsImage" src="<?= $image_info['sizes']['large']?>" alt="<?= $image_info['alt']?>">
                                <?php }?>
                                <div class="slide__corpsTexte">
                                    <?php echo get_field("temoignage", $slide2Id);?>
                                    <p class="poste"><?php echo get_field("poste", $slide2Id);?> <a href="<?php echo get_field("url_entreprise", $slide2Id);?>"><?php echo get_field("entreprise", $slide2Id);?></a></p>
                                </div>
                            </div>

                        </li>
                        <li class="slide" data-slide="3" style="display: none">
                            <div class="slide__entete">
                                <h3 class="slide__title"><?php echo get_field("temoin",$slide3Id);?></h3>
                                <span class="slide__cours"><?php echo get_field("annee_diplomation",$slide3Id);?></span>
                            </div>
                            <div class="slide__corps">
                                <?php
                                $image_info = get_field("photo", $slide3Id);
                                if($image_info!=null){
                                    ?>
                                    <img class="slide__corpsImage" src="<?= $image_info['sizes']['large']?>" alt="<?= $image_info['alt']?>">
                                <?php }?>
                                <div class="slide__corpsTexte">
                                    <?php echo get_field("temoignage", $slide3Id);?>
                                    <p class="poste"><?php echo get_field("poste", $slide3Id);?> <a href="<?php echo get_field("url_entreprise", $slide3Id);?>"><?php echo get_field("entreprise", $slide3Id);?></a></p>
                                </div>
                            </div>

                        </li>
                    </ul>
                    <img class="nextSlide" src="<?php echo get_template_directory_uri();?>/liaisons/images/arrow.svg" alt="">
                </div>

                <ul class="dots">
                    <li class="dot" data-slide="1"></li>
                    <li class="dot" data-slide="2"></li>
                    <li class="dot" data-slide="3"></li>
                </ul>
                <?php // endwhile; ?>
                <?php endif; ?>

            </div>

            <?php wp_reset_query();     // Restore global post data stomped by the_post(). ?>
        </div>

        <div class="section4">
            <h2><?php echo get_field("titre", 826);?></h2>
            <div class="jobGrid">
                <fieldset class="jobPart1">
                    <legend><?php echo get_field("titre", 829);?></legend>
                    <p><?php echo get_field("texte_descriptif", 829);?></p>
                </fieldset>
                <fieldset class="jobPart2">
                    <legend><?php echo get_field("titre", 831);?></legend>
                    <p><?php echo get_field("texte_descriptif", 831);?></p>
                </fieldset>
                <fieldset class="jobPart3">
                    <legend><?php echo get_field("titre", 833);?></legend>
                    <p><?php echo get_field("texte_descriptif", 833);?></p>
                    <a href="<?php echo get_field("url", 833);?>">
                        <span><?php echo get_field("caption", 833);?></span>
                        <img src="<?php echo get_template_directory_uri(); ?>/liaisons/images/link.svg" alt="">
                    </a>
                </fieldset>
            </div>

            <div class="section5">
                <div class="inscription">
                    <h2><?php echo get_field("titre", 839);?></h2>
                    <div>
                        <?php echo get_field("texte_descriptif", 839);?>
                        <a class="contactLink" href="<?= get_the_permalink(5);?>"><?php echo get_field("caption", 839);?></a>
                    </div>
                </div>
                <div class="etudiantJour">
                    <h2><?php echo get_field("titre", 844);?></h2>
                    <p>
                        <?php echo get_field("texte_descriptif", 844);?>
                    </p>
                    <?php
                    $lien=get_field_object("lien_responsable", 844);
                    $post_object=$lien["value"];
                    ?>
                    <a href="<?= add_query_arg('ID', $post_object->ID, get_the_permalink(5));?>#formulaire">
                        Contacter <?php echo $post_object->post_title;?>
                    </a>
                </div>
            </div>


    <?php endif;?>
    <script src="<?php echo get_template_directory_uri();?>/liaisons/js/formation.js" defer></script>
    <script src="<?php echo get_template_directory_uri();?>/liaisons/js/slider.js" defer></script>
</main>

<?php
    get_footer();
?>

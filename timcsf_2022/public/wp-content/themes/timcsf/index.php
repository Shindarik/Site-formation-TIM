<?php
get_header();
?>

<?php
$args=array(
    'post_type'=>'cours',
    'posts_per_page'=>-1,
    'post_status'=>'publish'
);

$the_query = new WP_Query( $args );

$arrCours=array();
if($the_query->have_posts()){
    while ($the_query->have_posts()){
        $the_query->the_post();
        array_push($arrCours, $post);
    }
}

wp_reset_postdata();
?>

    <main class="page">
        <div class="titre">
            <h1 class="titre__title"><span>T</span>echniques d'<span>I</span>ntégration <span>M</span>ultimédia</h1>
            <span class="titre__subtitle">Web & Apps au CÉGEP de Ste-Foy</span>
            <a class="btnDiscovery" href="#timEnBref">
                <span>Découvrir</span>
                <img src="<?php echo get_template_directory_uri();?>/liaisons/images/circleArrowDownBlack.svg" alt="">
            </a>
        </div>

        <?php
        // query
        $args=array(
            'post_type'=>'section_accueil',
            'post_per_page'=>'5',
            'post_status'=>'publish'
        );
        $the_query = new WP_Query( $args );
        ?>
        <?php if( $the_query->have_posts() ): ?>
            <?php // while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="intro__section" id="timEnBref">
                <div class="intro__textes">
                    <h2 class="intro__title"><?php echo get_field("titre",69);?></h2>
                    <p class="intro__description"><?php echo get_field("texte_descriptif", 69);?></p>
                </div>

                <?php
                    $image_info = get_field("photo", 69);
                    if($image_info!=null){
                ?>

                <picture>
                    <source media="(min-width: 1440px)" srcset="<?= $image_info['sizes']['large']?>">
                    <img class="intro__image" src="<?= $image_info['sizes']['medium']?>" alt="<?= $image_info['alt']?>">
                </picture>
                    <?php }?>

            </div>
            <?php // endwhile; ?>
        <?php endif; ?>

        <?php wp_reset_query();     // Restore global post data stomped by the_post(). ?>


        <?php
        // query
        $args=array(
            'post_type'=>'projets',
            'posts_per_page'=>'3',
            'post_status'=>'publish',
            'orderby'=>'rand'
        );
        $the_query = new WP_Query( $args );
        ?>
        <?php if( $the_query->have_posts() ): ?>
            <div class="slider">
                <h2>Quelques projets</h2>
                <div class="slider__projets">
                    <img class="prevSlide" src="<?php echo get_template_directory_uri();?>/liaisons/images/arrow.svg" alt="" style="transform: rotate(180deg)">
                    <ul class="slider__list">
                        <li class="slide" data-slide="1">
                            <?php $the_query->the_post(); ?>
                            <div class="slide__entete">
                                <h3 class="slide__title"><?php echo get_field("titre");?></h3>
                                <?php
                                for($j=0; $j<count($arrCours);$j++){
                                    if(get_field("cours") == get_field("id", $arrCours[$j]->ID)){?>
                                        <span class="sous-titre"><?php echo get_field("short_name", $arrCours[$j]->ID);?></span>
                                    <?php }
                                }
                                ?>
                            </div>
                            <div class="slide__corps">
                                <?php
                                $image_info = get_field("photo_1");
                                if($image_info!=null){
                                    ?>
                                    <img class="slide__corpsImage" src="<?= $image_info['sizes']['large']?>" alt="<?= $image_info['alt']?>">
                                <?php }?>
                                <div class="slide__corpsTexte">
                                    <?php echo get_field("description");?>
                                    <div class="slide__tags"><?php echo get_field("technologies");?></div>
                                    <a href="<?php the_permalink();?>">Voir le projet</a>
                                </div>
                            </div>

                        </li>
                        <li class="slide" data-slide="2" style="display: none">
                            <?php $the_query->the_post(); ?>
                            <div class="slide__entete">
                                <h3 class="slide__title"><?php echo get_field("titre");?></h3>
                                <?php
                                for($j=0; $j<count($arrCours);$j++){
                                    if(get_field("cours") == get_field("id", $arrCours[$j]->ID)){?>
                                        <span class="sous-titre"><?php echo get_field("short_name", $arrCours[$j]->ID);?></span>
                                    <?php }
                                }
                                ?>
                            </div>
                            <div class="slide__corps">
                                <?php
                                $image_info = get_field("photo_1");
                                if($image_info!=null){
                                    ?>
                                    <img class="slide__corpsImage" src="<?= $image_info['sizes']['large']?>" alt="<?= $image_info['alt']?>">
                                <?php }?>
                                <div class="slide__corpsTexte">
                                    <?php echo get_field("description");?>
                                    <div class="slide__tags"><?php echo get_field("technologies");?></div>
                                    <a href="<?php the_permalink();?>">Voir le projet</a>
                                </div>
                            </div>

                        </li>
                        <li class="slide" data-slide="3" style="display: none">
                            <?php $the_query->the_post(); ?>
                            <div class="slide__entete">
                                <h3 class="slide__title"><?php echo get_field("titre");?></h3>
                                <?php
                                for($j=0; $j<count($arrCours);$j++){
                                    if(get_field("cours") == get_field("id", $arrCours[$j]->ID)){?>
                                        <span class="sous-titre"><?php echo get_field("short_name", $arrCours[$j]->ID);?></span>
                                    <?php }
                                }
                                ?>
                            </div>
                            <div class="slide__corps">
                                <?php
                                $image_info = get_field("photo_1");
                                if($image_info!=null){
                                    ?>
                                    <img class="slide__corpsImage" src="<?= $image_info['sizes']['large']?>" alt="<?= $image_info['alt']?>">
                                <?php }?>
                                <div class="slide__corpsTexte">
                                    <?php echo get_field("description");?>
                                    <div class="slide__tags"><?php echo get_field("technologies");?></div>
                                    <a href="<?php the_permalink();?>">Voir le projet</a>
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


         <?php
        // query
        $args=array(
            'post_type'=>'section_accueil',
            'post_per_page'=>'5',
            'post_status'=>'publish'
        );
        $the_query = new WP_Query( $args );
        ?>
        <?php if( $the_query->have_posts() ): ?>
            <?php // while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="contact">
                    <h2>Envie de nous rejoindre ?<span></span></h2>
                    <div class="contact__corps">
                        <div class="contact__part">
                            <div class="contact__textes">
                                <h3><?php echo get_field("titre", 631);?></h3>
                                <p><?php echo get_field("texte_descriptif", 631);?></p>
                                <?php
                                    $lien = get_field_object("lien_responsable");
                                    $post_object = $lien['value'];
                                ?>
                            </div>
                            <a class="contact__image" href="<?= add_query_arg('ID', $post_object->ID, get_the_permalink(5))?>#formulaire">
                                <?php
                                    $image_info = get_field("photo", 631);
                                    if($image_info!=null){
                                ?>
                                        <img src="<?= $image_info['sizes']['medium']?>" alt="<?= $image_info['alt']?>">
                                <?php }?>
                                <span><?php echo get_field("caption", 631);?></span>
                            </a>
                        </div>
                        <div class="contact__part">
                            <a class="contact__image" href="https://www.sracq.qc.ca/">
                                <?php
                                $image_info = get_field("photo", 636);
                                if($image_info!=null){
                                    ?>
                                    <img src="<?= $image_info['sizes']['medium']?>" alt="<?= $image_info['alt']?>">
                                <?php }?>
                                <span><?php echo get_field("caption", 636);?></span>
                            </a>
                            <div class="contact__textes">
                                <h3><?php echo get_field("titre", 636);?></h3>
                                <p><?php echo get_field("texte_descriptif", 636);?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php // endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query();     // Restore global post data stomped by the_post(). ?>
        <script src="<?php echo get_template_directory_uri();?>/liaisons/js/slider.js" defer></script>
    </main>

<?php
//get_sidebar();
get_footer();
?>
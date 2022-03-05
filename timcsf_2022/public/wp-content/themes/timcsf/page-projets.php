<?php

/*Template name: Projets*/
get_header();
?>

<main class="page">
    <div class="section1 projets">

        <h1><span>P</span>rojets</h1>

        <?php
        // query
        $args=array(
            'post_type'=>'filtres',
            'post_per_page'=>'10',
            'post_status'=>'publish'
        );
        $the_query = new WP_Query( $args );
        ?>
        <?php if( $the_query->have_posts() ): ?>

        <div class="projetsContenus">
            <div class="filtres">
                <h2>Filtres</h2>

                <div class="filtre1">
                    <h3><?php echo get_field("titre",866);?></h3>
                    <div class="annees">
                        <div class="annee"><?php echo get_field("filtre_1",866);?></div>
                        <div class="annee"><?php echo get_field("filtre_2",866);?></div>
                        <div class="annee"><?php echo get_field("filtre_3",866);?></div>
                    </div>
                </div>

                <div class="filtre2">
                    <h3><?php echo get_field("titre",868);?></h3>
                    <div class="axes">
                        <div class="axe"><?php echo get_field("filtre_1",868);?></div>
                        <div class="axe"><?php echo get_field("filtre_2",868);?></div>
                        <div class="axe"><?php echo get_field("filtre_3",868);?></div>
                        <div class="axe"><?php echo get_field("filtre_4",868);?></div>
                        <div class="axe"><?php echo get_field("filtre_5",868);?></div>
                    </div>
                </div>
                <?php endif;?>
            </div>

            <div class="projetsGrid">
                <?php
                // query
                $args=array(
                    'post_type'=>'projets',
                    'post_per_page'=>'3',
                    'post_status'=>'publish'
                );
                $the_query = new WP_Query( $args );
                ?>
                <?php if( $the_query->have_posts() ): ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="cardProjets">
                            <?php
                                    $image_info = get_field("photo_1");
                                    if($image_info!=null){
                            ?>
                            <img src="<?= $image_info['sizes']['medium']?>" alt="<?= $image_info['alt']?>">
                            <?php }?>
                            <h3><?php echo get_field("titre");?></h3>
                            <p>Par <i><?php echo get_field("etudiants");?></i></p>
                            <div class="cachet">
                                <b><?php echo get_field("cours");?></b>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif;?>
            </div>
        </div>

    </div>
</main>

<?php
    get_footer();
?>

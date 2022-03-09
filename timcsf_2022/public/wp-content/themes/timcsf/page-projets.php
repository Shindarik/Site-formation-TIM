<?php

/*Template name: Projets*/
get_header();
?>

<main class="page">
    <div class="section1 projets">

        <h1><span>P</span>rojets</h1>

        <?php
            $args=array(
                'post_type'=>'finissants',
                'posts_per_page'=>-1,
                'post_status'=>'publish'
            );

            $the_query = new WP_Query( $args );

            $arrFinissants=array();
            if($the_query->have_posts()){
                while ($the_query->have_posts()){
                    $the_query->the_post();
                    array_push($arrFinissants, $post);
                }
            }

            wp_reset_postdata();
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

        <?php
            if(get_query_var('paged')){
                $paged = get_query_var('paged');
            }else{
                $paged = 1;
            }

            // query
            $args=array(
                'post_type'=>'projets',
                'post_status'=>'publish',
                'posts_per_page'=>10,
                'meta_key'=>'titre',
                'orderby'=>'meta_value',
                'order'=>'ASC',
                'paged'=>$paged
            );
            $the_query = new WP_Query( $args );
        ?>

        <div class="pageBtn">
            <?php
            $lien = get_template_directory_uri()."/liaisons/images/arrow.svg";
            echo get_previous_posts_link('<img src='.$lien.' style="transform: rotate(180deg)">');
            ?>

            <span><?php echo " ".$paged."/".$the_query->max_num_pages." "; ?></span>

            <?php
            $lien = get_template_directory_uri()."/liaisons/images/arrow.svg";
            echo get_next_posts_link('<img src='.$lien.'>',$the_query->max_num_pages);
            ?>
        </div>

            <div class="projetsGrid">

                <?php if( $the_query->have_posts() ): ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <a href="<?php echo the_permalink() ?>" class="cardProjets">
                            <?php
                                    $image_info = get_field("photo_1");
                                    if($image_info!=null){
                            ?>
                            <img src="<?= $image_info['sizes']['medium']?>" alt="<?= $image_info['alt']?>">
                            <?php }?>
                            <h3><?php echo get_field("titre");?></h3>
                            <?php
                                for($i=0; $i<count($arrFinissants);$i++){
                                    if(get_field("etudiants") == get_field("id", $arrFinissants[$i]->ID)){?>
                                        <p>Par <i><?php echo get_field("prenom", $arrFinissants[$i]->ID);?> <?php echo get_field("nom", $arrFinissants[$i]->ID);?></i></p>
                                    <?php }
                                }
                            ?>

                            <?php
                            for($j=0; $j<count($arrCours);$j++){
                                if(get_field("cours") == get_field("id", $arrCours[$j]->ID)){?>
                                    <div class="cachet">
                                        <b><?php echo get_field("short_name", $arrCours[$j]->ID);?></b>
                                        <b> / Session <?php echo get_field("session", $arrCours[$j]->ID);?></b>
                                    </div>
                                <?php }
                            }
                            ?>

                        </a>
                    <?php endwhile; ?>
                <?php endif;?>
                <?php wp_reset_query(); ?>
            </div>

        <div class="pageBtn">
            <?php
            $lien = get_template_directory_uri()."/liaisons/images/arrow.svg";
            echo get_previous_posts_link('<img src='.$lien.' style="transform: rotate(180deg)">');
            ?>

            <span><?php echo " ".$paged."/".$the_query->max_num_pages." "; ?></span>

            <?php
            $lien = get_template_directory_uri()."/liaisons/images/arrow.svg";
            echo get_next_posts_link('<img src='.$lien.'>',$the_query->max_num_pages);
            ?>
        </div>

    </div>

</main>

<?php
    get_footer();
?>

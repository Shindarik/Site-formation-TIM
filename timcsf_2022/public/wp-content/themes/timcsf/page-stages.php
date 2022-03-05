<?php

/*Template name: Stages*/
get_header();
?>

<main class="page">

    <div class="section1">

        <h1><span>S</span>tages</h1>

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

        <div class="stagesGrid">
            <div class="sujet">
                <h2><?php echo get_field("titre", 851);?></h2>
                <p><?php echo get_field("texte_descriptif", 851);?></p>
            </div>
            <div class="employeur">
                <h2><?php echo get_field("titre", 853);?></h2>
                <p><?php echo get_field("texte_descriptif", 853);?></p>
                <a href="<?php echo get_field("fichier", 853);?>" target="_blank">
                    <span><?php echo get_field("caption", 853);?></span>
                    <img src="<?php echo get_template_directory_uri();?>/liaisons/images/link.svg" alt="">
                </a>
            </div>
            <div class="question">
                <h2><?php echo get_field("caption", 851);?></h2>
                <?php
                $lien=get_field_object("lien_responsable", 851);
                $post_object=$lien["value"];
                ?>
                <a href="<?= add_query_arg('ID', $post_object->ID, get_the_permalink(5));?>">
                    Contacter <?php echo $post_object->post_title;?>
                </a>
            </div>
        </div>
    </div>

    <?php endif;?>
</main>

<?php
    get_footer();
?>

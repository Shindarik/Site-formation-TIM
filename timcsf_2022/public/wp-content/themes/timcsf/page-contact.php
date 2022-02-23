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

</main>

<?php
    get_footer();
?>

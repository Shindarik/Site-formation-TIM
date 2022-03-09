<?php
    get_header();
?>

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

<main class="page">
    <div class="section1 projet">
        <h1><?php echo get_field("titre");?></h1>
        <?php
            for($j=0; $j<count($arrCours);$j++){
                if(get_field("cours") == get_field("id", $arrCours[$j]->ID)){?>
                    <h2 class="sous-titre"><?php echo get_field("nom", $arrCours[$j]->ID);?> / Session <?php echo get_field("session", $arrCours[$j]->ID);?></h2>
                <?php }
            }
        ?>

        <?php
        $image_info = get_field("photo_1");
        if($image_info!=null){
            ?>
            <img class="mediasProjet" src="<?= $image_info['sizes']['large']?>" alt="<?= $image_info['alt']?>">
        <?php }?>

        <?php
        $image_info = get_field("photo_2");
        if($image_info!=null){
            ?>
            <img class="mediasProjet" src="<?= $image_info['sizes']['large']?>" alt="<?= $image_info['alt']?>">
        <?php }?>

        <?php
        $image_info = get_field("photo_3");
        if($image_info!=null){
            ?>
            <img class="mediasProjet" src="<?= $image_info['sizes']['large']?>" alt="<?= $image_info['alt']?>">
        <?php }?>

        <?php
        $image_info = get_field("photo_4");
        if($image_info!=null){
            ?>
            <img class="mediasProjet" src="<?= $image_info['sizes']['large']?>" alt="<?= $image_info['alt']?>">
        <?php }?>

        <div class="textesProjet">
            <p><?php echo get_field("description");?></p>
        </div>

        <div class="technologiesProjet">
            <b>Les technologies utilisées : </b> <?php echo get_field("technologies");?>
        </div>

        <?php
        $url = get_field("url");
        if($url!=null){
            ?>
            <a class="urlProjet" href="<?php echo $url ?>">Voir le projet</a>
        <?php }?>

        <h3>Étudiant</h3>
        <div class="students">
            <div class="student">
                <?php
                for($i=0; $i<count($arrFinissants);$i++){
                    if(get_field("etudiants") == get_field("id", $arrFinissants[$i]->ID)){?>
                            <h4><?php echo get_field("prenom", $arrFinissants[$i]->ID);?> <?php echo get_field("nom", $arrFinissants[$i]->ID);?></h4>
                            <div class="studentContenu">
                                <?php
                                $image_info = get_field("photo_1", $arrFinissants[$i]->ID);
                                if($image_info!=null){
                                    ?>
                                    <img class="etudiantPhoto p1" src="<?= $image_info['sizes']['medium']?>" alt="<?= $image_info['alt']?>">
                                <?php }?>

                                <?php
                                $image_info = get_field("photo_2", $arrFinissants[$i]->ID);
                                if($image_info!=null){
                                    ?>
                                    <img class="etudiantPhoto p2" src="<?= $image_info['sizes']['medium']?>" alt="<?= $image_info['alt']?>">
                                <?php }?>
                                <ul>
                                    <li>Intérêt Gestion de projet - <b><?php echo get_field("interet_gestion_de_projet", $arrFinissants[$i]->ID);?>/10</b></li>
                                    <li>Intérêt Design Interface - <b><?php echo get_field("interet_design_interface", $arrFinissants[$i]->ID);?>/10</b></li>
                                    <li>Intérêt Traitement Médias - <b><?php echo get_field("interet_traitement_medias", $arrFinissants[$i]->ID);?>/10</b></li>
                                    <li>Intérêt Intégration - <b><?php echo get_field("interet_integration", $arrFinissants[$i]->ID);?>/10</b></li>
                                    <li>Intérêt Programmation - <b><?php echo get_field("interet_programmation", $arrFinissants[$i]->ID);?>/10</b></li>
                                </ul>
                            </div>
                    <?php }
                }
                ?>
            </div>
        </div>
    </div>

    <script src="<?php echo get_template_directory_uri();?>/liaisons/js/single-projets.js" defer></script>
</main>

<?php
    get_footer();
?>
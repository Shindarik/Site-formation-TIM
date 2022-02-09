<?php

/*Template name: Contact*/
get_header();
echo "page-contact.php";
?>

<main class="page">
    <?php the_post();?>
    <div class="entetePage">
        <h2><?php the_title();?></h2>
    </div>
    <p>
        <?php the_content();?>
    </p>
</main>

<?php
    get_sidebar();
    get_footer();
?>

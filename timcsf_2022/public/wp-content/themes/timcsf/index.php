<?php
get_header();
?>

<main class="page">
    <?php
        if(have_posts()){
            while ((have_posts())){
                the_post();?>
                <article class="article">
                    <header class="article__entete">
                        <h2 class="article__titre">
                            <a href="<?php the_permalink();?>" class="article__lien"><?php the_title();?></a>
                        </h2>
                    </header>
                    <p class="article__texte">
                        <?php the_content();?>
                    </p>
                </article><?php
            }
        }?>
</main>

<?php
get_sidebar();
get_footer();
?>

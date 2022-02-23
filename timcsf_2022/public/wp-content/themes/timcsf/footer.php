    </div>
    <footer class="piedDePage">
        <div class="logos">
            <a class="piedDePage__logo" href="<?php bloginfo('url');?>" title="<?php bloginfo("name");?>">
                <img src="<?php echo get_template_directory_uri();?>/liaisons/images/logoTIMWhite.svg" alt="Logo des TIM">
            </a>
            <span>X</span>
            <a class="piedDePage__logo" href="https://www.csfoy.ca/programmes/tous-les-programmes/programmes-techniques/techniques-dintegration-multimedia-web-et-apps/" title="Cégep de Ste-Foy - TIM">
                <img src="<?php echo get_template_directory_uri();?>/liaisons/images/logoCegepWhite.svg" alt="Logo du Cégep de Ste-Foy">
            </a>
        </div>
        <div class="credit">Conception et développement web par Matéo Suslu.</div>
        <?php if(has_nav_menu('principal')){?>
            <nav class="navigation__secondaire">
                <?php wp_nav_menu(array('theme_location'=>'principal'));?>
                <div class="social">
                    <a href="https://twitter.com/timcsf"><img src="<?php echo get_template_directory_uri();?>/liaisons/images/logoTwitter.svg" alt="Logo Twitter"></a>
                    <a href="https://www.facebook.com/timcsf"><img src="<?php echo get_template_directory_uri();?>/liaisons/images/logoFacebook.svg" alt="Logo Facebook"></a>
                    <a href="https://www.linkedin.com/groups/2211970/"><img src="<?php echo get_template_directory_uri();?>/liaisons/images/logoLinkedin.svg" alt="Logo Linkedin"></a>
                </div>
            </nav>
        <?php }?>
        <div class="copyright">Tous droits réservés © 2022 Techniques d'intégration multimédia - Web et apps, Cégep de Sainte-Foy.</div>
    </footer>
<?php wp_footer();?>
</body>
</html>
<?php

    function tim_responsable_custom_post() {

        //On rentre les différentes dénominations de notre article personnalisé type
        //qui seront affichées dans l'interface administrative...
        $labels = array(
            // Le nom au pluriel
            'name'                => _x( 'Responsables de la TIM', 'Post Type General Name'),
            // Le nom au singulier
            'singular_name'       => _x( 'Responsables', 'Post Type Singular Name'),
            // Le libellé affiché dans le menu
            'menu_name'           => __( 'Responsables 2021'),
            //Les différents libellés de l'interface administrative
            'all_items'           => __( 'Tous nos responsables'),
            'view_item'           => __( 'Voir nos responsables'),
            'add_new_item'        => __( 'Ajouter un nouveau responsable'),
            'add_new'             => __( 'Ajouter'),
            'edit_item'           => __( 'Editer un responsable'),
            'update_item'         => __( 'Modifier un responsable'),
            'search_items'        => __( 'Rechercher un responsable'),
            'not_found'           => __( 'Non trouvé'),
            'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
        );

        //On peut définir ici d'autres options pour notre type d'article personnalisé
        $args = array(
            'label'               => __( 'Nos responsables'),
            'description'         => __( 'Tous sur nos responsables'),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail',
                'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'			  => array( 'slug' => 'responsables'),
        );

        // On enregistre notre type d'article personnalisé qu'on nomme ici "responsables" et ses arguments
        register_post_type( 'responsables', $args );
    }

    function tim_accueil_custom_post() {

        //On rentre les différentes dénominations de notre article personnalisé type
        //qui seront affichées dans l'interface administrative...
        $labels = array(
            // Le nom au pluriel
            'name'                => _x( 'Sections de l\'accueil ', 'Post Type General Name'),
            // Le nom au singulier
            'singular_name'       => _x( 'Accueil - Sections', 'Post Type Singular Name'),
            // Le libellé affiché dans le menu
            'menu_name'           => __( 'Accueil - Sections'),
            //Les différents libellés de l'interface administrative
            'all_items'           => __( 'Sections'),
            'view_item'           => __( 'Voir les sections'),
            'add_new_item'        => __( 'Ajouter une nouvelle section'),
            'add_new'             => __( 'Ajouter'),
            'edit_item'           => __( 'Editer une section'),
            'update_item'         => __( 'Modifier une section'),
            'search_items'        => __( 'Rechercher une section'),
            'not_found'           => __( 'Non trouvé'),
            'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
        );

        //On peut définir ici d'autres options pour notre type d'article personnalisé
        $args = array(
            'label'               => __( 'Sections de l\'accueil'),
            'description'         => __( 'Tous sur les sections de l\'accueil'),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail',
                'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'			  => array( 'slug' => 'section_accueil'),
        );

        register_post_type( 'section_accueil', $args );
    }

    function tim_projets_custom_post() {

        //On rentre les différentes dénominations de notre article personnalisé type
        //qui seront affichées dans l'interface administrative...
        $labels = array(
            // Le nom au pluriel
            'name'                => _x( 'Projets des TIM ', 'Post Type General Name'),
            // Le nom au singulier
            'singular_name'       => _x( 'Projets', 'Post Type Singular Name'),
            // Le libellé affiché dans le menu
            'menu_name'           => __( 'Les Projets'),
            //Les différents libellés de l'interface administrative
            'all_items'           => __( 'Les projets des TIM'),
            'view_item'           => __( 'Voir les projets'),
            'add_new_item'        => __( 'Ajouter un nouveau projet'),
            'add_new'             => __( 'Ajouter'),
            'edit_item'           => __( 'Editer un projet'),
            'update_item'         => __( 'Modifier un projet'),
            'search_items'        => __( 'Rechercher un projet'),
            'not_found'           => __( 'Non trouvé'),
            'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
        );

        //On peut définir ici d'autres options pour notre type d'article personnalisé
        $args = array(
            'label'               => __( 'Projets TIM'),
            'description'         => __( 'Tous les projets des TIM'),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail',
                'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'			  => array( 'slug' => 'projets'),
        );

        register_post_type( 'projets', $args );
    }

    function tim_temoignages_custom_post() {

        //On rentre les différentes dénominations de notre article personnalisé type
        //qui seront affichées dans l'interface administrative...
        $labels = array(
            // Le nom au pluriel
            'name'                => _x( 'Témoignages des TIM ', 'Post Type General Name'),
            // Le nom au singulier
            'singular_name'       => _x( 'Témoignages', 'Post Type Singular Name'),
            // Le libellé affiché dans le menu
            'menu_name'           => __( 'Les Témoignages'),
            //Les différents libellés de l'interface administrative
            'all_items'           => __( 'Les témoignages des TIM'),
            'view_item'           => __( 'Voir les témoignages'),
            'add_new_item'        => __( 'Ajouter un nouveau témoignages'),
            'add_new'             => __( 'Ajouter'),
            'edit_item'           => __( 'Editer un témoignages'),
            'update_item'         => __( 'Modifier un témoignages'),
            'search_items'        => __( 'Rechercher un témoignages'),
            'not_found'           => __( 'Non trouvé'),
            'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
        );

        //On peut définir ici d'autres options pour notre type d'article personnalisé
        $args = array(
            'label'               => __( 'Témoignages TIM'),
            'description'         => __( 'Tous les témoignages des TIM'),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail',
                'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'			  => array( 'slug' => 'temoignages'),
        );

        register_post_type( 'temoignages', $args );
    }

    function tim_formation_custom_post() {

        //On rentre les différentes dénominations de notre article personnalisé type
        //qui seront affichées dans l'interface administrative...
        $labels = array(
            // Le nom au pluriel
            'name'                => _x( 'Section Formation ', 'Post Type General Name'),
            // Le nom au singulier
            'singular_name'       => _x( 'Formations - sections', 'Post Type Singular Name'),
            // Le libellé affiché dans le menu
            'menu_name'           => __( 'Formations - sections'),
            //Les différents libellés de l'interface administrative
            'all_items'           => __( 'Les section de la page formation'),
            'view_item'           => __( 'Voir les sections formation'),
            'add_new_item'        => __( 'Ajouter une nouvelle section'),
            'add_new'             => __( 'Ajouter'),
            'edit_item'           => __( 'Editer une section'),
            'update_item'         => __( 'Modifier une section'),
            'search_items'        => __( 'Rechercher une section'),
            'not_found'           => __( 'Non trouvé'),
            'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
        );

        //On peut définir ici d'autres options pour notre type d'article personnalisé
        $args = array(
            'label'               => __( 'Sections - Formation'),
            'description'         => __( 'Toutes les sections de formation'),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail',
                'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'			  => array( 'slug' => 'formation'),
        );

        register_post_type( 'formation', $args );
    }

    function tim_stages_custom_post() {

        //On rentre les différentes dénominations de notre article personnalisé type
        //qui seront affichées dans l'interface administrative...
        $labels = array(
            // Le nom au pluriel
            'name'                => _x( 'Section Stages ', 'Post Type General Name'),
            // Le nom au singulier
            'singular_name'       => _x( 'Stages - sections', 'Post Type Singular Name'),
            // Le libellé affiché dans le menu
            'menu_name'           => __( 'Stages - sections'),
            //Les différents libellés de l'interface administrative
            'all_items'           => __( 'Les section de la page formation'),
            'view_item'           => __( 'Voir les sections formation'),
            'add_new_item'        => __( 'Ajouter une nouvelle section'),
            'add_new'             => __( 'Ajouter'),
            'edit_item'           => __( 'Editer une section'),
            'update_item'         => __( 'Modifier une section'),
            'search_items'        => __( 'Rechercher une section'),
            'not_found'           => __( 'Non trouvé'),
            'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
        );

        //On peut définir ici d'autres options pour notre type d'article personnalisé
        $args = array(
            'label'               => __( 'Sections - Stages'),
            'description'         => __( 'Toutes les sections de stages'),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail',
                'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'			  => array( 'slug' => 'stages'),
        );

        register_post_type( 'stages', $args );
    }

    function tim_filtres_custom_post() {

        //On rentre les différentes dénominations de notre article personnalisé type
        //qui seront affichées dans l'interface administrative...
        $labels = array(
            // Le nom au pluriel
            'name'                => _x( 'Section Projets Filtres ', 'Post Type General Name'),
            // Le nom au singulier
            'singular_name'       => _x( 'Filtres projets - sections', 'Post Type Singular Name'),
            // Le libellé affiché dans le menu
            'menu_name'           => __( 'Projets filtres - sections'),
            //Les différents libellés de l'interface administrative
            'all_items'           => __( 'Les filtres de la page projets'),
            'view_item'           => __( 'Voir les sections formation'),
            'add_new_item'        => __( 'Ajouter une nouvelle section'),
            'add_new'             => __( 'Ajouter'),
            'edit_item'           => __( 'Editer une section'),
            'update_item'         => __( 'Modifier une section'),
            'search_items'        => __( 'Rechercher une section'),
            'not_found'           => __( 'Non trouvé'),
            'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
        );

        //On peut définir ici d'autres options pour notre type d'article personnalisé
        $args = array(
            'label'               => __( 'Sections - Projets Filtres'),
            'description'         => __( 'Toutes les sections de projets '),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail',
                'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'			  => array( 'slug' => 'filtres'),
        );

        register_post_type( 'filtres', $args );
    }

    function tim_finissants_custom_post() {

        //On rentre les différentes dénominations de notre article personnalisé type
        //qui seront affichées dans l'interface administrative...
        $labels = array(
            // Le nom au pluriel
            'name'                => _x( 'Les Finissants ', 'Post Type General Name'),
            // Le nom au singulier
            'singular_name'       => _x( 'Finissants', 'Post Type Singular Name'),
            // Le libellé affiché dans le menu
            'menu_name'           => __( 'Les Finissants'),
            //Les différents libellés de l'interface administrative
            'all_items'           => __( 'Les finissants des TIM'),
            'view_item'           => __( 'Voir les finissants'),
            'add_new_item'        => __( 'Ajouter un finissant'),
            'add_new'             => __( 'Ajouter'),
            'edit_item'           => __( 'Editer un finissant'),
            'update_item'         => __( 'Modifier un finissant'),
            'search_items'        => __( 'Rechercher un finissant'),
            'not_found'           => __( 'Non trouvé'),
            'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
        );

        //On peut définir ici d'autres options pour notre type d'article personnalisé
        $args = array(
            'label'               => __( 'Les Finissants'),
            'description'         => __( 'Tout les finissants '),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail',
                'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'			  => array( 'slug' => 'finissants'),
        );

        register_post_type( 'finissants', $args );
    }

    function tim_cours_custom_post() {

        //On rentre les différentes dénominations de notre article personnalisé type
        //qui seront affichées dans l'interface administrative...
        $labels = array(
            // Le nom au pluriel
            'name'                => _x( 'Les Cours ', 'Post Type General Name'),
            // Le nom au singulier
            'singular_name'       => _x( 'Cours', 'Post Type Singular Name'),
            // Le libellé affiché dans le menu
            'menu_name'           => __( 'Les Cours'),
            //Les différents libellés de l'interface administrative
            'all_items'           => __( 'Les cours des TIM'),
            'view_item'           => __( 'Voir les cours'),
            'add_new_item'        => __( 'Ajouter un cours'),
            'add_new'             => __( 'Ajouter'),
            'edit_item'           => __( 'Editer un cours'),
            'update_item'         => __( 'Modifier un cours'),
            'search_items'        => __( 'Rechercher un cours'),
            'not_found'           => __( 'Non trouvé'),
            'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
        );

        //On peut définir ici d'autres options pour notre type d'article personnalisé
        $args = array(
            'label'               => __( 'Les Cours'),
            'description'         => __( 'Tout les cours '),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail',
                'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'			  => array( 'slug' => 'cours'),
        );

        register_post_type( 'cours', $args );
    }

    add_action( 'init', 'tim_responsable_custom_post', 0 );
    add_action( 'init', 'tim_accueil_custom_post', 0 );
    add_action( 'init', 'tim_formation_custom_post', 0 );
    add_action( 'init', 'tim_stages_custom_post', 0 );
    add_action( 'init', 'tim_projets_custom_post', 0 );
    add_action( 'init', 'tim_finissants_custom_post', 0 );
    add_action( 'init', 'tim_cours_custom_post', 0 );
    add_action( 'init', 'tim_filtres_custom_post', 0 );
    add_action( 'init', 'tim_temoignages_custom_post', 0 );

    add_theme_support('post-thumbnails');

    if(function_exists('add_image_size()')){
        add_image_size('image-categorie', 400, 250, true);
        add_image_size('image-single', 700, 440, true);
        add_image_size('image-bande', 1000, 320, true);
    }


    if(function_exists('register_sidebar')){
        $args = array(
            'name'=> __('Ma barre latérale', 'theme_text_domain'),
            'id'=>'unique-sidebar-id',
            'description'=>'Barre latérale de navigation',
            'class'=>'',
            'before_widget'=>'<li id="%1$s" class="widget %2$s">',
            'after_widget'=>'</li>',
            'before_title'=>'<h2 class="widgettitle">',
            'after_title'=>'</h2>'
        );
        register_sidebar($args);
    }

    if(function_exists('register_nav_menus')){
        register_nav_menus(
            array(
                'principal'=>'Menu principal',
                'secondaire'=>'Menu secondaire'
            )
        );
    }

    function add_file_types_to_uploads($file_types){
        $new_filetypes = array();
        $new_filetypes['svg'] = 'image/svg+xml';
        $file_types = array_merge($file_types, $new_filetypes );
        return $file_types;
    }
    add_filter('upload_mimes', 'add_file_types_to_uploads');

?>
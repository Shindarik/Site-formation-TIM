<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

define( 'WP_AUTO_UPDATE_CORE', false );
define('FS_METHOD', 'direct');

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'timcsf' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'rpni4_user' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'rpni4_mdp' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L{Eq2UG_`=ZkDE.d73>0D>-^d$Y(foZ(L(W=LEU7nqNrvTBHZSW^ jFL%>~}Y`Wi' );
define( 'SECURE_AUTH_KEY',  'p;i}%>pMNw?G,vl{.]dw$v%T>ddY6fi[I^|Th55O,?F)MxKU{p#n&Q8t6k1/^<_A' );
define( 'LOGGED_IN_KEY',    'cC>ezI;.a(b{9rcDh@{#|y1X$SK?qFoqd*;F:dPNfKF*e*n?t}S{laU}+q%p3f/5' );
define( 'NONCE_KEY',        '$u0zWu2KM{H}3q:QjU~!KTZ@&-4h9)+B7Cb;RZ% u0o_*p78$/)kES9s+vEw%Eu ' );
define( 'AUTH_SALT',        'hRDR <Gpi]l6=BeWo|z40kI/MiK?+I1r2VSOPf&G-CfG*]t!wY34+]KD&~;Sg9P5' );
define( 'SECURE_AUTH_SALT', '7oVf+Ru=asFW/^e:Aq8>,RfxzP?ih3_k4xQ[}#yGJXl:9l_uos5RA[v:OCL^7Oi ' );
define( 'LOGGED_IN_SALT',   'yiE-tr%ws=f.goT9MKHV)OdS39Tk#^>4jEA&^;<GIB>;Wd6++dojVsTd[q>yo0L2' );
define( 'NONCE_SALT',       'dg0H65MZ03P.Wd0{sKEJ3`plNtU+iGSAX@NB55GmIn|;@r`l.@W2@!{Aw:{=OD?C' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'tim_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

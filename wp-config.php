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

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'monsitewordepress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'N rOYkm=Tvto(I,>/U.gB$s/TlEg8Da2u&D_|G)p:kjd#>S#ekGb[-R E.tm5l/x' );
define( 'SECURE_AUTH_KEY',  'zf-Nz}JN#+S.:9s~u<Hm#7-<fC}}no[x] 1VqbVrE6?bm;vF$cBk1u3OTbC__1G!' );
define( 'LOGGED_IN_KEY',    'H@uY)gOIq$]mhaE^`VJDUM^e~TW7gN>^xhf|{mEd_E~}nIY%N{7%oX5E|k=iOOQY' );
define( 'NONCE_KEY',        'zwOD?4M9@s^+;%S#G;wd^j^*fdlq&pK F [Tzd)vrIqIC@RMlu>KqL1 HnP.hd*d' );
define( 'AUTH_SALT',        'c3+M/d5fb^[MtD^yw6)trSRX!e@95xgTdbS{>b;I0m~fQ~%{ d.l,YGKTt(u5zYb' );
define( 'SECURE_AUTH_SALT', 'Hbq/7=oVn@9aHD?db3eJG@e8)gHS`&-Zm?kY*ivg%oBm{.CnI!_{.!06Tb<gtjny' );
define( 'LOGGED_IN_SALT',   '%c8*Y32aq:aFwHtXM%C/b^+/5c52 Z*Qf*6_U8E>q;Iqq#k#2V6mO7cOvM.7Ge 3' );
define( 'NONCE_SALT',       ';]w)RYeIv1LTav;0}2Ru@._CGqVxYifvzU5 y|^gO@xN|xXcpF64CG1C[fV{+j2D' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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

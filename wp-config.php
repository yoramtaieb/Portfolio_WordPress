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
define( 'DB_NAME', 'Portfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'fLX mLR)FWG>Mz>-3[`8v]Y4[A=Uo;vO^ol-dv{?ybJxr:h?Wu{]afl<ti9L3@B8' );
define( 'SECURE_AUTH_KEY',  '{iL{;qS<!dS.Ibvjs8XWe>v8M[ICMC;#kRiu3>]i0Kv2I}5WN651_8IK t:r$rj~' );
define( 'LOGGED_IN_KEY',    ':f4>A7^L0P4Oav,xiA^<NX_T$kiU|Aw#aK<mo>UT)r$94:gc`d$CwNUp=%?IV)QB' );
define( 'NONCE_KEY',        'BTTL^(f-nRnK;Cg)u-w]TS-2LNFsu/}#1R[p6Z`8cO?%|W;jI>I>qC^DpUp2K%Xv' );
define( 'AUTH_SALT',        'oi|2Q emid)3V,FCNCu`sB&zqt=*]fvM`;GV00+**PZ4&St,4JF{vpl%7NR^0)Xt' );
define( 'SECURE_AUTH_SALT', '@[zDFb:,0y?%?;(+PbpUwz_.RdF>T-)x5pTw%x*RD5{JGbv{pcM*maapgJr40-Q;' );
define( 'LOGGED_IN_SALT',   '1#8 E2WO7vP?ROE^F#{C?#]/]U2VQwaq4p#hxOy@df1fN4P{5`9D3u!{R&#eijkm' );
define( 'NONCE_SALT',       '2I~|QF/O(;S!Ui$%:S~J6m<P|7,Gp`Z S?w95dpUP?1&(LTDB7 RLqBOh;:f3k ;' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'yt_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
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

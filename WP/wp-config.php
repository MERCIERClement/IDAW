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
define( 'DB_NAME', 'wordpressbdd' );

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
define( 'AUTH_KEY',         '>a-HKYjC:vo/50CH7AhUHcB+{c[-5`zaD.]87zFEj#O7sIq}TP581<)qyFIepm;+' );
define( 'SECURE_AUTH_KEY',  '|KX$L-Kq.-nny/.P`[]-3J]HMCaODD)^1Ka,!ZCp(d6Y]~XLluRhL+8rmkf|vWN2' );
define( 'LOGGED_IN_KEY',    '3/QFt:p,F:y>B+=ba?.l0(Y]3F-/L3$`r[k]k?1C)e[Aj[5Q$HxcHc5V$[v?oD`t' );
define( 'NONCE_KEY',        '>XZ/aKrWc94Pu~.d%q~.<JL|vxEJ*6A/Ov(+IK4=B8AWxlmQ Tay[{O6QU-QjsX;' );
define( 'AUTH_SALT',        'R@jW6(+UhBiJF[uqKMuBA,1uh =M{CDStlPSdL]lU@< _jm~weEHbZe|E+~W>>K>' );
define( 'SECURE_AUTH_SALT', '<aY2@w{yYUCA<-t9O8r0ny^=r<|pS@M+7tc4%z+|*E[r:N~j2/00WGJMKc;oj,[)' );
define( 'LOGGED_IN_SALT',   'uM},lSCsbbQBU:nqw/|a_Mn}%yaQ[3)oYVx,lk2AtBF}LvVK2AE!R3xdm1i?4L z' );
define( 'NONCE_SALT',       '_#3M;$8mfu]yjsG*mOV*VvP%<<>10`}[!#E73K:OHr0/X!.z#V|sr:cid:!NT;FV' );
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

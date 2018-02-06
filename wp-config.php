<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'db666387651');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo666387651');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Madara1585');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'db666387651.db.1and1.com');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', 'utf8_general_ci');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yM w!Fsk^A&D|8B1Wzkuq1@q=2R* m2e/n6|9YG~f>3U!X=WO62gzBFU#qZJSF%t');
define('SECURE_AUTH_KEY',  '3U3.CBX:skFc^P..:IYVdr JL[Ry_gOyTlo3hB-]BctG,IQet4p@!Wi~bC*#/mB<');
define('LOGGED_IN_KEY',    '7>{*+w1/|vV}vTTr0qY1w$#?IW~s+SUY<#~VKVT$H=6R<iu|&|W_JaQV={x0n^4.');
define('NONCE_KEY',        ' o!6li/&aL]E-@HNtw/1qocVuI^S81}1FBO;v1Y:eI!p+mP!Ibct?n$s<./d$O7j');
define('AUTH_SALT',        'E4mrCO1_y9mi%13?w.v69Nqe3LpqM8VY.6LrHa~n-h6|r{K{:i5S&C|(({arrY]<');
define('SECURE_AUTH_SALT', '*s/!$O@EZf[:B+!38Xe#?Dq]1W~>%X}w?NoUSV-&x^X6Sd&8@rG[TFI;/[Pe$qf`');
define('LOGGED_IN_SALT',   '!7$QKN~+WW,liB|mVm4=5/7:3O`r/A7vAks)fx/ef*^JazzyrgG hKame?symc59');
define('NONCE_SALT',       '%1m`JU&KMZ-YK+JBa&=#U_:]|;*[;;sU+5m:ox5pNJRM`./OEG#V<6u#~sjr i^h');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'jbs_';

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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
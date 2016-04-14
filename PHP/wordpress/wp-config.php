<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7@dC61UR[!*h&@!S3]pL.-rlG@h>#&xD[BMJDKEnF/feoq]U%~0-E=SSV`6e)K)i');
define('SECURE_AUTH_KEY',  '#U@NIVS^2!BP7!$>to<T7]Ds7D,ZyRc&G9YsCp!UaN9KuUT&*JV#>.McK(S%PNb7');
define('LOGGED_IN_KEY',    'nc`ip>N1otGu/#@ >TNs#EEJ=LlW71O!9cKd8z;d#h6q _Ha9tkV]NHwf--U{LoD');
define('NONCE_KEY',        'EM4F=pme19FpKZQU3=`e8^g2]mG#O`[9pTU_G a:q@rUn!~A,Q&bM+`JLZ0pO=4%');
define('AUTH_SALT',        'jMSkkz^bJzm*`g@Ky6%%oA@ip<@*.>+`vJA3C_E?97$^Op9DIJ~lqL;;pB!R&,Hc');
define('SECURE_AUTH_SALT', ' bu>v<365#ZhSB7&=e|,yF0Jkh<XVvIy[Wr/6C|},{j=K{|T1HBRS9|[>=xQaWZN');
define('LOGGED_IN_SALT',   '6SR`h(`$^{9Byj+][b4;e2g_eXTzzxa] HvN-AnRA.PWlq!J|{S[Gjb!<XD7Kc?1');
define('NONCE_SALT',       'l<A[6n&sOH}@f6otK./*Vtokr<l@<:bA/wMbTw;<z}~jQ93l~gFp{zP<59<S=ZQs');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
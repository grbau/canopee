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
define( 'DB_NAME', 'ateliercanopee' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '2W/OZKv.e(M5Tql[=q#7r_=/C]w+vc6;Ocd4F_@yBe[6f@f*Lb^aj6zS#)8N/5e{' );
define( 'SECURE_AUTH_KEY',  '$![pP(f|=]b!H}:,S*^EAwiO(8el>_bSEp_)9w*=Ub;ay{H8+D+3KkCwJ,0bK,L+' );
define( 'LOGGED_IN_KEY',    'd2)yddNFD(iUlMvj F}=Q#4;BM/EtQM-0-p)G54`.Q 9G0<_)]8@1j<l_2MihC`?' );
define( 'NONCE_KEY',        'GEWg&xl)vA9h$|MP5!Tn_h.k+0!!p xi]^3j9:F,x^u@#-683X~/%ZtoIz-EG{u@' );
define( 'AUTH_SALT',        '4FD{!Fj5}1B^(I  q7}X6Yx?Yv#?e$a^%uDfbZ[IX3U@v=Sn9pwgq nz%y8*&U&)' );
define( 'SECURE_AUTH_SALT', 'PCe@48cu@<D&yR>wN>ot^5W2u*v%H$BJa3v|gNEkQoO$1-?-d]PFCGv=(8wc^UQ$' );
define( 'LOGGED_IN_SALT',   'AHq[@CS280wrJ>H+SIn|tqR1{rgP9A&5A(+I6dS=zJc.Z(|~=kN:etWQyu5g!hKY' );
define( 'NONCE_SALT',       'friGuLao3.al:H[7N?cn2*f@: ?p*_yH288u?1g2qd05o[SYDl|0aT !))3{7-%W' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

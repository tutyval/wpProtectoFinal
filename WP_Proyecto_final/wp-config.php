<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wp_proyecto_final');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'aO|6o#eG!$WTZ`Kg4>80bhCH`m LvuAOqg34Nw7^FTlQ0#V)2w+VWhsF;r}lly<_');
define('SECURE_AUTH_KEY', ':`Rx:YX.+GwrNHf5jH7uE|O>pq;`#*aa9>?v<P4c_e=Yvj|u*/hcaUw7f!_OAUsi');
define('LOGGED_IN_KEY', ')C2S8Nb,BV)pB]CL+:vF3J+)Kf#0XWn/V441m3j>_Ow[meM{4Cqjz_h$Y{YIagA(');
define('NONCE_KEY', 'U:RF4MEOT[#^1[E)`Grz1<`tB;EHE0|19ZmCN(0A|VfZ<b&,_y,M9[<QUt<p<3a8');
define('AUTH_SALT', '&p/8~jtj-#-Fp1$vB@T03w]Ji)6go*!SIB=XIkModH~/BZGcs~FW9>334A*3}psJ');
define('SECURE_AUTH_SALT', 'ky/O^f)N#(c6gsdIFv_mtzTK^d}<v5kWU(-~KgA~6jW.b`w2M@+LV[<jvuBZz0yr');
define('LOGGED_IN_SALT', '$#KfG]*e!+|BFmyp5W x q874^yN;ULxMoB2l$J#Q~}6>TM.3KZtpz%+hwp@ac^_');
define('NONCE_SALT', 'y,6<E*2JN2E}@oNHlTxqqWr<b7C+JfHtq<D:.~B]jzr:yOSa5J XSoM1SbFxaJ~(');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'userAvada' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'userAvada' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'userAvada' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'T<<m,Wgz`ma2Rn-m]+Y?xom.Yz^k0}FG91>iN}/b5^ w0}PhC_{j`uV<ch9[So%[' );
define( 'SECURE_AUTH_KEY',  'XA]/yeIb9(yRNHQD+J.&UXa b.y#k78+&KnLrlNh<wY4dXia[cW~Q [0rtq[@]z,' );
define( 'LOGGED_IN_KEY',    '9.IJ@N.ZS<|h%E[ Y1Ybu*s>zB-;y7mHWB*#ucg=`Np2)yTTKH[>s6l}3YXcLNB1' );
define( 'NONCE_KEY',        'dtGM0szxD^S{mtEnjEy247|<sKdf>;^lKxeJBr;`9VzAUtSeBIaNu?V}U.>Ib3o?' );
define( 'AUTH_SALT',        'c{XB!Ge4E~b`2<+u:h_jC($9D-:T!tttE:OC-ZaX^KGd%*81aRms$P^*.r?fLQsA' );
define( 'SECURE_AUTH_SALT', 'ozEt!?=2)I3AJPi8ze:S)Bp(A^>ZjpA7$N?h6Iqy&PUy*<xnbWk&j-:m!RyYC=$e' );
define( 'LOGGED_IN_SALT',   'M^%rv7WVL;R&WOD !CU#%d2!e)qLLM,[w7AoT~h4.ALFv!U:`tvoW/7iL!MQE1?R' );
define( 'NONCE_SALT',       'BH-)%D0sq,D9KxO5#nX[RBx{xZxAH6hx+rO9E=>x&I+w];1l%T.pYfGk}>cgxU$T' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

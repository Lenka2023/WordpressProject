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
define( 'DB_NAME', 'userwordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'userwordpress' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'userwordpress' );

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
define( 'AUTH_KEY',         '!h.5tf:4R;KY3JFe3]N`SX[pi9Z6;F/m=,[8 }&iz>igOKHm^03#fNN_znH$Nwfg' );
define( 'SECURE_AUTH_KEY',  ' ?5SxltO+;@gW,ZgY&$1%ua[&aTe)_2[U<>xNN)A30y{h{s][glt%;(jfw&g<nul' );
define( 'LOGGED_IN_KEY',    '>0?;C,$xiW;m5@Z<d7*ANd4QPJ&ZV}1,UmV.5YGGc90 _VvL!oxIZ!Gh;<$t14Wv' );
define( 'NONCE_KEY',        '&IH0}4D88?v1:u$L4ys]qpzbO;,P6BaIaQKse`nq,kP+ACbKt0/zxTe8f@%%pQU=' );
define( 'AUTH_SALT',        '+|%}XH)oV5XrYX8cstK)3&GG[$Py}q`MNDuP7cN_3*;vju>NuM57>wBJyutyB~/g' );
define( 'SECURE_AUTH_SALT', '!$e f8S3^Pxi$.M9+H~Ep8QKBJY6S:[%}NU^%F$w[mHaaVhc1,4hwI F%$s=YY3C' );
define( 'LOGGED_IN_SALT',   'Uei$5vo}W$CWYO}?t>08svI]XgH]6<6A*=?ONE05tQUYAd$G<&~,aw*8a^O&<|=a' );
define( 'NONCE_SALT',       '@;a{7m:XsngjjKB%;4<khe0zmgw1X|tp:Oqv[byGMskqiyE}74ye$q)3]kj/C[2H' );

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

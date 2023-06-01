<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mysql' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'T68OC7g(yB]x2N/Cz`sFzw$gUeCL|a=>rK^`&%Snb@nPqpq66oqV-T&% Ttj7rRe' );
define( 'SECURE_AUTH_KEY',  'Q2,Xq7H,ZNG7^&`-Vhb8/uu4A1F[Iap;HT/.oEK;VVQZup{)C_3LwlOZ0bQXA&J%' );
define( 'LOGGED_IN_KEY',    'c/j?%yD|t-x?m:f+bj05AD(yz{,OL=uXw,OnZGnty [ys-kOlE~AL.z9BCV?mG:S' );
define( 'NONCE_KEY',        'n jyU8(VuGB52cX:+C+^h$gZQr/xBN37jc>lC8^^ 6f9b{)OVyJH-H#&zIw!Z{:3' );
define( 'AUTH_SALT',        'YK]RVZk?])F?Syw*gu_*/3SKhat1(vI>t8N~vE6W]3wBT;_]1r%OCy,!x1<hEFP.' );
define( 'SECURE_AUTH_SALT', 'PTPl2CKUI#5z9l3B9v~@OF{cmbz,<b}U-+m,S^Adh(K#.8b$E|>CZ-vkyylB-)0)' );
define( 'LOGGED_IN_SALT',   'lBO?i4@=TP-npZ0P^Q6`dPX[{;cowE+B<**us+aojQX@xL@3^vQj(q<W<}kh64oQ' );
define( 'NONCE_SALT',       'auGYA%pWEEm/)O-BwAn.bYd6/jnhs|&tK|5#_T.!29bzB4E;.9T036]MB&_8ImXq' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'F/0<rN$=[&pLz*VL,VYsvKMUK=r2mGgb2N1sd4j/{;}07lm`I9)IVS2rD(cFp2TP');
define('SECURE_AUTH_KEY',  'Ta35H>VS>SYA&E80l}5.`WD`lF{v6RNJ~yycj~[H#Zzd,8It[PI,U)47qXya1SLq');
define('LOGGED_IN_KEY',    'z0(]~X@BO2edtY0[FV+ao^[ch?|]LP[Zd0WQ_-EYK)yF h&Sor>>2bLA$1~sf!*,');
define('NONCE_KEY',        'o9l6doHI^Z*0_9W059YXr1LH5k>]yF{x@X_$-fj@&%#di7-`~>rmf=Jjv00E96V]');
define('AUTH_SALT',        '$&i}?IbG$m@He:gxwsC3gWu{y|gO>O2`2[{PIEDWO+e_i`syf`}g8a;%qpvjx?tC');
define('SECURE_AUTH_SALT', 'b*@88>Mxq`%wK1TJ@8X*I$X6y1K71.DR 5Cq+Ta)gn-.s=yyGs%UP,;_|xw8Z0cU');
define('LOGGED_IN_SALT',   '!n?~2A0U32,s6IJ!F.GL?(<x/m]woD$beEswa@3D^2[s%OVvrY>MYaYLhE52ctue');
define('NONCE_SALT',       '7|r^%>AmX]+h-yzdTCcOTC:kKo}_uyeaGpPVK^^_m5ta2!kC:FPcsy^dIv!)U^=@');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

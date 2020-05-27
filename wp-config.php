<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'frupek_base');

/** Имя пользователя MySQL */
define('DB_USER', 'frupek_user');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'H&-fSb._yvcC');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'tweOnpputQ)H>d[f+-)++9+NRN-jCOEwO?k,]MC<~JM-||qgV{t>P2%Z2:f7RE8M');
define('SECURE_AUTH_KEY',  '_xNAGzjF(}8#RO]+z~SyO`f }OZ7zM/+%{!ad_M;q|L0(F3#f%~scQ<#i+SHtIdH');
define('LOGGED_IN_KEY',    'bF1]t8+k1Deg8M%&o 9CTgW# ?{~{.:+C<|9s-t^|MDy*Vh0OeN[TV|BWT<c?FFD');
define('NONCE_KEY',        'v/s.IjD6FO!PCDb7/pZb3_8t~@$5+^PJuy%7N[~FWYU.+kM;3*)97>T8PL)d~r.M');
define('AUTH_SALT',        '+po>sU{]DstXPh<j3}}GWU)~A3vb$xF?O!7}FE(KFZKf(nC+rka~zhg5%t2$9%@Q');
define('SECURE_AUTH_SALT', '|u)|4jnr-#pieKXG_=e];DwS*rjVk}5D+*Pp=q_{6V-c@EB%9ZQO{B[]/gKR4<tN');
define('LOGGED_IN_SALT',   ')&:sD7GJHk.vC-o=%Kzx,GZuPaz`N2m-x7xm;1^jq`2l~L#:+3Gn._y9+Wng$LA,');
define('NONCE_SALT',       'Jnc2GpevrW4g[a/.vm9=i<t}hEd WiG3,qQ|jGcJ2`o0JlqTgBVI(z![s|KP}+e5');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

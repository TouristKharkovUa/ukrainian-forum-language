<?php
/**
*
* profile_guestbook [English]
*
* @package profile guestbook
* @version 1.0.0
* @copyright (c) 2010 Paul Sohier
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

/**
 * UMIL lang vars.
 **/
$lang = array_merge($lang, array(
	'PROFILE_GUESTBOOK'			=> 'Гостевая книга',
	'INSTALL_PROFILE_GUESTBOOK'		=> 'Установка Гостевой кинги',
	'INSTALL_PROFILE_GUESTBOOK_CONFIRM'	=> 'Вы действительно хотите установить Гостевую книгу?',
	'UPDATE_PROFILE_GUESTBOOK'		=> 'Обновить Гостевую книгу',
	'UPDATE_PROFILE_GUESTBOOK_CONFIRM'	=> 'Вы действительно хотите обновить Гостевую книгу?',
	'UNINSTALL_PROFILE_GUESTBOOK'		=> 'Удалить Гостевую книгу',
	'UNINSTALL_PROFILE_GUESTBOOK_CONFIRM'	=> 'Вы действительно хотите удалить Гостевую книгу?',
));


$lang = array_merge($lang, array(
	'NO_POSTS_GUESTBOOK'	=> 'В этой гостевой книге нет сообщений',
	'GUESTBOOK'		=> 'Гостевая книга',
	'ABOUT_GUESTBOOK'	=> 'Добро пожаловать в гостевую книгу. Вы можете написать здесь свои личные мысли.',
	
	'NO_TOPIC_ICON'		=> 'Нет иконки',
	'RETURN_PROFILE'	=> '%sВернуться назад в Профиль',
	
	'GUESTBOOK_REPLY'	=> 'Комментировать',
	'POST_GUESTBOOK'	=> 'Написать сообщение в книге',
	'NAMEINPOST'		=> 'Вставить ссылку автора сообщения',
	'NEW_GUESTBOOK_POST'	=> 'Новое сообщение',
	'NEW_GUESTBOOK_POST_TXT'=> 'Привет,

В Вашей гостевой книге размещено новое сообщение:

%s

Если Вы не хотите получать уведомление через личное сообщение, изменить настройки в профиле.',
));


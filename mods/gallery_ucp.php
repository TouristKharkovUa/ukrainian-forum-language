<?php
/**
*
* gallery_ucp [Russian] (Pthelovod v1.1.4)
*
* @package phpBB Gallery 
* @version $Id: gallery_ucp.php 1355 2010-01-20 23:29:09Z nickvergessen $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/

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

$lang = array_merge($lang, array(
	'ACCESS_CONTROL_ALL'			=> 'Любой',
	'ACCESS_CONTROL_REGISTERED'		=> 'Зарегистрированные пользователи',
	'ACCESS_CONTROL_NOT_FOES'		=> 'Зарегистрированные пользователи, кроме ваших недругов',
	'ACCESS_CONTROL_FRIENDS'		=> 'Только ваши друзья',
	'ALBUMS'						=> 'Альбомы',
	'ALBUM_ACCESS'					=> 'Разрешить допуск для',
	'ALBUM_ACCESS_EXPLAIN'			=> 'Вы можете использовать %1$sсписки недругов и друзей%2$s при определении допусков к вашему альбому. Однако <strong>модераторы</strong> могут <strong>всегда</strong> иметь допуск к вашему альбому.',
	'ALBUM_DESC'					=> 'Описание альбома',
	'ALBUM_NAME'					=> 'Имя альбома',
	'ALBUM_PARENT'					=> 'Родительский альбом',
	'ATTACHED_SUBALBUMS'			=> 'Вложенные под-альбомы',

	'CREATE_PERSONAL_ALBUM'			=> 'Создать персональный альбом',
	'CREATE_SUBALBUM'				=> 'Создать вложенный под-альбом',
	'CREATE_SUBALBUM_EXP'			=> 'Вы можете прикрепить новые вложенные под-альбомы к Вашей персональной галереи.',
	'CREATED_SUBALBUM'				=> 'Вложенный под-альбом успешно создан',

	'DELETE_ALBUM'					=> 'Удалить альбом',
	'DELETE_ALBUM_CONFIRM'			=> 'Удалить альбом, все вложенный под-альбомы и изображения?',
	'DELETED_ALBUMS'				=> 'Альбом успешно удален',

	'EDIT'							=> 'Редактировать',
	'EDIT_ALBUM'					=> 'Редактировать альбом',
	'EDIT_SUBALBUM'					=> 'Редактировать вложенный под-альбом',
	'EDIT_SUBALBUM_EXP'				=> 'Здесь Вы можете редактировать альбомы.',
	'EDITED_SUBALBUM'				=> 'Альбом успешно отредактирован',

	'GOTO'							=> 'Перейти к',

	'MANAGE_SUBALBUMS'				=> 'Управление вложенными альбомами',
	'MISSING_ALBUM_NAME'			=> 'Введите название альбома',

	'NEED_INITIALISE'				=> 'Вы пока не имеете персонального альбома.',
	'NO_ALBUM_STEALING'				=> 'Вы не можете управлять альбомами других пользователей.',
	'NO_FAVORITES'					=> 'У Вас нет избранного.',
	'NO_MORE_SUBALBUMS_ALLOWED'		=> 'Вы достигли максимального количества вложенных под-альбомов для Вашего персонального альбома.',
	'NO_PARENT_ALBUM'				=> '&laquo;-- нет родителя',
	'NO_PERSALBUM_ALLOWED'			=> 'У Вас нет прав на создание персонального альбома',
	'NO_PERSONAL_ALBUM'				=> 'Вы пока не имеете персонального альбома. Здесь Вы можете создать себе персональный альбом с некотрым количеством вложенных под-альбомов.<br /> Только владелец может загружать изображения в персональные альбомы.',
	'NO_SUBALBUMS'					=> 'Нет вложенных под-альбомов',
	'NO_SUBSCRIPTIONS'				=> 'Вы не подписаны ни на одно изображение.',

	'PARSE_BBCODE'					=> 'Разрешить BBCode',
	'PARSE_SMILIES'					=> 'Разрешить смайлы',
	'PARSE_URLS'					=> 'Разрешить ссылки',
	'PERSONAL_ALBUM'				=> 'Персональный альбом',

	'REMOVE_FROM_FAVORITES'			=> 'Удалить из избранных',

	'UNSUBSCRIBE'					=> 'Отписаться',
	'USER_ALLOW_COMMENTS'			=> 'Разрешить пользователям комментировать в вашем альбоме',

	'YOUR_FAVORITE_IMAGES'			=> 'Здесь Вы можете видеть изображения, добавленные в избранные. Вы можете удалить их из избранного, если больше не нуждаетесь в этом.',
	'YOUR_SUBSCRIPTIONS'			=> 'Здесь Вы можете видеть альбомы и изображения, на которые подписаны.',

	'VIEWEXIFS_DEFAULT'				=> 'Вид Exif-данных по умолчанию',

	'WATCH_CHANGED'					=> 'Настройки сохранены',
	'WATCH_COM'						=> 'Подписка на комментируемые изображения по умолчанию',
	'WATCH_FAVO'					=> 'Подписка на избранные изображения по умолчанию',
	'WATCH_NOTE'					=> 'Это настройка действует только на новые изображения.',
	'WATCH_OWN'						=> 'Подписка на свои сообщения по умолчанию',
));

?>
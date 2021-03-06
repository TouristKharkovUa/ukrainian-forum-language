<?php
/**
*
* 
* @package language
* @version $Id: acp_profile_control.php,v1.0.0 2009/11/21 12:53:34  Exp $
* @copyright (c) mtrs
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
// All language files should use UTF-8 as their encoding and the files must not contain a BOM
//

$lang = array_merge($lang, array(
		'ACP_PROFILE_CONTROL'					=> 'Поля профиля',
		'ACP_PROFILE_CONTROL_EXPLAIN'			=> 'Вы можете включать и отключать стандартные поля профиля в этой панели. Вы также можете показывать поля профиля при регистрации, и устанавливать обязательность при регистрации и в личном разделе. Если поле профиля обязательное, то это отображается и на странице регистрации.',
		'ACP_PROFILE_FIELDS'					=> 'Управление полями профиля',
		'PFCM_ENABLE'							=> 'Включить МОД Управления полями профиля',
		'PFCM_ENABLE_EXPLAIN'					=> 'При отключенном мода используются стандартные дополнительные поля.',
		'REQUIRED'								=> 'Обязательное',
		'PROFILE_UCP_REGS'						=> 'Показывать при регистрации',		
		'ACTIVATE_FIRST'						=> 'Сначала активируйте поле профиля',
		
		'PROFILE_FIELD_NAME'					=> 'Название поля профиля',
		'PROFILE_FIELD_NAME_EXPLAIN'			=> 'В этом окне Вы устанавливаете стандартные поля профиля, показываемые при регистрации, и обязательные при регистрации и в личном разделе. Помните что, если Вы установили обязательность поля профиля, то это также будет отображаться и при регистрации. Однако, Вы можете скрыть поля профиля в личном разделе изменяя их права доступа.',
		'DISPLAY_ON_PROFILE'					=> 'Показывать в профиле',
		'DISPLAY_ON_PROFILE_EXPLAIN'			=> 'Это настройка по-умолчанию, пользователя может видеть это поле профиля только в личном разделе.',
		'DISPLAY_ON_REGISTRATION'				=> 'Показывать в окне регистрации',
		'DISPLAY_ON_REGISTRATION_EXPLAIN'		=> 'Если включено, поле будет показываться при регистрации.',
		'REQUIRED_PROFILE_FIELD'				=> 'Обязательное поле и будет показываться при регистрации',
		'REQUIRED_PROFILE_FIELD_EXPLAIN'		=> 'Принуждение заполнить поле профиля пользователем или администратором. Если профиль поле является обязательным, оно будет также отображаться на экране регистрации.',

		'PROFILE_UPDATE_ENABLE'					=> 'Напоминание заполнить обязательные поля профиля',
		'PROFILE_UPDATE_ENABLE_EXPLAIN'			=> 'Когда включено, перенаправление пользователей для заполнения обязательных и не заполненных полей профиля.',
		'PROFILE_UPDATE_REMINDER'				=> 'Принудительно напоминить о необходимости заполнить поля профиля',
		'PROFILE_UPDATE_REMINDER_EXPLAIN'		=> 'Принудительно у юзеров включается проверка заполненности обязательных полей профиля.',
		'RESET_PROFILE_REMINDER'				=> 'Принудительная проверка обязательных полей',
		'UCP_PROFILE_UPDATE'					=> 'Пожалуйста заполните поля профиля.',
		'RETURN_UCP'							=> '<br />%sНажмите для перехода в Личный раздел%s',
));

?>
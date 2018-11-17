<?php
/**
*
* @package JV Footer Chat
* @version $Id: jv_chat.php 397 2018-05-22 10:18:58Z killbill $
* @author 2011-2018 KillBill - killbill@jatek-vilag.com
* @copyright (c) 2014-2018 https://jv-arcade.com/ - support@jv-arcade.com
* @license https://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, array(
	'JV_CHAT'						=> 'Chat',
	'JV_CHAT_TITLE'					=> '%sJV Footer Chat%s',
	'JV_CHAT_SOUND_OFF'				=> 'Chat geluid uit',
	'JV_CHAT_SOUND_ON'				=> 'Chat geluid aan',
	'JV_CHAT_ONLINE'				=> 'Chat aan',
	'JV_CHAT_OFFLINE'				=> 'Chat uit',
	'JV_CHAT_NO_ONLINE_USERS'		=> 'Geen gebruikers beschikbaar.',
	'JV_CHAT_USER_LOGIN'			=> 'Je bent niet aangemeld. Gelieve opnieuw aan te melden.',
	'JV_CHAT_NEW_MSG'				=> '%s nieuwe berichten',
	'JV_CHAT_DELETE_MSGS'			=> 'Verwijder berichten',
	'JV_CHAT_DELETE_MSGS_CONFIRM'	=> 'Weet je zeker dat je de berichten wilt verwijderen??',
));

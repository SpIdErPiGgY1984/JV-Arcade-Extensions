<?php
/**
*
* @package phpBB Arcade - Random games on forum index page
* @version $Id: acp_settings.php 2066 2018-11-07 23:09:21Z KillBill $
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
	'ARCADE_EXT_ARCADE_RANDOM_GAMES_FORUM_INDEX'			=> 'Willekeurige spellen op de forumindexpagina',
	'ARCADE_EXT_ARCADE_RANDOM_GAMES_FORUM_INDEX_EXPLAIN'	=> 'Met deze extensie kunnen de arcade willekeurige spellen worden weergegeven op de forumindexpagina.',
));

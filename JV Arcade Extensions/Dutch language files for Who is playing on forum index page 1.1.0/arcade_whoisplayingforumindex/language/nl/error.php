<?php
/**
*
* @package phpBB Arcade - Who is playing on forum index page
* @version $Id: error.php 2069 2018-11-07 23:22:14Z KillBill $
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

//These are used through out the arcade
$lang = array_merge($lang, array(
	'ARCADE_EXT_WIP_ERROR_ENABLE1' => 'De extensie kan niet worden geactiveerd omdat <strong>“phpBB Arcade”</strong> niet actief is!',
	'ARCADE_EXT_WIP_ERROR_ENABLE2' => 'De extensie kan niet worden geactiveerd omdat de versie van <strong>“phpBB Arcade”</strong> lager is dan de versie <strong>“%s”</strong>!',
));
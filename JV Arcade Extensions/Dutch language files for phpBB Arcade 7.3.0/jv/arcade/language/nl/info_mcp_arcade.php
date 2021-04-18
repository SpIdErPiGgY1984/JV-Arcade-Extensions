<?php
/**
*
* @package phpBB Arcade
* @version $Id: info_mcp_arcade.php 2332 2020-10-13 18:51:38Z KillBill $
* @author 2011-2021 KillBill
* @copyright (c) 2014-2021 https://jv-arcade.com/ - https://jv-arcade.com/contact
* @license https://jv-arcade.com/License.html JVA License v1
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

//Arcade
$lang = array_merge($lang, array(
	'ARCADE_LOGVIEW_EDITGAME'			=> 'Bewerk spel',
	'ARCADE_LOGVIEW_LOGS'				=> 'Bekijk spel log',
	'ARCADE_LOGVIEW_VIEWCAT'			=> 'Bekijk categorie',
	'ARCADE_LOGVIEW_VIEWGAME'			=> 'Bekijk spel',

	'MCP_ARCADE'						=> 'phpBB Arcade',
	'MCP_ARCADE_MANAGE_GAMES'			=> 'Beheer spellen',
	'MCP_ARCADE_MANAGE_GAMES_EXPLAIN'	=> 'Hier heb je de optie om spellen te wijzigen, te verplaatsen, en indien je de benodigde permissies hebt, spellen te resetten.',
	'MCP_ARCADE_MANAGE_TOUR'			=> 'Beheer toernooien',
	'MCP_ARCADE_MANAGE_TOUR_EXPLAIN'	=> 'Hier heb je de opties om toernooien aan te maken en te bewerken.',
	'MCP_CAT_ARCADE'					=> 'Arcade',
));

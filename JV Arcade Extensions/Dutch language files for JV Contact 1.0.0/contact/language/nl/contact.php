<?php
/**
*
* @package JV Contact
* @version $Id: contact.php 483 2019-02-06 14:05:45Z KillBill $
* @author 2011-2019 KillBill - killbill@jatek-vilag.com
* @copyright (c) 2014-2019 https://jv-arcade.com/ - support@jv-arcade.com
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
	'JV_CONTACT_TOO_MANY_TRIES'			=> 'U hebt het maximale aantal pogingen voor deze sessie overschreden. Probeer het later opnieuw.',
	'JV_CONTACT_PRIVACYPOLICY_EXPLAIN'	=> 'Ik aanvaard dat mijn naam, e-mailadres, IP-adres, berichtonderwerp en tekst worden verwerkt en opgeslagen door de controller van deze site zoals gespecificeerd in het %sPrivacybeleid%s.',
	'JV_CONTACT_PRIVACYPOLICY_CONFIRM'	=> 'Het privacybeleid is niet bevestigd.',
));

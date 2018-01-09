<?php
/**
 *
 * Hide 24 hour Activity Stats. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.0.0] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2017, 3Di, https://github.com/3D-I/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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
	'ACL_U_ALLOW_HA24HRS_VIEW'	=> 'Permitir visualizar a extensão “24 hour activity stats”',
));

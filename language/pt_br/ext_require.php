<?php
/**
 *
 * Hide 24 hour Activity Stats. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.0] (https://github.com/phpBBTraducoes)
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
	'ERROR_MSG_3110_321_MISTMATCH'	=>	'Mínimo 3.1.10 mas inferior a 3.2.0@dev OU superior a 3.2.1 mas inferior a 3.3.0@dev',
	'ERROR_A24H_NOT_INSTALLED'		=>	'Este ADD-ON requer a extensão “24 hour activity stats” instalada primeiro.',
	'ERROR_A24H_WRONG_VERSION'		=>	'A Versão instalada da extensão “24 hour activity stats” está incorreta. Necessária >= 1.0.6',
));

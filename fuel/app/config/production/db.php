<?php
/**
 * The production database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'type' => 'mysqli',
		'connection'  => array(
			'hostname'   => 'mysql1.webcrow-php.netowl.jp',
			'database'   => 'niino_bbs',
			'username'   => 'niino_bbs',
			'password'   => 'niinoeiichi',
		),
	),
);

<?php
/**
 * The staging database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'type' => 'mysqli',
		'connection'  => array(
			'hostname'   => 'localhost',
			'database'   => 'niino_bbs',
			'username'   => 'root',
			'password'   => 'niinoeiichi',
		),
	),
);

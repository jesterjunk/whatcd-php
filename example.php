<?php
require_once('whatcd.class.php');

$WhatCD = new WhatCD('USERNAME_HERE', 'PASSWORD_HERE');

$response = $WhatCD->request(
	'artist', array(
		'artistname' => 'The XX'
	)
);

print_r($response);
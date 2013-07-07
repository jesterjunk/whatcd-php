whatcd-php
==========

PHP class used to access the What.CD API

A list of all currently available methods is available at What.CD: wiki.php?action=article&id=998

Requirements
=============
libcurl

Example usage
=============

	require_once('whatcd.class.php');

	$WhatCD = new WhatCD('USERNAME_HERE', 'PASSWORD_HERE');

	$response = $WhatCD->request(
		'artist', array(
			'artistname' => 'The XX'
		)
	);

	print_r($response);
	
	

License
==========
This software is distributed under the BSD 2-clause license, more information can be found at http://opensource.org/licenses/bsd-license.php


Notes
=========

There is no reason why this class won't support other Gazelle websites, however they are not officially supported by this code, and adjustments will be required.

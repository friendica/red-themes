<?php
	if($_REQUEST['schema'])
	$schema = $_REQUEST['schema'];

	if (($schema) && ($schema != '---')) {
		$schemefile = 'view/theme/apw/schema/' . $schema . '.php';
		if(file_exists($schemefile)) {
		require_once ($schemefile);
		}
	}

	if (! $schema || ($schema == '---')) {
		if(file_exists('view/theme/apw/schema/default.php')) {
			$schemefile = 'view/theme/apw/schema/' . 'default.php';
			require_once ($schemefile);
		}
	}


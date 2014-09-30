<?php
	require_once('view/theme/apw/php/functions.php');

// Load user config
	$uid = get_theme_uid();
	if($uid) {
		load_pconfig($uid,'apw');
		require_once('view/theme/apw/php/userconfig.php');
	}
// Load a schema
	require_once('view/theme/apw/php/loadschema.php');

// Now load some fonts
require_once('view/theme/apw/php/font_manager.php');

// Load some defaults
require_once('view/theme/apw/php/set_defaults.php');

// Do something useful with it all
require_once('view/theme/apw/php/process_options.php');


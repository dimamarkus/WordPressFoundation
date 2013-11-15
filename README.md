## Dubspot 3.0 Test Theme


This theme is designed to work with the 'Ready! Ecommerce Shopping Cart' plugin.

Upon installation of the plugin, go into it's root directory and change these two lines in the config.php file
to point to the ecommerce_modules folder inside the theme directory.

	// Original Directory
	// define('S_MODULES_DIR', S_DIR. 'modules'. DS);

	// Custom Dubspot Directory
	define('S_MODULES_DIR', get_stylesheet_directory('wurl') . DS . 'ecommerce_modules' . DS);

	// Original Path
	// define('S_MODULES_PATH', WP_PLUGIN_URL.'/'.basename(dirname(__FILE__)).'/modules/');

	// Dubspot Path
	define('S_MODULES_PATH', get_theme_root_uri('wpurl') . DS . get_stylesheet('wpurl') . '/ecommerce_modules');

<?php
/*
 * @author Karthikeyan s
 * @website https://www.kamarajcollege.ac.in/
 * @facebook https://www.facebook.com/people/Karthik/100008949167493
 * @twitter https://twitter.com/Karthik74957770
  */

// dont add a trailing / at the end
define('HTTP_SERVER', 'http://localhost');
// add slash / at the end
define('SITE_DIR', '/simple-website/');

// database prefix if you use
define('DB_PREFIX', 'mp_');

define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_HOST_USERNAME', 'root');
define('DB_HOST_PASSWORD', '');
define('DB_DATABASE', 'simple-website');

define('SITE_NAME', 'Kamaraj College');

// define database tables
define('TABLE_PAGES', DB_PREFIX.'pages');
define('TABLE_TAGLINE', DB_PREFIX.'tagline');
?>
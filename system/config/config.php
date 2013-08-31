<?php

/*
Constant.php
All constact define here
All right reserved. Copyright Abdullah Al Jahid
*/

// Database Table definition
define ( 'DB_HOST', 'localhost' );
define ( 'DB_USER', 'root' );
define ( 'DB_PASSWORD', '' );
define ( 'DB_NAME', 'foodlve_crawler' );

define ( 'TBL_DIETITIAN', 'dietitian' );
define ( 'TBL_SETTINGS', 'settings' );


// Website URL
define ( 'WEBSITE_URL', 'http://localhost/foodlve/crawler/' );

define ( 'UPLOAD_URL', WEBSITE_URL . 'uploads/' );

define ( 'PICTURE_UPLOAD_URL', UPLOAD_URL . 'pictures/' );

define ( 'ADMIN_URL', WEBSITE_URL );


// Directory Constant
define ( 'UPLOAD_DIR', ROOT_DIR . 'uploads/' );

define ( 'PICTURE_UPLOAD_DIR', UPLOAD_DIR . 'pictures/' );



?>

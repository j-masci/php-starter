<?php
/**
 * bootstrap dependencies
 */

// defn base url etc.
include '_env.php';

//if ( ! session_id() ) {
//    session_start();
//}

define( 'BASE_DIR', dirname(__FILE__ ) );
define( 'CORE_DIR', BASE_DIR . '/core' );

include CORE_DIR . '/config.php';
include CORE_DIR . '/includes.php';
<?php


error_reporting( E_ALL );
ini_set( "display_errors", 1 );


// set a custom field prefix
define( "CMB_PREFIX", "_p_" );


// include the faculty content type
include( "library/post-type/area.php" );
include( "library/post-type/faculty.php" );


// include some theme-related things
include( "library/menus.php" );
include( "library/widgets.php" );
include( "library/scripts.php" );


// an extra image manipulation function
include( "library/images.php" );


// include our metaboxes library
include( "library/metabox.php" );


// include quote metaboxes/functions
include( "library/showcase.php" );
include( "library/infographic.php" );
include( "library/content.php" );
include( "library/social.php" );
include( "library/photo-grid.php" );
include( "library/emergency.php" );
include( "library/tabs.php" );


// make excerpts shorter
function ripon_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'ripon_excerpt_length', 999 );


?>

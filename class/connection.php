
<?php

class connection{

 public function form_connection(){

$connection ="./wp-content/themes/village_furry/formconnection.php";
global $current_user;
   if(!isset($current_user->user_login)){

   include($connection);

   }


 }

}

?>

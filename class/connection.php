
<?php

class connection{

function __construct(){

$page = htmlspecialchars($_GET['page']);

if($page == "deconnection"){

wp_logout();

}

}

 public function form_connection(){

$connection ="./wp-content/themes/village_furry/formconnection.php";
global $current_user;
   if(!isset($current_user->user_login)){

   include($connection);

   }


 }

 public function link_logout(){

   global $current_user;
      if(isset($current_user->user_login)){
echo "<div> <a href ='?page=deconnection'>
deconnection
</a> </div>

";

      }

    }

public  function link_inscription(){

  global $current_user;
     if(!isset($current_user->user_login)){
       echo "<div> <a href ='?page=inscription'>
       inscription
       </a> </div>";

     }


}


}

?>

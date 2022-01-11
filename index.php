
<?php

get_header();




?>






<div id="my-app">
  <my-component></my-component>
</div>

<?php





if(isset($_POST['pseudo']) &&  !empty($_POST['pseudo']) ){

if(isset($_POST['pass']) &&  !empty($_POST['pass']) ){

if(isset($_POST['email']) &&  !empty($_POST['email']) ){







  $pseudo = $_POST['pseudo'];

   $pass = $_POST['pass'];

   $email = $_POST['email'];

  $verif_email = null;

  $verif_pseudo = null;

   $url ="http://village-furry.localhost/?page=inscription";

  
   if(email_exists($email)){

   echo "email exist";

   $verif_email = "&email=false";

 }else{

  $verif_email = "&email=true";

 }

  $url = $url.$verif_email;

  if(username_exists($pseudo)){

   $verif_pseudo = "&pseudo=fasle";

 }else{

  $verif_pseudo = "&pseudo=true";

 }

 $url = $url.$verif_pseudo;

  echo '<meta http-equiv="refresh" content="durée;URL='.$url.'">';




   wp_create_user($pseudo, $pass, $email);


}
}
}


get_footer();

?>


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


  echo "POST";

  $pseudo = $_POST['pseudo'];

   $pass = $_POST['pass'];

   $email = $_POST['email'];


   wp_create_user($pseudo, $pass, $email);


}
}
}

get_footer();

?>

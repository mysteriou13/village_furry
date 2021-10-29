<!doctype html>

<html lang = "fr">

<head>


    <meta charset = "UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <script type="text/javascript" src = "./wp-content/themes/village_furry/node_modules/vue/dist/vue.js">  </script>

      <script type = "text/javascript" src = "./wp-content/themes/village_furry/node_modules/vue-router/dist/vue-router.js" ></script>

      <script type = "text/javascript" src = "./wp-content/themes/village_furry/node_modules/http-vue-loader/src/httpVueLoader.js" ></script>


      <?php wp_head();

    $login ="./wp-content/themes/village_furry/class/connection.php";



      include($login);

       $login =  new connection();



      ?>
</head>

<body >
<div id = "app" >
  <nav>

    <div class ="divlink">

<div>
<a href = "?page=acceuil"> acceuil </a>

</div>

<div>
<a href = "?page=artiste"> artiste </a>
</div>

<div>
  <a href = "?page=contact"> contact </a>
</div>

<?php
$login->link_logout();
$login->link_inscription();
?>

<div>
</div>

</div>

<div>
<?php

$login->form_connection();

?>


</div>




<div>


</div>

  </nav>

<div class = "container ">

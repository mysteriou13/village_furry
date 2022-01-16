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

    $inscription ="./wp-content/themes/village_furry/class/inscription.php";

    include($inscription);

    $inscription =  new inscription();

      

      include($login);


    if(isset($_POST) && isset($_GET['page']) && !empty($_GET['page']) && $_GET['page'] == 'inscription'){

        $inscription->insert_user($_POST['pseudo'], $_POST['pass'],$_POST['email'] );


      }

       $login =  new connection();



      ?>
</head>

<body >
<div id = "app" >
  <nav>

    <div class ="divlink">
      
      <a href = "./?page=acceuil"> acceuil </a> <a href = "./?page=inscription"> inscription</a>


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

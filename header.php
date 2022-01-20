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

      <div id = "input_pseudo" class = "d-none" >
        
   <?php 
    if(isset($_POST['pseudo'])){

      echo $_POST['pseudo'];

    }
   ?>

      </div>



      <div id = "input_email" class = "d-none" >
        
        <?php 
         if(isset($_POST['email'])){
     
           echo $_POST['email'];
     
         }
        ?>
     
           </div>

</head>

<body >
<div id = "app" >
  <nav>

    <div class ="divlink">
      
      <a href = "./?page=acceuil"> acceuil </a> <?php echo $login->link_inscription(); $login->link_logout();

 ?>


<div>

<div>
  
  

    </div>

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

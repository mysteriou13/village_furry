<!doctype html>

<html lang = "fr">

<head>


    <meta charset = "UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <?php wp_head();

    $login ="./wp-content/themes/village_furry/class/connection.php";



      include($login);

       $login =  new connection();



      ?>
</head>

<body>

  <nav>

    <div class ="d-flex justify-content-between">

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


    </div>

<div>


</div>

  </nav>

<div class = "container ">

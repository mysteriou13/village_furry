<!doctype html>

<html lang = "fr">

<head>


    <meta charset = "UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <?php wp_head()?>
</head>

<body>

  <nav>
    <?php


    $query = "SELECT * FROM wp_terms ";

    $allcustomers = $wpdb->get_results($query);

    foreach ($allcustomers as $singlecustomer ) {

    $mycustomer = $wpdb->get_row($query);

     $article = "SELECT * FROM wp_posts ";

      $all = $wpdb->get_results($article);


    echo '<div class = "catergorie">'.$singlecustomer->name."<div>";


     $quer = "SELECT * FROM  wp_term_relationships  ";
    $mycustomer = $wpdb->get_results($quer);

    foreach ($mycustomer as $single ) {

    $post = "SELECT * FROM wp_posts ";

    $all = $wpdb->get_results($post);

    foreach ($all as $sin) {

    if($sin->ID == $single->object_id && $single->term_taxonomy_id  == $singlecustomer->term_id && $sin->post_status == "publish"){


    echo "<div class ='article'>"."<a href = $sin->guid >".$sin->post_title."</a>"."</div>";

    }

    }

    }

     echo "</div>". '</div>';


    }
    ?>


  </nav>

<div class = "container ">

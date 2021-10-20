
<?php

get_header();


if(isset($_GET['page']) && !empty($_GET['page'])){

$link  = htmlspecialchars($_GET['page']);

 $page = $link.".php";

include($page);

}

get_footer();

?>

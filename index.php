
<?php

get_header();


if(isset($_GET['page']) && !empty($_GET['page'])){

$link  = htmlspecialchars($_GET['page']);

 $page = $link.".php";

include($page);

}

?>


<div>


  {{ message }}

</div>


<?php
get_footer();

?>

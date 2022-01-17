
<template>

<div>

<div>

<div>


</div>

<div>


  <form action="http://village-furry.localhost/?page=inscription&type=true"  method = "POST" onmouseover = "validate()" >

<div> <center> inscription </center> <div>

<div class = "flex_item_center">



<div class = "div_text_inscription">
  <div>
  <div> pseudo(8 caractère)</div>
  </div>

  <div class = "card-text-inscription">
  <div>
    mot de pass (8 caractère)
  </div>

</div>

<div class = "card-text-inscription">
<div>
  repeter mot de pass
</div>

</div>



<div class ="card-text-inscription">
<div>
 email
</div>

</div>

</div>



<div>
  <div  class = "card-input-inscription">
  <div> <input type = "text" id = "pseudo"  name = "pseudo" onkeyup="length_string(8,'pseudo','pseudo ','taille_pseudo','result_pseudo')" >


  </div>


   <div id = "name_exists">  </div>

   <input type = "hidden" id = "result_pseudo">
<div id = "taille_pseudo">   </div>


  </div>






  <div>

  <div class = "card-input-inscription">

<div>
     <!-- <input  id = "pass" type = "password"  v-on:keyup="pass">-->

 <input type="password" id ="pass" name = "pass"  onkeyup="length_string(8,'pass','mot de pass ','taille_pass','result_pass')">

 <input type = "hidden" id = "result_pass">
</div>
     <div  id = "taille_pass" > </div>


   </div>

  </div>



  <div>

  <div class = "card-input-inscription">

<div >
     <!-- <input  id = "pass" type = "password"  v-on:keyup="pass">-->

 <input type="password" id ="repet_pass" name = "repet_pass" onkeyup="verif_pass('pass','repet_pass','verif_pass','result_repet_pass')">

  <input type = "hidden" id = "result_repet_pass">

</div>
     <div  id = "verif_pass" > </div>

   </div>

  </div>



  <div>

  <div class = "card-input-inscription">

<div>
     <!-- <input  id = "pass" type = "password"  v-on:keyup="pass">-->

 <input type="text" id ="email" name = "email" onkeyup="validate()" >


</div>


<div id = "error_mail">

</div>

 <input type = "hidden" id = "result_email">

   </div>

  </div>



</div>



</div>


<div class = "flex_item_center" >

<div onmouseover = "valide_submit()"> <input id = "btn" type = "button"   onclick = "verif()" value = "envoyer"></div>

  

</div>


</div>


  </form>



</div>

</div>

</div>

</template>





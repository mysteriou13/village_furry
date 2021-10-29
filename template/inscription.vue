
<template>

<div>

<div>

<div>


</div>

<div>


  <form action="http://village-furry.localhost/?page=inscription&test=true"  method = "POST">

<div> <center> inscription </center> <div>

<div class = "flex_item_center">



<div style = "padding-right: 4%">
  <div  style = "display:flex; position:relative ">
  <div> pseudo</div>
  </div>

  <div  style = "display:flex">
  <div>
    mot de pass
  </div>

</div>

<div  style = "display:flex">
<div>
  repeter mot de pass
</div>

</div>



<div  style = "display:flex">
<div>
 email
</div>

</div>

</div>



<div>
  <div  style = "display:flex">
  <div> <input type = "text" id = "pseudo"  onkeyup="length_string(8,'pseudo','pseudo ','taille_pseudo')" ></div>

<div id = "taille_pseudo">   </div>

  </div>

  <div  style = "display:flex">

  <div style = "display:flex">

<div>
     <!-- <input  id = "pass" type = "password"  v-on:keyup="pass">-->

 <input type="password" id ="pass"  onkeyup="length_string(8,'pass','mot de pass ','taille_pass')">

</div>
     <div  id = "taille_pass" > </div>


   </div>

  </div>



  <div  style = "display:flex">

  <div style = "display:flex">

<div>
     <!-- <input  id = "pass" type = "password"  v-on:keyup="pass">-->

 <input type="password" id ="repet_pass"  onkeyup="verif_pass('pass','repet_pass','verif_pass')">

</div>
     <div  id = "verif_pass" > </div>

   </div>

  </div>



  <div  style = "display:flex">

  <div style = "display:flex">

<div>
     <!-- <input  id = "pass" type = "password"  v-on:keyup="pass">-->

 <input type="text" id ="email" onkeyup = "validate()">

</div>


<div id = "error_mail">

</div>


   </div>

  </div>



</div>



</div>


<div style = "
display:flex
align-items: center;
  justify-content: center;
">
<div> <input type = "submit"></div>
</div>


</div>


  </form>



</div>

</div>

</div>

</template>

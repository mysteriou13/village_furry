
<template>

<div>

<div>

<div>


</div>

<div>


  <form action="http://village-furry.localhost/?page=inscription"  method = "POST" onsubmit="inscription()">

<div style = " margin-bottom:2%;"> <center> inscription </center> <div>

<div style  = "display:flex
align-items: center;
  justify-content: center;>
">



<div style = "padding-right: 41px;">
  <div  style = "display:flex; position:relative;
left:0%;
  ">
  <div> pseudo</div>
  </div>

  <div  style = "display:flex">
  <div> pass
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

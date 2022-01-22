
<template>

<div>

<div>

<div>


</div>

<div>


  <form action="http://village-furry.localhost/?page=inscription&type=true"  method = "POST" onmouseover = "validate()" >

<div> <center> inscription </center> <div>

</div>



<div>
  <div>

  <div> 
    
    <div class = "d-flex justify-content-between">
      
      <div>
      pseudo
     </div>

     <div>
    <input type = "text" id = "pseudo"  name = "pseudo" onkeyup="length_string(8,'pseudo','pseudo ','taille_pseudo','result_pseudo')" >
   
       <div id = "name_exists">  </div>

       <div id = "taille_pseudo">   </div>
       
   </div>

    </div>

  </div>


  

   <input type = "hidden" id = "result_pseudo">



  </div>






  <div>

  <div >

<div class = "d-flex justify-content-between">
     <!-- <input  id = "pass" type = "password"  v-on:keyup="pass">-->


<div> mot de pass (8 caratère minumum)  </div>

<div>
  <div>
    <input type="password" id ="pass" name = "pass"  onkeyup="length_string(8,'pass','mot de pass ','taille_pass','result_pass')">
    
     </div>

<div  id = "taille_pass" >  </div>

</div>

 <input type = "hidden" id = "result_pass">
</div>
     


   </div>

  </div>



  <div>

  <div>

<div class = "d-flex justify-content-between">
     <!-- <input  id = "pass" type = "password"  v-on:keyup="pass">-->

<div>
 repeter mot de pass 
 </div>

<div>
 <div>
 <input type="password" id ="repet_pass" name = "repet_pass" onkeyup="verif_pass('pass','repet_pass','verif_pass','result_repet_pass')">
</div>

<div  id = "verif_pass" >   </div>
</div>


 <input type = "hidden" id = "result_repet_pass">

</div>
     

   </div>

  </div>



  <div>

  <div>

<div class = "d-flex justify-content-between">
     <!-- <input  id = "pass" type = "password"  v-on:keyup="pass">-->

 <div> email </div>

<div>

<div>
 <input type="text" id ="email" name = "email" onkeyup="validate()" >
</div>

<div id = "error_mail">

</div>
</div>

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

<script>


module.exports = {
  
  mounted() {
    
  var pseudo =  document.getElementById("pseudo");

   pseudo.value = document.getElementById("input_pseudo").innerHTML;

     var valuepseudo  = pseudo.value;

   pseudo.value = valuepseudo.trim();


   var email =  document.getElementById("email");

   email.value = document.getElementById("input_email").innerHTML;

     var valueemail  = email.value;

   email.value = valueemail.trim();

   
 
  }

}



</script>





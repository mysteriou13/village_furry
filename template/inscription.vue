
<template>

<div>

<div>

<div>


</div>

<div id = "div_inscription">


  <form  id = "form_inscription" action="http://village-furry.localhost/?page=inscription"  method = "POST" onmouseover = "validate()" >

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
    <input type = "hidden" name = "form_inscription">
   
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

<div> <input id = "btn" type = "submit"    value = "envoyer"></div>

  
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

    
      var urlcourante = document.location.href;

      var positionemail = urlcourante.indexOf("&type=true"); 

           var getvalueemail = getfunction("email");
          
         var errormail = document.getElementById("error_mail");


         var getpseudo = getfunction("namepseudo").trim();

   var getvaluepseudo = getfunction("pseudo");  

  var name_exists = document.getElementById("name_exists");

  var pseudo =  document.getElementById("pseudo");

  var  type = getfunction("type");

    
        
       if(getvalueemail == "false" ){
      

          var email = document.getElementById("email");
          
         var nameemail = getfunction("nameemail");

          email.value = nameemail;

          errormail.innerHTML = "";


     }else{

       var nameemail = getfunction("nameemail");

         var email = document.getElementById("email");
          
         
          email.value = nameemail;

           errormail.innerHTML = "email pris";
      
        
     }

      if(getvaluepseudo == "false" || type == "false"){

          pseudo.value = document.getElementById("input_pseudo").innerHTML;

          var valuepseudo  = getpseudo.trim();

          pseudo.value = valuepseudo;


          name_exists.innerHTML = " ";

      }
        if(getvaluepseudo == "true"){

           name_exists.innerHTML = "pseudo pris";
        }

    if(positionemail > -1){
      
      document.getElementById("form_inscription").style.display = "none";

      document.getElementById("div_inscription").innerHTML =  "inscription reussi";
      
    
    }
 
  }

}



</script>





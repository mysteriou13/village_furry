function verif(){


   
    var urlcourante = document.location.href;

    
    var positionemail = urlcourante.indexOf("&email=true"); 
    
 
if(positionemail > -1){

  document.getElementById('error_mail').innerHTML = "email pris";

  document.getElementById('pseudo').value = document.getElementById('pseudo').value;

}else{

document.getElementById('error_mail').innerHTML = "";

}



var positionpseudo = urlcourante.indexOf("&pseudo=true"); 

    

    
if(positionpseudo > -1){

  document.getElementById('name_exists').innerHTML = "pseudo pris";

}else{

document.getElementById('name_exists').innerHTML = "";

}


}





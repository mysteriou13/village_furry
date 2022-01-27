function verif(){
   


  var urlcourante = document.location.href;
    
  var positionemail = urlcourante.indexOf("&email=false"); 

if(positionemail != -1){

document.getElementById('error_mail').innerHTML = "email pris";

document.getElementById('pseudo').value = document.getElementById('pseudo').value;

}

var positionpseudo = urlcourante.indexOf("&pseudo=false"); 


if(positionpseudo != 1){

document.getElementById('name_exists').innerHTML = "pseudo pris";

}


}





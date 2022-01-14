function verif(){

    
    var urlcourante = document.location.href;

    
    var position = urlcourante.indexOf("&email=true"); 
    
    
if(position == -1){

  document.getElementById('error_mail').innerHTML = "email pris";

}else{

document.getElementById('error_mail').innerHTML = "";

}



var position = urlcourante.indexOf("&pseudo=true"); 
    
    
if(position == -1){

  document.getElementById('name_exists').innerHTML = "pseudo pris";

}else{

document.getElementById('name_exists').innerHTML = "";

}


}





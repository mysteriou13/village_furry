
function length_string(length,input_data,error,div_message,input_result){

var data_pass = document.getElementById(input_data).value;

 var result = null;

if(  data_pass.length <= length){

document.getElementById(div_message).innerHTML = error+" tros court";

result = false;



}else{

result = true;

document.getElementById(div_message).innerHTML = " ";

}


document.getElementById(input_result).value = result;

}


function valide_submit(){

var result_pseudo = document.getElementById('result_pseudo').value;

var result_pass = document.getElementById('result_pass').value;

var result_repet_pass = document.getElementById('result_repet_pass').value;

var result_email = document.getElementById('result_email').value;

var btn = document.getElementById('btn');

if(result_pseudo == "true" && result_pass == "true"  &&  result_repet_pass && result_email == "true"){


btn.setAttribute('type','submit');

}else{

btn.setAttribute('type','button');

}



}


function verif_pass(pass,repet_pass,verif_pass,input_result){

var p = document.getElementById(pass).value;

var v = document.getElementById(repet_pass).value;

var result_pass = null;


if(p === v){

result_pass = true;


}else{

  result_pass = false;

document.getElementById(verif_pass).innerHTML = "mot de pass pas identique";

}

document.getElementById(input_result).value = result_pass;


}



function checkEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}


function validate() {
    var email = document.getElementById("email").value;

  var result_email = document.getElementById('result_email').value;

  if(email !== ""){
    if (checkEmail(email)) {

        document.getElementById('error_mail').innerHTML = "";
        document.getElementById('result_email').value = "true";

    } else {

      document.getElementById('error_mail').innerHTML = "format  email non valide";
      document.getElementById('result_email').value = "false";


    }

  }




    return false;
}

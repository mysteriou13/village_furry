
function length_string(length,input_data,error,div_message){

var data_pass = document.getElementById(input_data).value;

if(  data_pass.length <= length){

document.getElementById(div_message).innerHTML = error+" tros court";


}else{

document.getElementById(div_message).innerHTML = " ";

}

}

function verif_pass(pass,repet_pass,verif_pass){

var p = document.getElementById(pass).value;



var v = document.getElementById(repet_pass).value;



if(p === v){

document.getElementById(verif_pass).innerHTML = "mot de pass identique";

}else{

document.getElementById(verif_pass).innerHTML = "mot de pass pas identique";

}


}

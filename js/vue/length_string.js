
function length_string(length,input_data,error,div_message){

var data_pass = document.getElementById(input_data).value;

if(  data_pass.length <= length){

document.getElementById(div_message).innerHTML = error+" tros court";


}else{

document.getElementById(div_message).innerHTML = " ";

}

}

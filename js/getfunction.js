function getfunction(get){


    var link = document.location.href;

    var words = link.split('/?');

    var params = words[1];

    var split_params = params.split("&");

     var nbparams = split_params.length;
   
    
  
     for(var i = 0; i < nbparams; i++){

    var tab_get = split_params[i];

      var split_tab = tab_get.split("=");
  
     var get_params = split_tab[0];

     var get_value = split_tab[1];
     
        if(get_params == get){

             return get_value;
        }
       
     }
  


}
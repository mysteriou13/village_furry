<?php 

class inscription{

  
    public function  insert_user($pseudo,$pass,$email){

            
              $verif_email = null;
            
              $verif_pseudo = null;
            
               $url ="http://village-furry.localhost/?page=inscription";
            
              
               if(email_exists($email)){
            
               $verif_email = "&email=false";
            
             }else{
            
              $verif_email = "&email=true";
            
             }
            
              $url = $url.$verif_email;
            
              if(username_exists($pseudo)){
            
               $verif_pseudo = "&pseudo=fasle";
            
             }else{
            
              $verif_pseudo = "&pseudo=true";
            
             }
            
             $url = $url.$verif_pseudo;
                  
            
               wp_create_user($pseudo, $pass, $email);
            
          


    }

}

?>
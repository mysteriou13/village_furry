<?php 

class inscription{

  
    public function  insert_user($pseudo,$pass,$email){

               
              $verif_email = null;
            
              $verif_pseudo = null;

              $type = null;
            
               $url ="http://village-furry.localhost/?page=inscription";
          

               if(email_exists($email)){
            
               $verif_email = "&email=true&nameemail=".$email;
            
             }else{
            
              $verif_email = "&email=false&nameemail=".$email;            
             }
            
      
              if(username_exists($pseudo)){
                
               $verif_pseudo = "&pseudo=true&namepseudo=".$pseudo;
            
             }else{
            
              $verif_pseudo = "&pseudo=false&namepseudo=".$pseudo;
            
             }
            
           
                      
                if(!email_exists($email) && (!username_exists($pseudo))){
               
                    $type = "&type=true";                
                   $url = $url.$type;      
                
                   wp_create_user($pseudo, $pass, $email);

               
                }else{
                  
                  $type = "&type=false";
                  $url = $url.$type;      
                  

                }


                $url = $url.$verif_pseudo.$verif_email.$type;
                echo '<meta http-equiv="refresh" content="0; URL='.$url.'">';

             

    } 

}

?>
<?php 

class inscription{

    public function  insert_user($username,$pass,$email){

        
        if(username_exists($username) == 0){
            
             wp_create_user( $username, $password, $email);

    
        }else{
          
        return $error = "pseudo pris";

        }


    }

}

?>
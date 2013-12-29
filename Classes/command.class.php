<?php
abstract class Command{
    
   public static function process(array $post) {
            //PROCESS USER
            if(isset($post['user'])) {
                    $u =  new userCommand($post);
                     return $u->getFunctionResponse();
            }
            
       
       
   }
}
?>

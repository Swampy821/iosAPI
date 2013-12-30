<?php
abstract class Command{
    
   public static function process(array $post) {
            //PROCESS USER
            if(isset($post['user'])) {
                    $u =  new userCommand($post);
                     return $u->getFunctionResponse();
            }
            //PROCESS NOTES
            if(isset($post['note'])) {
                    $n = new noteCommand($post);
                    return $n->getFunctionResponse();
            }
   }
}
?>

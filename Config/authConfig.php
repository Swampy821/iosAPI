<?php

 class auth {
    
    //AUTHORIZATION CODES
    protected static $authCodes = array(
        'ABC'
    );
    
    
    
    public static function authorized(array $post) {
        $authorized=false;
        $codes = self::$authCodes;
        foreach($codes as $a) {
            if(isset($post[$a])) {
                $authorized =  true;
            }
        }
        return $authorized;
    }
}
?>

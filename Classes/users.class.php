<?php
class userCommand {
    private $username='';
    private $password='';
    private $db;
    private $error;
    private $post = array();
    private $functionResponse;
    public function getError() {
        return $this->error;
    }
    public function getFunctionResponse() {
         return $this->functionResponse;
    }
    
    public function __construct(array $post) {
        $this->db = new MysqliDb();
        $this->post = $post;
        $this->process();
        
    }
    
    private function process() {
            if(isset($this->post['valid'])) {
                        if($this->validUserAndPass()) {
                            $this->functionResponse=true;
                        }else{
                            $this->functionResponse=$this->error;
                        }
            }
    }
    
    
    private function encryptUserPassword($password) {
       $password = md5($password); //ENCRYPTION CODE
       return $password;
    }
    
    private function validUserAndPass() {
        try{
            if(!isset($this->post['username'])) {
                throw new Exception("Username not set");
            }  
            if(!isset($this->post['password'])) {
                throw new Exception("Password not set");
            }
            $sql = "SELECT ID FROM users WHERE username=? AND password=?";
            $args = array($this->post['username'],$this->post['password']);
            $results = $this->db->rawQuery($sql, $args);
            if(!count($results)) {
                throw new Exception("0");
            }
            return true;
            
        }catch(Exception $e) {
                      $this->error = $e->getMessage();
                      return false;
        }
    }
}
?>

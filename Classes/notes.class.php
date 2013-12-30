<?php
class noteCommand {
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
            if(isset($this->post['COMMAND'])) {
                //DO COMMAND
            }
    }
    
}
?>

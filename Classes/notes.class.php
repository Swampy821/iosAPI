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
            if(isset($this->post['update'])) {
                  if(!$this->addNote()) {
                      $this->functionResponse = $this->error;
                  }
            }
            if(isset($this->post['get'])) {
                        if(!$this->getNote()) {
                            $this->functionResponse = $this->error;
                        }
            }
    }
    
    private function addNote() {
        try{
            $noteData = $this->post['noteData'];
            $userID = $this->post['userID'];
            $noteID = $this->post['noteID'];
            if($noteData == null) {
                throw new Exception("Note data must be set.");
            }
            if($userID==null) {
                throw new Exception("User ID must be set");
            }
            if($noteID != null) {
                    return $this->editNote();
            }
            $insertData = array(
                'userID'=>$userID,
                'note'=>$noteData,
                'Tstamp'=>time()
            );
           if($this->db->insert("notes", $insertData)) {
                       $this->functionResponse = $this->db->getInsertId();
                       return true;
           }else{
               throw new Exception("Erorr while inserting new note.");
           }
        }catch(Exception $e) {
                      $this->error = $e->getMessage();
                      return false;
        }    
    }
    private function editNote() {
            $noteData = $this->post['noteData'];
            $userID = $this->post['userID'];
            $noteID = $this->post['noteID'];
            try{
                $updatedata = array(
                    'note'=>$noteData,
                    'userID'=>$userID,
                );
                        $this->db->where('ID', $noteID);
             if($this->db->update("notes", $updatedata)) {
                 $this->functionResponse = $noteID;   
                 return true;
             }else{
                 throw new Exception("Failed updating notes");
             }
            }catch(Exception $e) {
                        $this->error = $e->getMessage();
                        return false;
            }
    }
    private function getNote() {
        try{
            $noteID = $this->post['noteID'];
            if($noteID==null) {
                throw new Exception("Note ID must be set.");
            }
            $sql = "SELECT * FROM notes WHERE ID=?";
            $args = array($noteID);
            $results = $this->db->rawQuery($sql,$args);
            if(count($results)) { 
                $this->functionResponse =  json_encode($results);
            }else{
                throw new Exception("Failed to select Note");
            }
            ///CONTINUE HERE AFTER DOCUMENTATION
        }catch(Exception $e) {
                    $this->error = $e->getMessage();
                    return false;
        }
    }
    
    
}
?>

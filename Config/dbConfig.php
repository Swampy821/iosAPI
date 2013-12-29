<?php
interface DBConfig {
    public function getHost();
    public function getUsername();
    public function getPassword();
    public function getDb();
    public function getPort(); 
}
class basicConfig implements DBConfig{
   private $config = array(
       'host'=>'localhost',
       'username'=>'root',
       'password'=>'',
       'db'=>'iosAPI',
       'port'=>NULL
   );
   public  function getHost() {
       return $this->config['host'];
   }
   public  function getUsername() {
       return $this->config['username'];
   }
   public  function getPassword() {
       return $this->config['password'];
   }
   public  function getDb() {
       return $this->config['db'];
   }
   public  function getPort() {
       return $this->config['port'];
   }
}
class specialConfig implements DBConfig{
   private $config = array(
       'host'=>'localhost',
       'username'=>'root',
       'password'=>'',
       'db'=>'aDifferentDatabase',
       'port'=>NULL
   );
   public  function getHost() {
       return $this->config['host'];
   }
   public  function getUsername() {
       return $this->config['username'];
   }
   public  function getPassword() {
       return $this->config['password'];
   }
   public  function getDb() {
       return $this->config['db'];
   }
   public  function getPort() {
       return $this->config['port'];
   }
}
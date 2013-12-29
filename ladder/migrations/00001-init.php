<?php

class Init_Migration_00001 extends Migration {
	protected $min_version = '0.8.1';
	// protected $databases = FALSE;
	// protected $import_data = array();
	// protected $import_update = FALSE; // TRUE for all, or array of tables from import_data to update.
	// protected $import_key_fields = FALSE; // Array of 'table' => array('fields', 'for', 'where').
	// protected $unimport_data = TRUE; // or an array of tables to unimport.
	// protected $unimport_key_fields = FALSE; // or an array of table => array(key, fields).

	public function up() {
            
                        $this->create_table("users")
                                ->column("username", "varchar",array('default'=>null,'limit'=>25))
                                ->column('password', 'varchar',array('default'=>null,'limit'=>50));
	}

	public function down() {
                        $this->table("users")->drop();
	}
}
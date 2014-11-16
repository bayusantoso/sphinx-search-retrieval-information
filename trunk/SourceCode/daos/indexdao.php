<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexDao
 *
 * @author harry
 */
class IndexDao {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->mTableName = "user_group";
    }
    
    public function sphinxSearch() {
        
    }
    
    public function getList() {
        
    }
    
    public function getObject($id = null) {
        return null;
    }
}

?>

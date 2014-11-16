<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexService
 *
 * @author harry
 */
class IndexService extends Service {
    private $IndexDao = null;
    public function __construct() {
        parent::__construct();
        $this->loadClass("IndexDao", "Dao");
        $this->IndexDao = new IndexDao();
    }
    
    public function getList($keyword) {
        return $this->IndexDao->getList($keyword);
    }
    
    public function getDocument($id) {
        return $this->IndexDao->getObjectDocument($id);
    }
}

?>

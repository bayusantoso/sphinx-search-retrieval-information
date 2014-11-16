<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author bayu
 */
class Controller extends Core {
    //put your code here
    protected $mErrors = array();
    
    public function __construct() {
        
    }
    
    protected function isLogin() {
        return false;
    }
    
    protected function isAllowRead() {
        return false;
    }
    
    protected function isAllowCreate() {
        return false;
    }
    
    protected function isAllowUpdate() {
        return false;
    }
    
    protected function isAllowDelete() {
        return false;
    }
    
    protected function getParam($name = null) {
        $result = "";
        if (!is_null($name) && !empty($name)) {
            if (isset($_POST[$name])) { $result = $_POST[$name]; }
            if (isset($_GET[$name])) { $result = $_GET[$name]; }
        }
        return $result;
    }
    
    protected  function returnToIndex() {
        redirect (base_url()."/");
    }
    
    protected function generatePaging($param = null) {
        $string = "<hr />";
        
        return $string;
    }
}

?>

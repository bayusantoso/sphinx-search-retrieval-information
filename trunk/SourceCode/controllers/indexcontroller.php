<?php

Class IndexController extends Controller {
    protected $data = array();
    protected $IndexService = null;
    public function __construct() {
        parent::__construct();
        $this->loadDefaultClass();
    }
    
    public function index() {
        $this->data['master'] = "shared/master";
        $this->data['view'] = 'index';
        return $this->data;
    }
    
    public function result() {
        $this->data['master'] = "shared/master";
        $this->data['view'] = "result";
        $this->data['query'] = $this->getParam("query");
        $this->data['_PAGING_'] = $this->generatePaging();
        return $this->data;
    }
    
    public function detail() {
        $this->data['master'] = "shared/master";
        $this->data['view'] = "detail";
        $this->data['query'] = $this->getParam("query");
        return $this->data;
    }
    
    public function about() {
        $this->data['master'] = "shared/master";
        $this->data['view'] = "about";
        return $this->data;
    }
    
    private function generateFilter() {
        
    }
    
    private function loadDefaultClass() {
        $this->loadClass("IndexService", "service");
        $this->IndexService = new IndexService();
        $this->loadClass("IndexModel", "model");
    }
}
?>

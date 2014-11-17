<?php

Class IndexController extends Controller {
    protected $data = array();
    protected $IndexService = null;
    public function __construct() {
        parent::__construct();
        $this->loadDefaultClass();
        $this->data['placeholder_search_text'] = "Type Your Keyword";
    }
    
    public function index() {
        $this->data['master'] = "shared/master";
        $this->data['view'] = 'index';
        return $this->data;
    }
    
    public function result() {
        $this->data['master'] = "shared/master";
        $this->data['view'] = "result";
        $query = $this->getParam("query");
        $time_start = $this->microtimeFloat();
        $model = $this->IndexService->getList($query);
        $this->data['Model'] = $model;
        $this->data['query'] = $query;
        $this->data['_PAGING_'] = $this->generatePaging();
        $time_end = $this->microtimeFloat();
        $time = $time_end - $time_start;
        $this->data['elapsed_time'] = round($time,2);
        return $this->data;
    }
    
    public function detail() {
        $this->data['master'] = "shared/master";
        $this->data['view'] = "detail";
        $id = $this->getParam("id");
        $model = $this->IndexService->getDocument($id);
        $this->data['Model'] = $model;
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

<?php
require_once 'libraries/sphinxapi.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexDao
 *
 * @author bayu
 */
class IndexDao extends Dao {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->mTableName = "document";
    }
    
    public function sphinxSearch($keyword = null) {
        if (is_null($keyword) || empty($keyword)) { return null; }
        $s = new SphinxClient;
        $s->setServer("127.0.0.1", 9312); // NOT "localhost" under Windows 7!
        $s->setMatchMode(SPH_MATCH_EXTENDED2);
        $result_query = $s->Query($keyword);
        $result = array();
        
        if ($result_query['total'] > 0) {
            foreach ($result_query['matches'] as $id => $otherStuff) {
                $DocObj = $this->getObjectDocument($id);
                if (!is_null($DocObj)) { $result[] = $DocObj; }
            }
        }
        
        if (count($result) > 0) {
            $this->loadClass("ResultModel","model");
            $ResultModel = new ResultModel();
            $ResultModel->setResultCount($result_query['total']);
            $ResultModel->setDocuments($result);
            
            return $ResultModel;
        }
        
        return null;
    }
    
    public function getList($keyword) {
        return $this->sphinxSearch($keyword);
    }
    
    public function getObject($id = null) {
        return null;
    }
    
    public function getObjectDocument($id) {
        $arr_id = array("id" => $id);
        $this->mTableName = "documents";
        return parent::getObject($arr_id);
    }
    
    public function toObject($rowset) {
        $this->loadClass("DocumentModel","model");
        $DocumentModel = new DocumentModel();
        
        $DocumentModel->setId($rowset->id);
        $DocumentModel->setDateAdded($rowset->date_added);
        $DocumentModel->setAuthor($rowset->author);
        $DocumentModel->setTitle($rowset->title);
        $DocumentModel->setContent($rowset->content);
        $DocumentModel->setSource($rowset->source);
        
        return $DocumentModel;
    }
}

?>

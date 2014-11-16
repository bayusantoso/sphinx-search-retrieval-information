<?php

Class ResultModel {
    private $mResultCount;
    private $mDocuments;
    
    public function setResultCount($value) {
        $this->mResultCount = $value;
    }
    
    public function getResultCount() {
        return $this->mResultCount;
    }
    
    public function setDocuments($value) {
        $this->mDocuments = $value;
    }
    
    public function getDocuments() {
        return $this->mDocuments;
    }
}

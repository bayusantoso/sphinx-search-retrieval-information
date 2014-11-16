<?php

Class DocumentModel {
    private $mId;
    private $mDateAdded;
    private $mAuthor;
    private $mTitle;
    private $mContent;
    private $mSource;
    
    public function setId($value) {
        $this->mId = $value;
    }
    
    public function getId() {
        return $this->mId;
    }
    
    public function setDateAdded($value) {
        $this->mDateAdded = $value;
    }
    
    public function getDateAdded() {
        return $this->mDateAdded;
    }
    
    public function setAuthor($value) {
        $this->mAuthor = $value;
    }
    
    public function getAuthor() {
        return $this->mAuthor;
    }
    
    public function setTitle($value) {
        $this->mTitle = $value;
    }
    
    public function getTitle() {
        return $this->mTitle;
    }
    
    public function setContent($value) {
        $this->mContent = $value;
    }
    
    public function getContent() {
        return $this->mContent;
    }
    
    public function setSource($value) {
        $this->mSource = $value;
    }
    
    public function getSource() {
        return $this->mSource;
    }
}

<?php
class Tower {
    private $name;
    private $height;
    private $year;
    
    function __construct($name, $height, $year){
        $this->name = $name;
        $this->height = $height;
        $his->year = $year;
    }
    
    function setName($name){
        $this->name = $name;
    }
    
    function getName(){
        return $this->name;
    }
    
    function setHeight($height){
        $this->height = $height;
    }
    
    function getHeight(){
        return $this->height;
    }

    function setYear($year){
        $this->year = $year;
    }
    
    function getYear(){
        return $this->year;
    }
    
    function getProfile(){
        $profile = "{$this->name}の高さは{$this->height}mで、{$this->year}年に開業しました。";
    }
}
?>

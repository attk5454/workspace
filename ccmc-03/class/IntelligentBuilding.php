<?php
require_once("class/Building.php");
require_once("class/Iintelligence.php");
class IntelligentBuilding extends Building implements Iintelligence{
    /**
     * 
     */
    function isAutoLocked(){
        $message = "AutoLock ok";
        return $message;
    }
    /**
     * 
     */
    function accessWiFi(){
        $message = "WiFi ok";
        return $message;
    }
}
?>
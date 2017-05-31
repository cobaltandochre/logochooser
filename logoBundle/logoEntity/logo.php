<?php
class Logo {
    private $logo_id, $logo_name, $logo_size, $logo_order, $logo_resolution, $logo_bkgd, 
            $logo_filename, $logo_zip, $creation_date, $logo_display;
    
    public function __construct() {
        $this->logo_id = '';
        $this->logo_name = '';
        $this->logo_size = '';
        $this->logo_order = '';
        $this->logo_resolution = '';
        $this->logo_bkgd = '';
        $this->logo_filename = '';
        $this->logo_zip = '';
        $this->creation_date = '';
        $this->logo_display = '';
    }
    
    public function getID() {
        return $this->logo_id;
    }
    
    public function setID($value) {
        $this->logo_id = $value;
    }
    
    public function getName() {
        return $this->logo_name;
    }
    
    public function setName($value) {
        $this->logo_name = $value;
    }
    
    public function getSize() {
        return $this->logo_size;
    }
    
    public function setSize($value) {
        switch($value) {
            case 'S' :
                $value = 'Sm';
                break;
            case 'M' :
                $value = 'Med';
                break;
            case 'L' :
                $value = 'Lg';
                break;
        }
        $this->logo_size = $value;
    }
    
    public function getResolution() {
        return $this->logo_resolution;
    }
    
    public function setResolution($value) {
        $this->logo_resolution = $value;
    }
    
    public function getOrder() {
        return $this->logo_order;
    }
    
    public function setOrder($value) {
        $this->logo_order = $value;
    }   

    public function getBkgd() {
        return $this->logo_bkgd;
    }
    
    public function setBkgd($value) {
        $this->logo_bkgd = $value;
    }
    
    public function getFileName() {
        return $this->logo_filename;
    }
    
    public function setFileName($value) {
        $this->logo_filename = $value;
    }
    
    public function getZip() {
        return $this->logo_zip;
    }
    
    public function setZip($value) {
        $this->logo_zip = $value;
    }
    
    public function getCreationDate() {
        return $this->creation_date;
    }
    
    public function setCreationDate($value) {
        $this->creation_date = $value;
    }
    
    public function getDisplay() {
        return $this->logo_filename;
    }
    
    public function setDisplay($value, $state) {
        if($state) {
            $this->logo_filename = $value;
        }
    }
}
?>

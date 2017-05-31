<?php
/*
 *  gets access to the logos_db database
 *  performs functions and queries
 * 
 *  Author: Richard Hodges
 *          Graphics Specialist
 *          University Relations
 *          Columbus State University
 *  9/22/2012
 */

class LogosDB {
    public function getThumbnails($logo_name, $logo_size) {
        $db = Database_XML::getDB();
        
        $thumbnails = array();
        foreach($db as $row) {
            $temp_name = $row->logoName;
            $temp_size = $row->logoSize;
            
            if($temp_name == $logo_name && $temp_size == $logo_size) {
                $thumbnail = new Logo();
                $thumbnail->setID($row->logoID);
                $thumbnail->setBkgd($row->logoBkgd);
                $thumbnail->setFileName($row->logoFileName);
                $thumbnails[] = $thumbnail;
                //break;
            }
        }
        return $thumbnails;
    }
    public function initLogos($logo_name, $logo_size, $logo_resolution, $file_extension) {
        $db = Database_XML::getDB();
        
        $logos = array();
        foreach($db as $row) {
            $temp_name = $row->logoName;
            $temp_size = $row->logoSize;
            $temp_resolution = $row->logoResolution;
            $temp_extension = $row->logoExtension;
            
            if($temp_name == $logo_name && $temp_size == $logo_size && $temp_resolution == $logo_resolution && $temp_extension == $file_extension) {
                $logo = new Logo();
                $logo->setID($row->logoID);
                $logo->setSize($row->logoSize);
                $logo->setZip($row->logoZip);
                $logos[] = $logo;
                //break;
            }
        }
        return $logos;
    }
    public function getDisplayLogo($logo_id) {
        $db = Database_XML::getDB();
        
        $display = array();
        foreach($db as $row) {
            $temp_id = $row->logoID;
            
            if($temp_id == $logo_id) {
                $temp = new Logo();
                $temp->setName($row->logoName);
                $temp->setFileName($row->logoFileName);
                $display[] = $temp;
                break;
            }
        }
        return $display;
    }
    public function initLogos2($logo_name, $file_extension) {
        $db = Database_XML::getDB();
        
        $logos = array();
        foreach($db as $row) {
            $temp_name = $row->logoName;
            $temp_extension = $row->logoExtension;
            
            if($temp_name == $logo_name && $temp_extension == $file_extension) {
                $logo = new Logo();
                $logo->setID($row->logoID);
                $logo->setSize($row->logoSize);
                $logo->setZip($row->logoZip);
                $logos[] = $logo;
            }
        }
        return $logos;
    }
    public function getLogoButton($logo_name, $logo_size) {
        // returns logoFileName, address path of button image
        $db = Database_XML::getDB();
        
        foreach($db as $row) {
            $temp_name = $row->logoName;
            $temp_size = $row->logoSize;
            
            if($temp_name == $logo_name && $temp_size == $logo_size) {
                $button = $row->logoFileName;
                break;
            }
        }
        return $button;
    }
    
    public function getTypeButton($logo_id, $logo_size) {
        // returns logoFileName, address path of button image
        $db = Database_XML::getDB();
        
        foreach($db as $row) {
            $temp_id = $row->logoID;
            $temp_size = $row->logoSize;
            
            if($temp_id == $logo_id && $temp_size == $logo_size) {
                $button = $row->logoFileName;
                break;
            }
        }
        return $button;
    }
}
?>

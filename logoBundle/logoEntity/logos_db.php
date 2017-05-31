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
        $db = Database::getDB();
        $query = "SELECT * FROM logos
                  WHERE logoName = '$logo_name'
                  AND logoSize = '$logo_size'
                  ORDER BY logoOrder";
        $result = $db->query($query);
        $thumbnails = array();
        foreach($result as $row) {
            $thumbnail = new Logo();
            $thumbnail->setID($row['logoID']);
            $thumbnail->setName($row['logoName']);
            $thumbnail->setSize($row['logoSize']);
            $thumbnail->setOrder($row['logoOrder']);
            $thumbnail->setResolution($row['logoResolution']);
            $thumbnail->setBkgd($row['logoBkgd']);
            $thumbnail->setFileName($row['logoFileName']);
            $thumbnail->setZip($row['logoZip']);
            $thumbnail->setCreationDate($row['creationDate']);
            $thumbnails[] = $thumbnail;
        }
        return $thumbnails;
    }
    public function initLogos($logo_name, $logo_size, $logo_resolution, $file_extension) {
        $db = Database::getDB();
        $query = "SELECT * FROM logos
                  WHERE logoName = '$logo_name'
                  AND logoSize = '$logo_size'
                  AND logoResolution = '$logo_resolution'
                  AND logoExtension = '$file_extension'
                  ORDER BY logoOrder";
        $result = $db->query($query);
        $logos = array();
        foreach($result as $row) {
            $logo = new Logo();
            $logo->setID($row['logoID']);
            $logo->setName($row['logoName']);
            $logo->setSize($row['logoSize']);
            $logo->setOrder($row['logoOrder']);
            $logo->setResolution($row['logoResolution']);
            $logo->setBkgd($row['logoBkgd']);
            $logo->setFileName($row['logoFileName']);
            $logo->setZip($row['logoZip']);
            $logo->setCreationDate($row['creationDate']);
            $logos[] = $logo;
        }
        return $logos;
    }
    public function getDisplayLogo($logo_id) {
        $db = Database::getDB();
        $query = "SELECT * FROM logos
                  WHERE logoID = '$logo_id'";
        $result = $db->query($query);
        $display_logo = array();
        foreach($result as $row) {
            $logo = new Logo();
            $logo->setName($row['logoName']);
            $logo->setFileName($row['logoFileName']);
            $display_logo[] = $logo;
        }
        return $display_logo;
    }
    public function initLogos2($logo_name, $file_extension) {
        $db = Database::getDB();
        $query = "SELECT * FROM logos
                  WHERE logoName = '$logo_name'
                  AND logoExtension = '$file_extension'
                  ORDER BY logoOrder";
        $result = $db->query($query);
        $logos = array();
        foreach($result as $row) {
            $logo = new Logo();
            $logo->setID($row['logoID']);
            $logo->setName($row['logoName']);
            $logo->setSize($row['logoSize']);
            $logo->setOrder($row['logoOrder']);
            $logo->setResolution($row['logoResolution']);
            $logo->setBkgd($row['logoBkgd']);
            $logo->setFileName($row['logoFileName']);
            $logo->setZip($row['logoZip']);
            $logo->setCreationDate($row['creationDate']);
            $logos[] = $logo;
        }
        return $logos;
    }
    public function getLogoButton($logo_name, $logo_size) {
        $db = Database::getDB();
        $query = "SELECT * FROM logos
                  WHERE logoName = '$logo_name'
                  AND logoSize = '$logo_size'
                  ORDER BY logoOrder";
        $button = $db->query($query);
        $button = $button->fetch();
        $button = $button['logoFileName'];
        return $button;
    }
    
    public function getTypeButton($logo_id, $logo_size) {
        $db = Database::getDB();
        $query = "SELECT * FROM logos
                  WHERE logoID = '$logo_id'
                  AND logoSize = '$logo_size'
                  ORDER BY logoOrder";
        $button = $db->query($query);
        $button = $button->fetch();
        $button = $button['logoFileName'];
        return $button;
    }
}
?>

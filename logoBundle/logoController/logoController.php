<?php
/*
 *  File:   logo manager controller
 *          provides access to the database,
 *          performs operations on data,
 *          and displays formatted pages
 *  Author: Richard Hodges
 *          Graphics Specialist
 *          University Relations
 *          Columbus State University
 *  9/22/2012
 */
 
/*$_SESSION = array();
session_destroy(); */
 
//require_once ('logoBundle/logoEntity/database.php');
//require_once ('logoBundle/logoEntity/logos_db.php');
require_once ('logoBundle/logoEntity/database_xml.php');
require_once ('logoBundle/logoEntity/logos_db_xml.php');
require_once ('logoBundle/logoEntity/logo.php');

$logosDB = new LogosDB();

require_once ('logoBundle/logoViews/buttons.php');

if(isset($_POST['logo_name'])) {
    $logo_name = $_POST['logo_name'];
} else if(isset($_GET['logo_name'])) {
    $logo_name = $_GET['logo_name'];
} else {
    $logo_name = 'Logo_1';
}

if(isset($_POST['logo_type'])) {
    $logo_type = $_POST['logo_type'];
} else if(isset($_GET['logo_type'])) {
    $logo_type = $_GET['logo_type'];
} else {
    $logo_type = 'jpg';
}

switch($logo_type) {
    case 'gif' : {
        switch($logo_name) {
            case 'Logo_1' :
                $display_logo = $logosDB->getDisplayLogo('Logo_1_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_1', 'T');
                $small_logo = $logosDB->initLogos('Logo_1', 'S', 'web', 'gif');
                $medium_logo = $logosDB->initLogos('Logo_1', 'M', 'web', 'gif');
                $large_logo = $logosDB->initLogos('Logo_1', 'L', 'web', 'gif');
                $logo_title = getTitle('academic', 'Logo 1', 'GIF (web)');
                break;
            case 'Logo_2' :
                $display_logo = $logosDB->getDisplayLogo('Logo_2_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_2', 'T');
                $small_logo = $logosDB->initLogos('Logo_2', 'S', 'web', 'gif');
                $medium_logo = $logosDB->initLogos('Logo_2', 'M', 'web', 'gif');
                $large_logo = $logosDB->initLogos('Logo_2', 'L', 'web', 'gif');
                $logo_title = getTitle('academic', 'Logo 2', 'GIF (web)');
                break;
            case 'Logo_3' :
                $display_logo = $logosDB->getDisplayLogo('Logo_3_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_3', 'T');
                $small_logo = $logosDB->initLogos('Logo_3', 'S', 'web', 'gif');
                $medium_logo = $logosDB->initLogos('Logo_3', 'M', 'web', 'gif');
                $large_logo = $logosDB->initLogos('Logo_3', 'L', 'web', 'gif');
                $logo_title = getTitle('academic', 'Logo 3', 'GIF (web)');
                break;
            case 'Logo_4' :
                $display_logo = $logosDB->getDisplayLogo('Logo_4_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_4', 'T');
                $small_logo = $logosDB->initLogos('Logo_4', 'S', 'web', 'gif');
                $medium_logo = $logosDB->initLogos('Logo_4', 'M', 'web', 'gif');
                $large_logo = $logosDB->initLogos('Logo_4', 'L', 'web', 'gif');
                $logo_title = getTitle('academic', 'Logo 4', 'GIF (web)');
                break;
            case 'Clocktower' :
                $display_logo = $logosDB->getDisplayLogo('Clocktower_D');
                $logo_thumbnail = $logosDB->getThumbnails('Clocktower', 'T');
                $small_logo = $logosDB->initLogos('Clocktower', 'S', 'web', 'gif');
                $medium_logo = $logosDB->initLogos('Clocktower', 'M', 'web', 'gif');
                $large_logo = $logosDB->initLogos('Clocktower', 'L', 'web', 'gif');
                $logo_title = getTitle('academic', 'Clock Tower Logo', 'GIF (web)');
                break;
            case 'Cougar_3' :
                $display_logo = $logosDB->getDisplayLogo('Cougar_3_D');
                $logo_thumbnail = $logosDB->getThumbnails('Cougar_3', 'T');
                $small_logo = $logosDB->initLogos('Cougar_3', 'S', 'web', 'gif');
                $medium_logo = $logosDB->initLogos('Cougar_3', 'M', 'web', 'gif');
                $large_logo = $logosDB->initLogos('Cougar_3', 'L', 'web', 'gif');
                $logo_title = getTitle('athletic','Cougar 3', 'GIF (web)');
                break;
            case 'Cougar_4' :
                $display_logo = $logosDB->getDisplayLogo('Cougar_4_D');
                $logo_thumbnail = $logosDB->getThumbnails('Cougar_4', 'T');
                $small_logo = $logosDB->initLogos('Cougar_4', 'S', 'web', 'gif');
                $medium_logo = $logosDB->initLogos('Cougar_4', 'M', 'web', 'gif');
                $large_logo = $logosDB->initLogos('Cougar_4', 'L', 'web', 'gif');
                $logo_title = getTitle('athletic', 'Cougar 4', 'GIF (web)');
                break;
            case 'Cougar_Head_2' :
                $display_logo = $logosDB->getDisplayLogo('Cougar_Head_2_D');
                $logo_thumbnail = $logosDB->getThumbnails('Cougar_Head_2', 'T');
                $small_logo = $logosDB->initLogos('Cougar_Head_2', 'S', 'web', 'gif');
                $medium_logo = $logosDB->initLogos('Cougar_Head_2', 'M', 'web', 'gif');
                $large_logo = $logosDB->initLogos('Cougar_Head_2', 'L', 'web', 'gif');
                $logo_title = getTitle('athletic', 'Cougar Head 2', 'GIF (web)');
                break;
        }
        $buttonStatus = 'gif';
        include('logoBundle/logoViews/display_logos.php');
        break;
    }
    case 'jpg' : {
        switch($logo_name) {
            case 'Logo_1' :
                $display_logo = $logosDB->getDisplayLogo('Logo_1_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_1', 'T');
                $small_logo = $logosDB->initLogos('Logo_1', 'S', 'web', 'jpg');
                $medium_logo = $logosDB->initLogos('Logo_1', 'M', 'web', 'jpg');
                $large_logo = $logosDB->initLogos('Logo_1', 'L', 'web', 'jpg');
                $logo_title = getTitle('academic', 'Logo 1', 'JPG (web)');
                break;
            case 'Logo_2' :
                $display_logo = $logosDB->getDisplayLogo('Logo_2_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_2', 'T');
                $small_logo = $logosDB->initLogos('Logo_2', 'S', 'web', 'jpg');
                $medium_logo = $logosDB->initLogos('Logo_2', 'M', 'web', 'jpg');
                $large_logo = $logosDB->initLogos('Logo_2', 'L', 'web', 'jpg');
                $logo_title = getTitle('academic', 'Logo 2', 'JPG (web)');
                break;
            case 'Logo_3' :
                $display_logo = $logosDB->getDisplayLogo('Logo_3_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_3', 'T');
                $small_logo = $logosDB->initLogos('Logo_3', 'S', 'web', 'jpg');
                $medium_logo = $logosDB->initLogos('Logo_3', 'M', 'web', 'jpg');
                $large_logo = $logosDB->initLogos('Logo_3', 'L', 'web', 'jpg');
                $logo_title = getTitle('academic', 'Logo 3', 'JPG (web)');
                break;
            case 'Logo_4' :
                $display_logo = $logosDB->getDisplayLogo('Logo_4_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_4', 'T');
                $small_logo = $logosDB->initLogos('Logo_4', 'S', 'web', 'jpg');
                $medium_logo = $logosDB->initLogos('Logo_4', 'M', 'web', 'jpg');
                $large_logo = $logosDB->initLogos('Logo_4', 'L', 'web', 'jpg');
                $logo_title = getTitle('academic', 'Logo 4', 'JPG (web)');
                break;
            case 'Clocktower' :
                $display_logo = $logosDB->getDisplayLogo('Clocktower_D');
                $logo_thumbnail = $logosDB->getThumbnails('Clocktower', 'T');
                $small_logo = $logosDB->initLogos('Clocktower', 'S', 'web', 'jpg');
                $medium_logo = $logosDB->initLogos('Clocktower', 'M', 'web', 'jpg');
                $large_logo = $logosDB->initLogos('Clocktower', 'L', 'web', 'jpg');
                $logo_title = getTitle('academic', 'Clock Tower Logo', 'JPG (web)');
                break;
            case 'Cougar_3' :
                $display_logo = $logosDB->getDisplayLogo('Cougar_3_D');
                $logo_thumbnail = $logosDB->getThumbnails('Cougar_3', 'T');
                $small_logo = $logosDB->initLogos('Cougar_3', 'S', 'web', 'jpg');
                $medium_logo = $logosDB->initLogos('Cougar_3', 'M', 'web', 'jpg');
                $large_logo = $logosDB->initLogos('Cougar_3', 'L', 'web', 'jpg');
                $logo_title = getTitle('athletic', 'Cougar 3', 'JPG (web)');
                break;
            case 'Cougar_4' :
                $display_logo = $logosDB->getDisplayLogo('Cougar_4_D');
                $logo_thumbnail = $logosDB->getThumbnails('Cougar_4', 'T');
                $small_logo = $logosDB->initLogos('Cougar_4', 'S', 'web', 'jpg');
                $medium_logo = $logosDB->initLogos('Cougar_4', 'M', 'web', 'jpg');
                $large_logo = $logosDB->initLogos('Cougar_4', 'L', 'web', 'jpg');
                $logo_title = getTitle('athletic', 'Cougar 4', 'JPG (web)');
                break;
            case 'Cougar_Head_2' :
                $display_logo = $logosDB->getDisplayLogo('Cougar_Head_2_D');
                $logo_thumbnail = $logosDB->getThumbnails('Cougar_Head_2', 'T');
                $small_logo = $logosDB->initLogos('Cougar_Head_2', 'S', 'web', 'jpg');
                $medium_logo = $logosDB->initLogos('Cougar_Head_2', 'M', 'web', 'jpg');
                $large_logo = $logosDB->initLogos('Cougar_Head_2', 'L', 'web', 'jpg');
                $logo_title = getTitle('athletic', 'Cougar Head 2', 'JPG (web)');
                break;
        }
        $buttonStatus = 'jpg';
        include('logoBundle/logoViews/display_logos.php');
        break;
    }
    case 'png' : {
        switch($logo_name) {
            case 'Logo_1' :
                $display_logo = $logosDB->getDisplayLogo('Logo_1_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_1', 'T');
                $small_logo = $logosDB->initLogos('Logo_1', 'S', 'web', 'png');
                $medium_logo = $logosDB->initLogos('Logo_1', 'M', 'web', 'png');
                $large_logo = $logosDB->initLogos('Logo_1', 'L', 'web', 'png');
                $logo_title = getTitle('academic', 'Logo 1', 'PNG (web)');
                break;
            case 'Logo_2' :
                $display_logo = $logosDB->getDisplayLogo('Logo_2_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_2', 'T');
                $small_logo = $logosDB->initLogos('Logo_2', 'S', 'web', 'png');
                $medium_logo = $logosDB->initLogos('Logo_2', 'M', 'web', 'png');
                $large_logo = $logosDB->initLogos('Logo_2', 'L', 'web', 'png');
                $logo_title = getTitle('academic', 'Logo 2', 'PNG (web)');
                break;
            case 'Logo_3' :
                $display_logo = $logosDB->getDisplayLogo('Logo_3_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_3', 'T');
                $small_logo = $logosDB->initLogos('Logo_3', 'S', 'web', 'png');
                $medium_logo = $logosDB->initLogos('Logo_3', 'M', 'web', 'png');
                $large_logo = $logosDB->initLogos('Logo_3', 'L', 'web', 'png');
                $logo_title = getTitle('academic', 'Logo 3', 'PNG (web)');
                break;
            case 'Logo_4' :
                $display_logo = $logosDB->getDisplayLogo('Logo_4_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_4', 'T');
                $small_logo = $logosDB->initLogos('Logo_4', 'S', 'web', 'png');
                $medium_logo = $logosDB->initLogos('Logo_4', 'M', 'web', 'png');
                $large_logo = $logosDB->initLogos('Logo_4', 'L', 'web', 'png');
                $logo_title = getTitle('academic', 'Logo 4', 'PNG (web)');
                break;
            case 'Clocktower' :
                $display_logo = $logosDB->getDisplayLogo('Clocktower_D');
                $logo_thumbnail = $logosDB->getThumbnails('Clocktower', 'T');
                $small_logo = $logosDB->initLogos('Clocktower', 'S', 'web', 'png');
                $medium_logo = $logosDB->initLogos('Clocktower', 'M', 'web', 'png');
                $large_logo = $logosDB->initLogos('Clocktower', 'L', 'web', 'png');
                $logo_title = getTitle('academic', 'Clock Tower Logo', 'PNG (web)');
                break;
            case 'Cougar_3' :
                $display_logo = $logosDB->getDisplayLogo('Cougar_3_D');
                $logo_thumbnail = $logosDB->getThumbnails('Cougar_3', 'T');
                $small_logo = $logosDB->initLogos('Cougar_3', 'S', 'web', 'png');
                $medium_logo = $logosDB->initLogos('Cougar_3', 'M', 'web', 'png');
                $large_logo = $logosDB->initLogos('Cougar_3', 'L', 'web', 'png');
                $logo_title = getTitle('athletic', 'Cougar 3', 'PNG (web)');
                break;
            case 'Cougar_4' :
                $display_logo = $logosDB->getDisplayLogo('Cougar_4_D');
                $logo_thumbnail = $logosDB->getThumbnails('Cougar_4', 'T');
                $small_logo = $logosDB->initLogos('Cougar_4', 'S', 'web', 'png');
                $medium_logo = $logosDB->initLogos('Cougar_4', 'M', 'web', 'png');
                $large_logo = $logosDB->initLogos('Cougar_4', 'L', 'web', 'png');
                $logo_title = getTitle('athletic', 'Cougar 4', 'PNG (web)');
                break;
            case 'Cougar_Head_2' :
                $display_logo = $logosDB->getDisplayLogo('Cougar_Head_2_D');
                $logo_thumbnail = $logosDB->getThumbnails('Cougar_Head_2', 'T');
                $small_logo = $logosDB->initLogos('Cougar_Head_2', 'S', 'web', 'png');
                $medium_logo = $logosDB->initLogos('Cougar_Head_2', 'M', 'web', 'png');
                $large_logo = $logosDB->initLogos('Cougar_Head_2', 'L', 'web', 'png');
                $logo_title = getTitle('athletic', 'Cougar Head 2', 'PNG (web)');
                break;
        }
        $buttonStatus = 'png';
        include('logoBundle/logoViews/display_logos.php');
        break;
    }
    case 'tif' : {
        switch($logo_name) {
            case 'Logo_1' :
                $display_logo = $logosDB->getDisplayLogo('Logo_1_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_1', 'T');
                $small_logo = $logosDB->initLogos('Logo_1', 'S', 'print', 'tif');
                $medium_logo = $logosDB->initLogos('Logo_1', 'M', 'print', 'tif');
                $large_logo = $logosDB->initLogos('Logo_1', 'L', 'print', 'tif');
                $logo_title = getTitle('academic', 'Logo 1', 'TIF (print)');
                break;
            case 'Logo_2' :
                $display_logo = $logosDB->getDisplayLogo('Logo_2_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_2', 'T');
                $small_logo = $logosDB->initLogos('Logo_2', 'S', 'print', 'tif');
                $medium_logo = $logosDB->initLogos('Logo_2', 'M', 'print', 'tif');
                $large_logo = $logosDB->initLogos('Logo_2', 'L', 'print', 'tif');
                $logo_title = getTitle('academic', 'Logo 2', 'TIF (print)');
                break;
            case 'Logo_3' :
                $display_logo = $logosDB->getDisplayLogo('Logo_3_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_3', 'T');
                $small_logo = $logosDB->initLogos('Logo_3', 'S', 'print', 'tif');
                $medium_logo = $logosDB->initLogos('Logo_3', 'M', 'print', 'tif');
                $large_logo = $logosDB->initLogos('Logo_3', 'L', 'print', 'tif');
                $logo_title = getTitle('academic', 'Logo 3', 'TIF (print)');
                break;
            case 'Logo_4' :
                $display_logo = $logosDB->getDisplayLogo('Logo_4_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_4', 'T');
                $small_logo = $logosDB->initLogos('Logo_4', 'S', 'print', 'tif');
                $medium_logo = $logosDB->initLogos('Logo_4', 'M', 'print', 'tif');
                $large_logo = $logosDB->initLogos('Logo_4', 'L', 'print', 'tif');
                $logo_title = getTitle('academic', 'Logo 4', 'TIF (print)');
                break;
            case 'Clocktower' :
                $display_logo = $logosDB->getDisplayLogo('Clocktower_D');
                $logo_thumbnail = $logosDB->getThumbnails('Clocktower', 'T');
                $small_logo = $logosDB->initLogos('Clocktower', 'S', 'print', 'tif');
                $medium_logo = $logosDB->initLogos('Clocktower', 'M', 'print', 'tif');
                $large_logo = $logosDB->initLogos('Clocktower', 'L', 'print', 'tif');
                $logo_title = getTitle('academic', 'Clock Tower Logo', 'TIF (print)');
                break;
            case 'Cougar_3' :
                $display_logo = $logosDB->getDisplayLogo('Cougar_3_D');
                $logo_thumbnail = $logosDB->getThumbnails('Cougar_3', 'T');
                $small_logo = $logosDB->initLogos('Cougar_3', 'S', 'print', 'tif');
                $medium_logo = $logosDB->initLogos('Cougar_3', 'M', 'print', 'tif');
                $large_logo = $logosDB->initLogos('Cougar_3', 'L', 'print', 'tif');
                $logo_title = getTitle('athletic', 'Cougar 3', 'TIF (print)');
                break;
            case 'Cougar_4' :
                $display_logo = $logosDB->getDisplayLogo('Cougar_4_D');
                $logo_thumbnail = $logosDB->getThumbnails('Cougar_4', 'T');
                $small_logo = $logosDB->initLogos('Cougar_4', 'S', 'print', 'tif');
                $medium_logo = $logosDB->initLogos('Cougar_4', 'M', 'print', 'tif');
                $large_logo = $logosDB->initLogos('Cougar_4', 'L', 'print', 'tif');
                $logo_title = getTitle('athletic', 'Cougar 4', 'TIF (print)');
                break;
            case 'Cougar_Head_2' :
                $display_logo = $logosDB->getDisplayLogo('Cougar_Head_2_D');
                $logo_thumbnail = $logosDB->getThumbnails('Cougar_Head_2', 'T');
                $small_logo = $logosDB->initLogos('Cougar_Head_2', 'S', 'print', 'tif');
                $medium_logo = $logosDB->initLogos('Cougar_Head_2', 'M', 'print', 'tif');
                $large_logo = $logosDB->initLogos('Cougar_Head_2', 'L', 'print', 'tif');
                $logo_title = getTitle('athletic', 'Cougar Head 2', 'TIF (print)');
                break;
        }
        $buttonStatus = 'tif';
        include('logoBundle/logoViews/display_logos.php');
        break;
    }
    case 'eps' : {
        switch($logo_name) {
            case 'Logo_1' :
                $display_logo = $logosDB->getDisplayLogo('Logo_1_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_1', 'T');
                $large_logo = $logosDB->initLogos('Logo_1', 'L', 'print', 'eps');
                $logo_title = getTitle('academic', 'Logo 1', 'EPS (print)');
                break;
            case 'Logo_2' :
                $display_logo = $logosDB->getDisplayLogo('Logo_2_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_2', 'T');
                $large_logo = $logosDB->initLogos('Logo_2', 'L', 'print', 'eps');
                $logo_title = getTitle('academic', 'Logo 2', 'EPS (print)');
                break;
            case 'Logo_3' :
                $display_logo = $logosDB->getDisplayLogo('Logo_3_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_3', 'T');
                $large_logo = $logosDB->initLogos('Logo_3', 'L', 'print', 'eps');
                $logo_title = getTitle('academic', 'Logo 3', 'EPS (print)');
                break;
            case 'Logo_4' :
                $display_logo = $logosDB->getDisplayLogo('Logo_4_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_4', 'T');
                $large_logo = $logosDB->initLogos('Logo_4', 'L', 'print', 'eps');
                $logo_title = getTitle('academic', 'Logo 4', 'EPS (print)');
                break;
            case 'Clocktower' :
                $display_logo = $logosDB->getDisplayLogo('Clocktower_D');
                $logo_thumbnail = $logosDB->getThumbnails('Clocktower', 'T');
                $large_logo = $logosDB->initLogos('Clocktower', 'L', 'print', 'eps');
                $logo_title = getTitle('academic', 'Clock Tower Logo', 'EPS (print)');
                break;
            case 'Cougar_3' :
                $display_logo = $logosDB->getDisplayLogo('Cougar_3_D');
                $logo_thumbnail = $logosDB->getThumbnails('Cougar_3', 'T');
                $large_logo = $logosDB->initLogos('Cougar_3', 'L', 'print', 'eps');
                $logo_title = getTitle('athletic', 'Cougar 3', 'EPS (print)');
                break;
            case 'Cougar_4' :
                $display_logo = $logosDB->getDisplayLogo('Cougar_4_D');
                $logo_thumbnail = $logosDB->getThumbnails('Cougar_4', 'T');
                $large_logo = $logosDB->initLogos('Cougar_4', 'L', 'print', 'eps');
                $logo_title = getTitle('athletic', 'Cougar 4', 'EPS (print)');
                break;
            case 'Cougar_Head_2' :
                $display_logo = $logosDB->getDisplayLogo('Cougar_Head_2_D');
                $logo_thumbnail = $logosDB->getThumbnails('Cougar_Head_2', 'T');
                $large_logo = $logosDB->initLogos('Cougar_Head_2', 'L', 'print', 'eps');
                $logo_title = getTitle('athletic', 'Cougar Head 2', 'EPS (print)');
                break;
        }
        $buttonStatus = 'eps';
        include('logoBundle/logoViews/display_eps.php');
        break;
    }
    case 'svg' : {
        switch($logo_name) {
            case 'Logo_1' :
                $display_logo = $logosDB->getDisplayLogo('Logo_1_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_1', 'T');
                $small_logo = $logosDB->initLogos('Logo_1', 'S', 'mobile', 'svg');
                $logo_title = getTitle('academic', 'Logo 1', 'SVG (mobile)');
                break;
            case 'Logo_2' :
                $display_logo = $logosDB->getDisplayLogo('Logo_2_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_2', 'T');
                $small_logo = $logosDB->initLogos('Logo_2', 'S', 'mobile', 'svg');
                $logo_title = getTitle('academic', 'Logo 2', 'SVG (mobile)');
                break;
            case 'Logo_3' :
                $display_logo = $logosDB->getDisplayLogo('Logo_3_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_3', 'T');
                $small_logo = $logosDB->initLogos('Logo_3', 'S', 'mobile', 'svg');
                $logo_title = getTitle('academic', 'Logo 3', 'SVG (mobile)');
                break;
            case 'Logo_4' :
                $display_logo = $logosDB->getDisplayLogo('Logo_4_D');
                $logo_thumbnail = $logosDB->getThumbnails('Logo_4', 'T');
                $small_logo = $logosDB->initLogos('Logo_4', 'S', 'mobile', 'svg');
                $logo_title = getTitle('academic', 'Logo 4', 'SVG (mobile)');
                break;
            case 'Clocktower' :
                $display_logo = $logosDB->getDisplayLogo('Clocktower_D');
                $logo_thumbnail = $logosDB->getThumbnails('Clocktower', 'T');
                $small_logo = $logosDB->initLogos('Clocktower', 'S', 'mobile', 'svg');
                $logo_title = getTitle('academic', 'Clock Tower Logo', 'SVG (mobile)');
                break;
            case 'Cougar_3' :
                $display_logo = $logosDB->getDisplayLogo('Cougar_3_D');
                $logo_thumbnail = $logosDB->getThumbnails('Cougar_3', 'T');
                $small_logo = $logosDB->initLogos('Cougar_3', 'S', 'mobile', 'svg');
                $logo_title = getTitle('athletic', 'Cougar 3', 'SVG (mobile)');
                break;
            case 'Cougar_4' :
                $display_logo = $logosDB->getDisplayLogo('Cougar_4_D');
                $logo_thumbnail = $logosDB->getThumbnails('Cougar_4', 'T');
                $small_logo = $logosDB->initLogos('Cougar_4', 'S', 'mobile', 'svg');
                $logo_title = getTitle('athletic', 'Cougar 4', 'SVG (mobile)');
                break;
            case 'Cougar_Head_2' :
                $display_logo = $logosDB->getDisplayLogo('Cougar_Head_2_D');
                $logo_thumbnail = $logosDB->getThumbnails('Cougar_Head_2', 'T');
                $small_logo = $logosDB->initLogos('Cougar_Head_2', 'S', 'mobile', 'svg');
                $logo_title = getTitle('athletic', 'Cougar Head 2', 'SVG (mobile)');
                break;
        }
        $buttonStatus = 'svg';
        include('logoBundle/logoViews/display_svg.php');
        break;
    }
}

function getTitle($type, $title, $format) {
    if($type == 'academic') {
        $academic_title = "
            <div style='text-align: center; padding-bottom:6px;'>
                <h5 style='display:inline; padding-right:21px;'>\"Academic Logo\"</h5>
                <h3 style='display:inline;'>" . $title . "</h3>
                <h5 id='file_type' style='display:inline; padding-left:21px;'>Format: " . $format. "</h5>
            </div>";
        $result = $academic_title;
    }
    if($type == 'athletic') {
        $athletic_title = "
            <div style='text-align: center;  padding-bottom:6px;''>
                <h5 style='display:inline; padding-right:21px;'>\"Athletic Logo\"</h5>
                <h3 style='display:inline;'>" . $title . "</h3>
                <h5 id='file_type' style='display:inline; padding-left:21px;'>Format: " . $format. "</h5>
            </div>";
        $result = $athletic_title;
    }
    return $result;
}

?>
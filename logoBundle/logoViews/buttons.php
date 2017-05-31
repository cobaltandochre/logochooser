<?php

//require_once ('logoBundle/logoEntity/database.php');
//require_once ('logoBundle/logoEntity/logos_db.php');
require_once ('logoBundle/logoEntity/database_xml.php');
require_once ('logoBundle/logoEntity/logos_db_xml.php');
require_once ('logoBundle/logoEntity/logo.php');

$logosDB = new LogosDB();
//$spacer = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$spacer = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$logo_1 = $logosDB->getLogoButton('Logo_1', 'B');
$logo_2 = $logosDB->getLogoButton('Logo_2', 'B');
$logo_3 = $logosDB->getLogoButton('Logo_3', 'B');
$logo_4 = $logosDB->getLogoButton('Logo_4', 'B');
$logo_5 = $logosDB->getLogoButton('Clocktower', 'B');
$logo_6 = $logosDB->getLogoButton('Cougar_3', 'B');
$logo_7 = $logosDB->getLogoButton('Cougar_4', 'B');
$logo_8 = $logosDB->getLogoButton('Cougar_Head_2', 'B');

$gif = $logosDB->getTypeButton('btnGif_up', 'B');
$jpg = $logosDB->getTypeButton('btnJpg_up', 'B');
$png = $logosDB->getTypeButton('btnPng_up', 'B');
$tif = $logosDB->getTypeButton('btnTif_up', 'B');
$eps = $logosDB->getTypeButton('btnEps_up', 'B');
$svg = $logosDB->getTypeButton('btnSvg_up', 'B');

$button_group = "    
<div>
    <table>
        <tr>
            <th class='title' colspan='3'>Select Logo</th>
            <th>&nbsp;</th>
            <th class='title' colspan='3'>Select Format</th>
        </tr>
        <tr>
            <th class='subtitle'>Academic</th>
            <th class='spacer1'>&nbsp;</th>
            <th class='subtitle'>Athletic</th>
            
            <th class='spacer2'>&nbsp;</th>
            
            <th class='subtitle'>Web</th>
            <th class='spacer1'>&nbsp;</th>
            <th class='subtitle'>Print</th>
        </tr>
        <tr>
            <td id='Logo_1_td' class='buttonselected'><img id='Logo_1' name='logo_name' src='images/CSU_Logo_1_Blue_B2.png' /></td>
            <td class='spacer1'>&nbsp;</td>
            <td id='Cougar_3_td' class='button'><img id='Cougar_3' name='logo_name' src='images/CSU_Logo_Cougar_3_B.png' alt='CSU_Logo_Cougar_3_T'/></td>
            <td class='spacer2'>&nbsp;</td>
            <td id='gif_td' class='button'><img id='gif' name='logo_type' src='images/GIF_up_T.png' width='77' height='58' alt='GIF_up_T'/></td>
            <td class='spacer1'>&nbsp;</td>
            <td id='tif_td' class='button'><img id='tif' name='logo_type' src='images/TIF_up_T.png' width='77' height='58' alt='TIF_up_T' /></td>
        </tr>
        <tr>
            <td id='Logo_2_td' class='button' ><img id='Logo_2' name='logo_name' src='images/CSU_Logo_2_B.png' alt='CSU_Logo_2_T'/></td>
            <td class='spacer1'>&nbsp;</td>
            <td id='Cougar_4_td' class='button'><img id='Cougar_4' name='logo_name' src='images/CSU_Logo_Cougar_4_B.png' alt='CSU_Logo_Cougar_4_T'/></td>
            <td class='spacer2'>&nbsp;</td>
            <td id='jpg_td' class='buttonselected'><img id='jpg' name='logo_type' src='images/JPG_down_T.png' width='77' height='58' /></td>
            <td class='spacer1'>&nbsp;</td>
            <td id='eps_td' class='button'><img id='eps' name='logo_type' src='images/EPS_up_T.png' width='77' height='58' /></td>
        </tr>
        <tr>
            <td id='Logo_3_td' class='button'><img id='Logo_3' name='logo_name' src='images/CSU_Logo_3_B.png' alt='CSU_Logo_3_T'/></td>
            <td class='spacer1'>&nbsp;</td>
            <td id='Cougar_Head_2_td' class='button'><img id='Cougar_Head_2' name='logo_name' src='images/CSU_Logo_Cougar_Head_2_B.png' alt='CSU_Logo_Cougar_Head_2_T'/></td>
            <td class='spacer2'>&nbsp;</td>
            <td id='png_td' class='button'><img id='png' name='logo_type' src='images/PNG_up_T.png' width='77' height='58'/></td>
        </tr>
        <tr>
            <td id='Logo_4_td' class='button'><img id='Logo_4' name='logo_name' src='images/CSU_Logo_4_B.png' alt='CSU_Logo_4_T'/></td>
        </tr>
        <tr>
            <td id='Clocktower_td' class='button'><img id='Clocktower' name='logo_name' src='images/CSU_Logo_Clocktower_B.png' alt='CSU_Logo_Clocktower_T'/></td>
        </tr>
    </table>
</div>";
?>

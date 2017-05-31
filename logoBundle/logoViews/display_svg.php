<?php
/*
 *  generates and displays the logos form
 *  allows client to view and select a logo file
 *  for downloading to the client's machine.
 * 
 *  Author: Richard Hodges
 *          Graphics Specialist
 *          University Relations
 *          Columbus State University
 *  9/22/2012
 */
?>
<link rel="stylesheet" type="text/css" href="css/styles.css"/>
<script type="text/javascript" src="js/events.js"></script>
<!-- begin logos app -->
<div id="logos">
<?php echo $logo_title; ?>
<div>
    <form action="." method="post">
    <table>
        <tr id="display">
            <?php foreach($display_logo as $display) : ?>
            <td class="display" colspan="6">
                <img src="<?php echo $display->getFileName(); ?>" alt="<?php echo $display->getName(); ?>" />
                <p id="display_desc">shown is medium(Med) web version, full color on white background<br />click on a label below to download file</p>
            </td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach($logo_thumbnail as $logo) : ?>
            <td class="grid" style="background-color:<?php echo $logo->getBkgd(); ?>">
                <img src="<?php echo $logo->getFileName(); ?>" name="mouseover_table" id="<?php echo $logo->getID(); ?>" />
            </td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach($small_logo as $logo) : ?>
            <td id="hitarea" class="grid">
                <a href="<?php echo $logo->getZip(); ?>" name="mouseover_table" id="<?php echo $logo->getID(); ?>">
                    <?php echo $spacer.$logo->getSize().$spacer; ?>
                </a>
            </td>
            <?php endforeach; ?>
        </tr>
        <tr><td span="6">&nbsp;</td></tr>
    </table>
    </form>
</div>
</div><!-- end logos app -->
<p id="display_desc">1) Select an option from Academic or Athletic logos<br />2) Choose a file format from Web or Print format options</p>
<?php echo $button_group; ?>
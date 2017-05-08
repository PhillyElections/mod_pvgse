<?php
//no direct access
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

$db = &JFactory::getDatabase();
$document = &JFactory::getDocument();

$document->addScript('https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js');
$document->addStylesheet('https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js');

$document->addScript('https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js');
$document->addStylesheet(JURI::root() . 'modules/mod_pvgse/style.css');
 
$document->addScript('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
 
$document->addScript(JURI::root() . 'modules/mod_pvgse/autocomplete.html.js');
$document->addScript(JURI::root() . 'modules/mod_pvgse/autocomplete.js');
 
?>
<gcse:search></gcse:search>

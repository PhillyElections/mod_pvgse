<?php
//no direct access
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

$document = &JFactory::getDocument();
$document->addCustomTag("
<script>
  (function() {
    var cx = '016071154641257902610:5dgpa5ppyfq';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>");
?>
<gcse:search></gcse:search>

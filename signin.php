<?php
// Include the classes.php file
require_once 'ClassAutoLoad.php';
$layout->header($conf);
//call the todayDate method
print $greeting->todayDate();
$form->login();
$layout->footer($conf);
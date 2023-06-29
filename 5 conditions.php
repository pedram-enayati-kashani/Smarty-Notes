<h1>Conditions</h1>
<?php
include('./smarty/libs/Smarty.class.php');

// create object
$smarty = new Smarty;


$smarty->assign("name" , "Ali");
$smarty->assign("wheater" , "rain");
$smarty->assign("animal" , "bird");

// display it
$smarty->display('5 conditions.tpl');

?>

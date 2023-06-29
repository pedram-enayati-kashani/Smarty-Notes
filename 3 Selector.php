<h1>Assostric array</h1>
<?php
include('./smarty/libs/Smarty.class.php');

// create object
$smarty = new Smarty;

$smarty->assign('id', array(1,2,3,4,5));
$smarty->assign('names', array('bob','jim','joe','jerry','fred'));
$smarty->assign("fruts", array("apple" , "orange" , "cucumber", "tomato" , "potato"));
$smarty->assign("languages", array("English" , "France" , "Germany" , "Chines" , "Arabic"));
$smarty->assign("code" , array("javascript" , "C++" , "python" , "php" , "Mysql" , "Git" ));
// display it
$smarty->display('3 Selector.tpl');

?>

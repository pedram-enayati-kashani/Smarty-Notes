<h1>Assostric array</h1>
<?php
include('./smarty/libs/Smarty.class.php');

// create object
$smarty = new Smarty;



$smarty->assign("me" , array("fax" => "55-222-3343", 
"email" => "Example@gmail.com" , "phone" => array(
    "home" => "458 458 524",
    "client" => "897 5896 996",
)));
$smarty->assign("firend" , array(
    "fax" => "584 268 584",
    "email" => "AlexBefeo33@gmail.com",
    "phone" => array(
        "home" => "584 248 545",
        "friend" => "695 547 154",
    )
));
$smarty->assign("father" , array(
    "fax" => "58 257 562",
    "email" => "Example@gmail.com",
    "phone" => array(
        "home" => "584 255 256",
        "father" => "594 562 159",
    )
));

// display it
$smarty->display('2 assostric Array.tpl');

?>

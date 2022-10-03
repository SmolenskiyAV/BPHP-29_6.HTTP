<?php
// ### PAGE 3 ###

// start a session
session_start();

echo 'It`s page 3 <br />';

$_SESSION['count'] = isset($_SESSION['count']) ?
++$_SESSION['count'] : 0;
    
echo 'Количество открытий страницы: ' .
$_SESSION['count'];

$localCount = $_SESSION['count'];

if ($localCount % 3 == 0) {

    $_SESSION['page3_has_opened'] = $localCount;  // initialize session variable
    header('Location: http://localhost:8000/page4.php');
}
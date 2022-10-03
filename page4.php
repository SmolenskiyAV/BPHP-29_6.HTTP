<?php
// ### PAGE 4 ###

// start a session
session_start();

echo 'It`s page 4 <br />';

echo 'Количество открытий страницы 3: ' . $_SESSION['page3_has_opened'];  // access session variable
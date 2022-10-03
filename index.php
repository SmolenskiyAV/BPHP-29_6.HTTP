<?php
echo '<!DOCTYPE html>';

$txt = "It`s_page_2._Downloading_file_at_localhost.";

echo 'I`m a web server <br />';

echo '<a href="/page1.php">Страница 1</a>' . '<br />';

echo "<a href=/page2.php?text=$txt'>Страница 2</a>" . '<br />';

echo '<a href="/page3.php">Страница 3</a>' . '<br />';

echo '<a href="/page4.php">Страница 4</a>' . '<br />';

<?php
setcookie('cookie1', 'datos de la cokkie1...', time(), + 3600);
setcookie('cookie2', 'datos de la cokkie2...', time(), + 3600);

echo $_COOKIE['cookie1'];
echo '<br/>';
echo $_COOKIE['cookie2'];


?>
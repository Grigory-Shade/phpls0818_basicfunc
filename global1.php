<?php
session_start();
$_SESSION['login'] = 'arku';
$_SESSION['password'] = '123';
?>
<a href="/global2.php?key=value">Link</a>

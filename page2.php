<?php
// page2.php

session_start();

echo 'Welcome to page #2<br />';

echo $_SESSION['favcolor']; // green
echo $_SESSION['animal'];   // cat
echo date('Y m d H:i:s', $_SESSION['time']);

// 类似 page1.php 中的代码，你可能需要在这里处理使用 SID 的场景
echo '<br /><a href="page1.php">page 1</a>';
?>
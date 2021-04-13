<?php
////Resume session
session_start();
$_SESSION['favfood'] = "Apple";
echo "Hello ".$_SESSION['Username']." To room 4 <br>";
echo "<a href='page5.php'>Go to page5</a>";




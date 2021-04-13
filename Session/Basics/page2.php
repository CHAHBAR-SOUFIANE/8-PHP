<?php
////Resum session
session_start();
echo "Hello ".$_SESSION['Username']." welcom to page2";
echo "<a href='page3.php'>Go to page3</a>";
echo "<br>your favorit food is ".$_SESSION['favfood'];

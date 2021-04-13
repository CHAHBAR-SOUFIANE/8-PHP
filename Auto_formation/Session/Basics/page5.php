<?php
////Resume session
session_start();

echo "Hello ".$_SESSION['Username']." To room 5 <br>";
echo "Your Favorite food is now".$_SESSION['favfood'];
echo "<br><a href='logout.php'>Go to Logout page</a>";




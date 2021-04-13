<?php
session_start();
echo "Hello ". $_SESSION['name']."<br>";
require_once "counter.php";
echo "<a href='index.php'>Home</a>";
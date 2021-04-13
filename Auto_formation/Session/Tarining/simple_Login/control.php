<?php
session_start();
////Check if session user set
if (isset($_SESSION['user'])) {
    echo "Welcom <b>".$_SESSION['user']." </b>you are on the control panel page";
}else {
    echo "You are not permitted to see this Page";
}

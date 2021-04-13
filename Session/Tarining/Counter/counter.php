<?php
if (empty($_SESSION["count"])) {
    $_SESSION["count"] = 1;
}else {
    $_SESSION["count"]++;
}

echo "You visited this page ".$_SESSION["count"] ." times <br>";















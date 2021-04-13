<?php
////Resume session
session_start();

print_r($_SESSION);

////releases all the variables in the current sessions
session_unset();

print_r($_SESSION);

////destroys all of the data associated with the current session
session_destroy();



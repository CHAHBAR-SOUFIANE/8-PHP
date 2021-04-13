<?php
session_start();
ob_start();
////declare array of admins
$admins = array("Ahmad","jawad","Najwa","Hanan");

////check if data came with POST methode
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $user = $_POST['userName'];

////check if user in array    
   if (in_array($user,$admins)) {
      $_SESSION['user']=$user;

      echo "Welcom <b>".$_SESSION['user']."</b> you are admin you will be redirected to control panel in 5 second" ;
    // //  Redirect user to control panel
      header( "refresh:5;url=control.php" ); 
     }else {
       echo "You are not admin you will be redirected to Home page in 5 second";
       header( "refresh:5;url=index.php" );   
}

}else {
    echo "You can't browes this page";
      
}
ob_end_flush();
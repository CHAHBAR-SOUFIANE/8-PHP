<?php
// echo "<h1> Hello world </h1> <br>";
////Ep 84==>86 
////cookies must be sent before any output from your script including <html> and <head> tags as well as any whitespace.
////setcookie(name,value,expires,path,domain,secure,httponly)
// setcookie("testCookie","test",time()+3600,"/");
// ////check if cookie is Enabled
// if(count($_COOKIE)>0){
//     echo "Cookie is enabled <br>";
// }else {
//     echo "the cookie not enabled<br>";
// }
// print_r($_COOKIE);
//setcookie("testAllSet","test2",time()+3600,"/","localhost",true,true);

////Training ==> change background color and save the change to cookies
$mainColor = "#FFF";
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $mainColor = $_POST['color'];
    setcookie("Background",$mainColor,time()+3600,
    '/');
}
if (isset($_COOKIE['Background'])) {
    $body = $_COOKIE['Background'];
}else {
    $body = $mainColor;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>background color with cookies</title>
</head>
<body style="background-color:<?php echo $body; ?>">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <input type="color" name="color">
    <input type="submit" value="Click">    
    
    </form>
</body>
</html>



















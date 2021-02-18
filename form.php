<?php


if(isset($_POST['submit'])) {
 
  $name = array("baron", "dad", "diannna", "mom", "get a job", "ok", "earn money", "what job");
  $minimun = 5;  
  $maximun = 10;  
$username = $_POST['username'];
$password = $_POST['password'];

if(strlen($username) < $minimun){
   
    echo "Username has to be longer than 5";
   
   
}
   
if(strlen($username) > $maximun){
   
    echo "Username cannot be longer than 10";
   
   
}
    
 if(in_array($username, $name)) {
    
     echo "sorry you are not allowed";
 } else {
     
    echo "Welcome";
     
     
 }
   
   
   
   
   
   
   
//echo "Hello " .$username;
//echo " your password is " .$password;



}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="form.php" method="post">
   
   
<input type="text" name="username"placeholder="Enter Username">
<input type="password" name="password" placeholder="Enter Password"><br>
<input type="submit" name="submit">
</form>
   
</body>
</html>
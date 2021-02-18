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
    
 if(!in_array($username, $name)) {
    
     echo " sorry you are not allowed";
 } else {
     
    echo " Welcome";
     
     
 }
   
   
   
   
   
   
   
//echo "Hello " .$username;
//echo " your password is " .$password;



}

?>

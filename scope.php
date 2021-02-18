<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    
$x = "outside"; // global
global $x;
function convert(){
    $x = "inside"; // local
    global $x;
    echo $x;
    echo "<br";
    
    convert();
    echo $x;
    echo $x;
    
    
}
    

    
?>
    
</body>
</html>
<?php 
//include 'classes/test.class.php';
include 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
        <title> My page </title>
</head>
<body>
    <h1> Hello </h1>
<?php

$testObj = new Test();
$testObj->getUsers();

?>
</body>
</html>
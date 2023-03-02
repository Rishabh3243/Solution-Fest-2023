<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUSHIVE</title>
</head>
<body>
    <?php
    include("config.php");
    include("firebase.php");
    $db=new firebaseRDB($databaseURL)
    ?>
    <?php  include_once 'Nav/Nav.html' ;?> 
</body>
</html>
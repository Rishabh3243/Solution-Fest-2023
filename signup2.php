<?php
    include("config.php");
    include("firebaseRDB.php");

    $db = new firebaseRDB($databaseURL);
    $pass=md5($_POST['pass']);
    $insert = $db->insert("users", [
        "fname" => $_POST['fname'],
        "lname" => $_POST['lname'],
        "email" => $_POST['email'],
        "password" => $pass
    ]);

    if($insert)
    {
        echo"
        <script>
            alert('Registered Successfully...');
            window.location.href='login.html';
        </script>";
    }
    else
    {
        alert("Not Registered Successfully...");
    }
?>
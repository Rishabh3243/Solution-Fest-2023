<?php
    include("config.php");
    include("firebaseRDB.php");

    $db = new firebaseRDB($databaseURL);
    $filename = $_FILES["uploadPhoto"]["name"];
    $tempname = $_FILES["uploadPhoto"]["tmp_name"];    
    $folder = "uploads_images/";
    $pass=md5($_POST['pass']);
    $insert = $db->insert("users", [
        "fname" => $_POST['fname'],
        "lname" => $_POST['lname'],
        "email" => $_POST['email'],
        "password" => $pass,
        "type" => $_POST['typeinstall'],
        "photo" => $filename
    ]);

    if($insert)
    {
        if (move_uploaded_file($tempname, $folder.$filename))
        {
        ?>
        <script>
            alert("Registered Successfully...");
            window.location.href="login.html";
        </script>
        <?php
        }
    }
    else
    {
        alert("Not Registered Successfully...");
    }
?>
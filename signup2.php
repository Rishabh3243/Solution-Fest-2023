<?php
    include("config.php");
    include("firebaseRDB.php");

    $db = new firebaseRDB($databaseURL);
    $pass=md5($_POST['pass']);
    $insert = $db->insert("users", [
        "fname" => $_POST['fname'],
        "lname" => $_POST['lname'],
        "email" => $_POST['email'],
        "password" => $pass,
        "type" => $_POST['typeinstall'],]);

    if($insert)
    {
        ?>
        <script>
            alert("Registered Successfully...");
            window.location.href="login.html";
        </script>
        <?php
    }
    else
    {
        alert("Not Registered Successfully...");
    }
?>
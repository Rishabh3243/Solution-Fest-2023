<?php
    if(isset($_POST['btnSubmit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mail = $_POST['email'];
        $msg = $_POST['msg'];

        include("config.php");
        include("firebaseRDB.php");

        $db = new firebaseRDB($databaseURL);
        $insert = $db->insert("queries", [
            "fname" => $fname,
            "lname" => $lname,
            "email" => $mail,
            "message" => $msg,]);

        if($insert)
        {
            ?>
            <script>
                alert("Your request has been submitted. We will get back to you soon...");
                window.location.href="index.html";
            </script>
            <?php
        }
        else
        {
            alert("Something went wrong...");
        }
    }
?>
<?php
session_start();
    if(isset($_POST['btnSubmit']))
    {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $flag=1;
        if($email!="" and $pass!="")
        {
            $pass=md5($_POST['pass']);
            include("config.php");
            include("firebaseRDB.php");
            $db = new firebaseRDB($databaseURL);
            $data = $db->retrieve("users");
            $data = json_decode($data, 1);

            foreach($data as $user)
            {
                if($user['password']==$pass)
                {
                    $_SESSION['userName']=$email;
                    $flag=0;
                    ?>
                <script>
                    alert("Login Successfully...");
                    window.location.href="Dash/index.html";
                </script>
                <?php
                }
            }
            if($flag)
            {
            ?>
                <script>
                alert("User Not Found...");
                window.location.href="login.html";
            </script>
            <?php
            }
        }
        else
        {
            ?>
            <script>
                alert("Password can't be empty...");
                window.location.href="login.html";
            </script>
            <?php
        }
    }
?>
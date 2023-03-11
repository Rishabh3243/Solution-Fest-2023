<?php
    if(isset($_POST['btnSubmit']))
    {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
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
                    ?>
                <script>
                    alert("Login Successfully...");
                    window.location.href="Dash/index.html";
                </script>
                <?php
                }
                else
                {
                    ?>
                <script>
                    alert("User Not Found...");
                </script>
                <?php
                }
            }
        }
        else
        {
            ?>
            <script>
                alert("Password can't be empty...");
            </script>
            <?php
        }
    }
?>
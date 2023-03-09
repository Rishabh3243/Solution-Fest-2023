<!Doctype html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="login.css" rel="stylesheet">
    </head>
    <body>
        <!-- Section: Design Block -->
        <section class="lg-section">
            <span class="text-center container">
            <div class="card mx-3 mx-md-5 shadow-lg">
            <div class="card-body py-3 px-2" >
        
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <h2>Sign in</h2>
                        <form action="" method="post">               
            
                        <!-- Email input -->
                        <div class="outline">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
            
                        <!-- Password input -->
                        <div class="outline">
                            <label class="form-label" for="pwd">Password</label>
                            <input type="password" name="pass" class="form-control" required>
                        </div>
            
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-success btn-block mb-4" name="btnSubmit">
                            Login
                        </button>
                        <p >Don't have an account? <a href="signup.php" style="text-decoration: none;">Register</a></p>                     

                    </div> 
                </div>
                </form>
                </div>
                </div>
            </div>
            </div>
            </span>
        </section>
        <!-- Section: Design Block -->
    </body>
</html>
<?php
    if(isset($_POST['btnSubmit']))
    {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        if($email!="" and $pass!="")
        {
            $pass=md5($_POST['pass']);
            include("DB/config.php");
            include("DB/firebaseRDB.php");
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
<!doctype html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Validation -->
        <script type="text/javascript">
            function validate()
            {
                let user=document.getElementById("email").value;
                let f_name=document.getElementById("fname").value;
                let l_name=document.getElementById("lname").value;
                let pw1=document.getElementById("pwd1").value;
                let pw2=document.getElementById("pwd2").value;
                let scl=document.getElementById("scale").value;
                var remail= /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;
                var refname= /^[A-Za-z]+$/;
                var relname= /^[A-za-z]+$/;
                if(!refname.test(f_name))
                {
                    window.alert("First Name must contain only alphabets.");
                    document.signup.fname.focus();
                    return false;
                }
                else if(!relname.test(l_name))
                {
                    window.alert("Last Name must contain only alphabets.");
                    document.signup.lname.focus();
                    return false;
                }
                else if(!remail.test(user))
                {
                    window.alert("Email-Id is incorrect.");
                    document.signup.email.focus();
                    return false;
                }
                else if(pw1!=pw2)
                {
                    window.alert("Verify your password.");
                    document.signup.pwd2.focus();
                    return false;
                }
                else if(scl=="Type of installation:")
                {
                    window.alert("Please select type of installation.");
                    document.signup.scl.focus();
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <body style="background-color: rgb(243, 242, 242);">
        <!-- Section: Design Block -->
        <section class="lg-section mt-5">
            <span class="container">
            <div class="card shadow-lg" style="margin-right: 100px; margin-left:100px; border-radius:1rem;">
            <div class="card-body py-3 px-2" >
        
                <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <h2 class="text-center font-weight-bold mb-3">Register Yourself</h2>
                    <p style="color: rgba(0, 0, 0, 0.5); text-align: center;">A step towards new change, better change.</p>
                    <hr />
                    <form name="signup" method="post" onSubmit="return validate()" action="">       
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" id="fname" name="fname" placeholder="First Name" class="form-control" required />
                            </div>
                            </div>
                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" id="lname" placeholder="Last Name" class="form-control" required />
                            </div>
                            </div>
                        </div>

                    <!-- Email input -->
                    <div class="mb-4">
                        <input type="email" id="email" name="email" placeholder="Email Address" class="form-control" required />
                    </div>
        
                    <!-- Password input -->
                    <div class="mb-4">
                        <input type="password" id="pwd1" name="pass" placeholder="Password" class="form-control" required />
                    </div>

                     <!-- Password Confirmation -->
                     <div class="mb-4">
                        <input type="password" id="pwd2" name="conpass" placeholder="Confirm Password" class="form-control" required />
                    </div>

                    <!-- Installation Type -->
                        <p class="text-danger mb-1">*Required</p>
                        <select class="form-control" id="scale" name="typeinstall">
                            <option value="Type of installation">Type of installation</option>
                            <option value="Small Scale"> Small Scale</option>
                            <option value="Medium Scale"> Medium Scale</option>                                                      
                            <option value="Large Scale"> Large Scale</option>
                        </select>
        
                    
        
                    <!-- Submit button -->
                    <div class="container text-center">
                    <div class="row mb-4 mt-3">
                    <div class="col mx-auto">
                    <input type="submit" name="btnRegister" class="btn btn-success btn-block mb-2" value="Sign Up" />
                      
                    
                    <input type="reset" class="btn btn-success btn-block mb-2 mx-3" value="Reset" />

                    </div>
                    </div>
                    <p >Already have an account? <a href="login.php" style="text-decoration: none;">Login</a></p>                     
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

    if(isset($_POST['btnRegister']))
    {
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
                window.location.href="login.php";
            </script>
            <?php
        }
        else
        {
            alert("Not Registered Successfully...");
        }
    }
?>
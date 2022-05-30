<?php
    session_start();
    $title = 'Login';
    $includeLoginCss ='';
    include "includes/header.inc.php"; 

?>



<div class="container">
        <div class="text-center">
            <img src="themes/image/logoB.png" alt="e-marrakech">
        </div>
        <div class="rows">
            <div class="image-box">
                <img src="themes/image/login/login.gif" alt="login book">    
            </div>
            <form action="" method="POST">
                <div class="infor">
                    <!-- <div class="email"> -->
                        <label for="email">Your Email</label>
                        <input type="email" name="email" id="email" required>
                    <!-- </div> -->
                    <!-- <div class="pass"> -->
                        <label for="pass">Your Password</label>
                        <input type="password" name="pass" id="pass" required>
                    <!-- </div> -->
                    </div>
                    <div class="fob">
                        <a href="forget.php">Forget Password ?</a>
                        <input type="submit" name="go" value="LOGIN">
                    </div>
                    <div class="create">
                        Don't have account ? <span><a href="registre.php">Create one now</a></span>
                    </div>
            </form>
        </div>
    </div>



<?php
        include "includes/footer.inc.php"; 
?>
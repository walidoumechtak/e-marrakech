<?php
    session_start();
    $title = 'Registre';
    $includeregistreCss ='';
    include "includes/header.inc.php"; 

?>



<div class="container">
    <div class="cont">
        <div class="rows">
        <div class="title"><img class="mb-2" src="themes/image/logoB.png" alt="e-marrakech"></div>
    <form action="">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Fullname :</span>
                <input type="text" name="fullname">
            </div>
            <div class="input-box">
                <span class="details">Username :</span>
                <input type="text" name="username">
            </div>
            <div class="input-box">
                <span class="details">Email :</span>
                <input type="email" name="email">
            </div>
            <div class="input-box">
                <span class="details" id="me">You are a :</span> <br>
                <select name="type">
                    <option value="student">student</option>
                    <option value="teacher">teacher</option>
                </select>
            </div>
            <div class="input-box">
                <span class="details">Password :</span>
                <input type="passowrd" name="pass">
            </div>
            <div class="input-box">
                <span class="details">retype password :</span>
                <input type="password" name="rpass">
            </div>
        </div>
        <div class="buttons">
            <span>Already have account ? <a href="login.php">Login</a></span>
            <input type="submit" value="REGISTER" name="reg">
        </div>
    </form>
    </div>
    </div>
</div>


<?php
        include "includes/footer.inc.php"; 
?>
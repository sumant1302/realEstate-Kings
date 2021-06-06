<?php
include 'main.php';
$lemail = $lpassword = $lmobile = "";
$lemail_err = $lpass_err = $lmobile_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['l-email'])) {
        //if(filter_var(trim($_POST['l-email']), FILTER_VALIDATE_EMAIL)){
        $lemail = trim($_POST['l-email']);
    } else {
        $lemail_err = "Please enter a valid email";
    }
    //}

    if (isset($_POST['l-password'])) {
        $lpassword = trim($_POST['l-password']);
        //echo $lpassword;
    }

    if (empty($lemail_err)) {
        $sql = "SELECT UserID, Name, Email, Password FROM basicreglogin WHERE Email=? OR Contact=?";
        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_mobile);
        $param_email = $lemail;
        $param_mobile = $lemail;

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id, $name, $lemail, $hashed_password);
                if (mysqli_stmt_fetch($stmt)) {

                    if (password_verify($lpassword, $hashed_password)) {
                        session_start();
                        $_SESSION["name"] = $name;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;
                        $secondsWait = 0;
                        header("Refresh:$secondsWait");
                        //header("location: login-reg.php");
                    } else {
                        $_SESSION["loggedin"] = false;
                        echo "<script>alert('Access denied! Please check your login credentials')</script>";
                    }
                }
            }
        }
    }
}


?>
<!--
<div class="log-modal-buttons" style="width: 100%; display: inline-flex; align-items: center; justify-content: center;">
						<div class="log-reg-buttons" style="width: 80%; display: inline-flex;">
						<button id="modal-login-button" style="background-color:green;">Login</button>
				  <button id="modal-reg-button" style="background-color: red;">Register</button>
				  	</div>
					</div>

				  <div class="login-form card">
					<form class="login" action="" method="post">
				<div class="image">
				  <img src="images/img_avatar.png" alt="avatar" class="avatar">
				</div>
			
				<div class="contain">
				  <label for="l-email">Email</label>
				  <input type="email" id="l-email" name="l-email" placeholder="Enter Your Email" autofocus required>
				  <div class="reg-form-error"><?php echo $lemail_err; ?></div>
			  	
				  <label for="psw">Password</label>
				  <input type="password" id="l-password" name="l-password" placeholder="Enter Password" required>
				  <div class="reg-form-error"><?php echo $lpass_err; ?></div>
				  
				  <input type="checkbox" checked="checked" name="remember">Remember me</label>

				  <button type="submit" class="submit">Login</button>
				  <label>
				</div>
			
				<div class="contain" style="background-color: #f1f1f1">
				  <span class="psw"><a href="#">Forgot Password?</a></span>
				</div>
				</form>
				</div>-->
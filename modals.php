<?php
include 'main.php';
//include 'login.php';
//error_reporting(0);
session_start();
$name = $email = $mobile = $password = $confirm_password = $msg = "";
$name_error = $email_error = $mobile_error = $password_error = $confirm_password_error = "";
$p_email = $p_mobile = $p_password = $p_confirm_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['login'])) {
		require 'login.php';
	} elseif (isset($_POST['register'])) {
		require 'register.php';
	} else if (isset($_POST['enquiry'])) {
		require 'enquire.php';
	}
}

?>


<div id="myModal" class="modal card">

	<!-- Modal content1-Login-->
	<div class="modal-content">
		<span class="close">&times;</span>

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
					<div class="reg-form-error"><?php //echo $lemail_err; 
												?></div>

					<label for="psw">Password</label>
					<input type="password" id="l-password" name="l-password" placeholder="Enter Password" minlength="8" maxlength="16" required>
					<div class="reg-form-error"><?php //echo $lpass_err; 
												?></div>

					<input type="checkbox" checked="checked" name="remember">Remember Me</label>

					<button type="submit" class="submit" name="login">Login</button>
					<label>
				</div>

				<div class="contain" style="background-color: #f1f1f1">
					<span class="psw"><a href="#">Forgot Password?</a></span>
				</div>
			</form>
		</div>
		<div class="reg-form card" style="display: none;">

			<form name="basic-reg-form" action="" class="reg" method="post">
				<!--<div class="image">
							<img src="images/img_avatar.png" alt="avatar" class="avatar">
						  </div>-->
				<div>
					<?php echo $msg; ?>
				</div>
				<div>
					<label for="r-name">Name: <span class="req-ast">*</span></label>
					<input type="text" name="r-name" id="r-name" value="<?php $_SESSION['r-name']; ?>" required>
				</div>
				<div class="reg-form-error"><?php echo $name_error; ?></div>
				<div>
					<label for="r-email">Email:<span class="req-ast">*</span></label>
					<input type="email" name="r-email" id="r-email" value="<?php $_SESSION['r-email']; ?>" required>
				</div>
				<div class="reg-form-error"><?php echo $email_error; ?></div>
				<div>
					<label for="mobile">Mobile Number:<span class="req-ast">*</span></label>
					<input type="tel" name="r-mobile" id="r-mobile" value="<?php $_SESSION['r-mobile']; ?>" required>
				</div>
				<div class="reg-form-error"><?php echo $mobile_error; ?></div>
				<div>
					<label for="pass">Password:<span class="req-ast">*</span></label>
					<input type="password" name="pass" id="pass" value="<?php $_SESSION['pass']; ?>" required>
				</div>
				<div class="reg-form-error"><?php echo $password_error; ?></div>
				<div>
					<label for="c-pass">Confirm Password:<span class="req-ast">*</span></label>
					<input type="password" name="c-pass" id="c-pass" value="<?php $_SESSION['c-pass']; ?>">
				</div>
				<div class="reg-form-error"><?php echo $confirm_password_error; ?></div>
				<button type="submit" class="submit" name="register">Register</button>
			</form>
		</div>
	</div>
	<style>
		span.req-ast {
			color: red;
		}

		div.reg-form-error {
			font-size: smaller;
			color: red;
		}

		div.log-modal-buttons {
			margin-bottom: 10px;
		}

		.log-reg-buttons button {
			text-align: center;
			cursor: pointer;
			width: 50%;
			line-height: 30px;
			border: none;
			border-radius: 15px 0px 0px 15px;
			font-size: medium;
			color: rgb(238, 234, 12);
		}

		button#modal-reg-button {
			border-radius: 0px 15px 15px 0px;
		}

		form.reg {
			text-align: left;
			align-self: center;
			font-family: Arial, Helvetica, sans-serif;
			position: relative;
			align-self: center;
			width: 400px;
			max-width: 100%;
			margin: auto;
		}

		form.reg input[type=text],
		form.reg input[type=password],
		form.reg input[type=tel],
		form.reg input[type=email] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}

		button[name=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			cursor: pointer;
			width: 100%;
		}

		button:hover {
			opacity: 0.8;
		}
	</style>
	<script>
		var log = document.querySelector(".login-form");
		var reg = document.querySelector(".reg-form");
		var logb = document.querySelector("#modal-login-button");
		var regb = document.querySelector("#modal-reg-button");


		function logForm() {
			modal.style.display = "block";
		}
		logb.onclick = function() {
			log.style.display = "block";
			reg.style.display = "none";
			logb.style.backgroundColor = "green";
			regb.style.backgroundColor = "red";
		}
		regb.onclick = function() {
			log.style.display = "none";
			reg.style.display = "block";
			logb.style.backgroundColor = "red";
			regb.style.backgroundColor = "green";
		}
	</script>

</div>

<div id="myModal2" class="modal2">

	<!-- Modal content2 -->
	<div class="modal-content2">
		<span class="close2">&times;</span>
		<form name="enquiry-form" action="" method="post">
			<div class="contain">
				<div class="contact-seller-form card" style="width:100%; padding: 0 2%; margin: 1% 0; background-color: white;">
					<p><b style="font: 90%;">Please Share your contact</b></p>
					<form action="">
						<input type="text" name="e-name" placeholder="Name" require>
						<input type="tel" name="e-mobile" placeholder="Phone" require>
						<input type="email" name="e-email" placeholder="Email" require>
						<p><b style="font: 90%;">You are looking for</b></p>
						<select class="property-type" name="property-type" id="property-type">
							<option>Residential-1 BHK</option>
							<option>Residential-2 BHK</option>
							<option>Residential-3 BHK</option>
							<option>Bungalow</option>
							<option>Office</option>
							<option>Commercial</option>
							<option>Parking</option>
							<option>Industrial</option>
						</select>

						<textarea name="enquiry-msg" id="query" cols="30" rows="5" placeholder="Enter your Query"></textarea><br>
						<input type="checkbox" id="check1" checked required>I agree to be contacted by RealeStateKings and other agents via WhatsApp, SMS, phone, email etc
						<br>
						<input type="checkbox" id="check2" checked>I am interested in home loans

						<br>
						<input type="submit" name="enquiry" id="submit" value="SUBMIT">

					</form>
				</div>
			</div>


		</form>
	</div>
</div>

<div id="myModal3" class="modal3">

	<!-- Modal content 3 -->
	<div class="modal-content3">
		<span class="close3">&times;</span>
		<nav>
			<ul>
				<li><a href="Home.htm" class="active">Home</a>
				<li><a href="about.htm">About Us</a>
				<li><a href="buy-property.htm">Properties
						<span class="material-icons drop-down" style="position: absolute; top: 15%;">
							arrow_drop_down
						</span>
						<span class="material-icons drop-up" style="position: absolute; top: 15%;">
							arrow_drop_up
						</span></a>
					<ul>
						<li><a href="buy-property.htm">Buy/Rent</a>
						<li><a href="list-property.htm">Sell</a>
					</ul>
				<li><a href="media.htm">Media</a>
				<li><a href="blog.htm">Blog</a>
				<li><a href="contact.htm">Contact Us</a>
			</ul>
		</nav>
	</div>

</div>
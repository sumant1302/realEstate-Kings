<?php
/*include 'main.php';
//include 'login.php';
error_reporting(0);
session_start();
$name=$email=$mobile=$password=$confirm_password=$msg="";
$name_error=$email_error=$mobile_error=$password_error=$confirm_password_error="";
$p_email=$p_mobile=$p_password=$p_confirm_password="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(isset($_POST['login'])){
		require 'login.php';
	}
	elseif(isset($_POST['register'])){
		require 'register.php';
}
	else if(isset($_POST['enquiry'])){
		require 'enquire.php';
}
}

mysqli_close($conn);*/
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="real, estate, rpoperties, patna, bihar, buy, rent, house, apartments,room, sell, property">
	<title>Home|RSK</title>
	<link rel="stylesheet" type="text/css" href="rsk-web.css">
	<link rel="icon" type="image/png" href="images/rsk-icon.png"/>	
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

<?php
	include 'header.php';
	include 'modals.php';	
?>	  
	<style>
		form.login input[type="email"]{
						width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		
					}
		
		.home-page{
	background: #7fff00;
	width: 100%;
	height: 100%;
    }

	</style>
	
	<div class="home-top" style="display: inline-flex; align-items: center; justify-content: center;">
		<div class="home-top-center" style="width: 80%;">
		<div class="top-up" style="display: block;">
			<h1 style="text-align: center;"><span style="color: white; background-color:rgb(3, 2, 2,0.6);padding: 1%;">RealeStateKings</span>.com</h1>
		</div>
		<div class="top-down" style="text-align: center; line-height: 50px;">
			<input type="text" placeholder="Search Properties"><button class="search-button"><span class="material-icons" style="display: inline-block; vertical-align: middle; line-height: normal;">
				search
				</span></button>
		</div>
		</div>
	</div>

	<style>
	
		div.top-down input[type=text]{
			width: 80%;
			line-height: 30px;
			border: none;
			border-radius:15px 0 0 15px;
			outline: none;
			padding-left:2%;
		}
		button.search-button{
			line-height: 30px;
			border: none;
			background-color: rgb(255, 255, 255);
			border-radius: 0 15px 15px 0;
			cursor: pointer;
		}
		button.search-button:hover{
			opacity: 0.6;
			border-left: 1px;
		}
		div.home-top{
			width: 100%;
			min-height: 400px;
			max-height: 600px;
			background: url(images/real-estate3.png);

			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: 100% 100%;
		}
	</style>

<div class="home-inline" style="width: 100%; display: inline-flex; align-items: center; justify-content: center; margin: 0;">
	<div class="home-view" style="max-width: 1250px; background-color: white; height: 100%; margin: 0;">
			

	<div class="home-featured" style="padding: 1%;">
		<p><h2>Featured <b>Collections</b></h2></p>
		<p style="color: rgb(146, 145, 144);">Handpicked properties for you</p>
		<div class="featured-collections" style="text-align: center;">
		<?php $limit_view=3 ?>
		<?php
		include 'get-prop-details.php';
		?>


			
		</div>
	</div>

	<?php 
            include 'sell-ad.php';
        ?>
	<div class="home-news" style="padding-left: 2%; margin: 0;">
		<h2>News and <b>Articles</b></h2>
		<p style="color: rgb(179, 179, 172);">Stories moving the world of Real Estate</p>
		<div class="home-news-articles" style="text-align: center;">
			<div class="blog-inline" style="width: 100%; display: inline-flex; align-items: center; justify-content: center;">
				<div class="blog-view" style="max-width: 1250px; background-color: white; height: 100%; margin-top: 2%;">
					<div class="blogs" style="display: inline-block; margin: 1%;">
		
						<div class="blog-button card" onclick="window.open('blog.htm');">
							<div class="blog-button-image" style="width: 100%; height: 55%;">
								<img src="images/land-registration.jpg" alt="property-pic" style="width: 100%;height: 100%;">
							</div>
							<div class="blog-button-details" style="width: 100%; height: 45%; padding: 2%;">
								<div class="blog-name">
									<p><b style="color: rgb(5, 5, 5);">All about property and land registration in Bihar</b></p>
								</div>
								<div class="blog-desc">
									<p style="color: rgb(170, 162, 162); font-size: 90%;">We explain the procedure to be followed by buyers, for registering their home or land purchase, in Bihar</p>
								</div>
		
								<hr style="margin-bottom: 2px;">
								<div class="blog-writer-date" style="display: inline-flex; width: 100%; font-size: 85%;">
								<div class="blog-writer" style="color: rgb(170, 162, 162); width: 50%;text-align: left;">
									Sumant Kumar
								</div>
								<div class="blog-date" style="color: rgb(170, 162, 162); display: inline-block; width: 50%;text-align: right;">
									Apr 2021
								</div>
								</div>
							</div>
						</div>
						<div class="blog-button card" onclick="window.open('blog.htm');">
							<div class="blog-button-image" style="width: 100%; height: 55%;">
								<img src="images/land-registration.jpg" alt="property-pic" style="width: 100%;height: 100%;">
							</div>
							<div class="blog-button-details" style="width: 100%; height: 45%; padding: 2%;">
								<div class="blog-name">
									<p><b style="color: rgb(5, 5, 5);">All about property and land registration in Bihar</b></p>
								</div>
								<div class="blog-desc">
									<p style="color: rgb(170, 162, 162); font-size: 90%;">We explain the procedure to be followed by buyers, for registering their home or land purchase, in Bihar</p>
								</div>
		
								<hr style="margin-bottom: 2px;">
								<div class="blog-writer-date" style="display: inline-flex; width: 100%; font-size: 85%;">
								<div class="blog-writer" style="color: rgb(170, 162, 162); width: 50%;text-align: left;">
									Sumant Kumar
								</div>
								<div class="blog-date" style="color: rgb(170, 162, 162); display: inline-block; width: 50%;text-align: right;">
									Apr 2021
								</div>
								</div>
							</div>
						</div>
						<div class="blog-button card" onclick="window.open('blog.htm');">
							<div class="blog-button-image" style="width: 100%; height: 55%;">
								<img src="images/land-registration.jpg" alt="property-pic" style="width: 100%;height: 100%;">
							</div>
							<div class="blog-button-details" style="width: 100%; height: 45%; padding: 2%;">
								<div class="blog-name">
									<p><b style="color: rgb(5, 5, 5);">All about property and land registration in Bihar</b></p>
								</div>
								<div class="blog-desc">
									<p style="color: rgb(170, 162, 162); font-size: 90%;">We explain the procedure to be followed by buyers, for registering their home or land purchase, in Bihar</p>
								</div>
		
								<hr style="margin-bottom: 2px;">
								<div class="blog-writer-date" style="display: inline-flex; width: 100%; font-size: 85%;">
								<div class="blog-writer" style="color: rgb(170, 162, 162); width: 50%;text-align: left;">
									Sumant Kumar
								</div>
								<div class="blog-date" style="color: rgb(170, 162, 162); display: inline-block; width: 50%;text-align: right;">
									Apr 2021
								</div>
								</div>
							</div>
						</div>
						<div class="blog-button card" onclick="window.open('blog.htm');">
							<div class="blog-button-image" style="width: 100%; height: 55%;">
								<img src="images/land-registration.jpg" alt="property-pic" style="width: 100%;height: 100%;">
							</div>
							<div class="blog-button-details" style="width: 100%; height: 45%; padding: 2%;">
								<div class="blog-name">
									<p><b style="color: rgb(5, 5, 5);">All about property and land registration in Bihar</b></p>
								</div>
								<div class="blog-desc">
									<p style="color: rgb(170, 162, 162); font-size: 90%;">We explain the procedure to be followed by buyers, for registering their home or land purchase, in Bihar</p>
								</div>
		
								<hr style="margin-bottom: 2px;">
								<div class="blog-writer-date" style="display: inline-flex; width: 100%; font-size: 85%;">
								<div class="blog-writer" style="color: rgb(170, 162, 162); width: 50%;text-align: left;">
									Sumant Kumar
								</div>
								<div class="blog-date" style="color: rgb(170, 162, 162); display: inline-block; width: 50%;text-align: right;">
									Apr 2021
								</div>
								</div>
							</div>
						</div>
			
					</div>
				</div>
			</div>
			</div>
			</div>
			
		<?php 
            include 'sell-ad.php';
        ?>
        </div>
			</div>
		
			
			<style>
				div.blog-button{
					width: 350px; 
					height: 300px; 
					margin: 2%; 
					cursor: pointer;
					display: inline-block;
				}
			</style>
		
		</div>
	</div>

	<div class="home-investors" style="background-color: white; margin: 0;">
		<p style="text-align: center; font-size: 30px;">We are <b>trusted and backed</b> by</p>
		<div class="home-investors-img">
			<img src="images/venture1.png" alt="ventures">
			<img src="images/venture1.png" alt="ventures">
			<img src="images/venture2.png" alt="ventures">
			<img src="images/venture2.png" alt="ventures">
			<img src="images/venture3.png" alt="ventures">
			<img src="images/venture3.png" alt="ventures">
			<img src="images/venture4.png" alt="ventures">
			<img src="images/venture4.png" alt="ventures">
			<img src="images/venture5.jpg" alt="ventures">
			<img src="images/venture5.jpg" alt="ventures">
		</div>
	</div>


	<style>
		.home-investors-img{
			width: 90%;
			margin-left: 5%;
			display: inline-block;
			overflow: auto;
			white-space: nowrap;

		}
		@media screen and (max-width:800px) {
			.home-investors-img{
				width: 100%;
				margin: 0;
			}
		}
		.home-investors-img img{
			width: 100px;
			height: 60px;
			margin: 1%;
		}
	</style>

	<div class="enquiry">
		<div class="enquiry-left">
			<img src="images/real-estate8.png" alt="real-estate-kings">
		</div>
		<div class="enquiry-right">
			<h2 style="color: blanchedalmond; text-align: center;">Enquire With Us</h2>
			<form class="enquiry-form" action="" method="post">
				<div class="form-name">
				<input type="text" name="f-name" id="f-name" placeholder="First Name">
				<input type="text" name="l-name" id="l-name" placeholder="Last Name">
				</div>
				<input type="phone" name="mobile" id="mobile" placeholder="Mobile Number">
				<input type="email" name="email" id="email" placeholder="Email">
				<textarea name="query" id="query" cols="30" rows="10" placeholder="Enter Your Query"></textarea>
				<input type="submit" name="submit" id="submit" value="Submit">
				
			</form>
		</div>
	</div>

	
	<style>
		div.property-button{
			width: 300px; 
			height: 250px; 
			margin: 2%; 
			cursor: pointer;
			display: inline-block;
		}
	</style>
	
	<style>
		span.check-circle{
			font-size: 90%;
			color: yellowgreen;
		}
		div.all-details{
			max-width: 800px;
		}
		/*style for similer properties buttons*/
	 div select.property-type{
			width: 50%;
			padding: 1%;
			margin: 1%;
			font-size: 90%;
			border: none;
			border-bottom: 1px solid rgb(1,1,1);
			padding-bottom: 0;
			cursor: pointer;
			
		}

	 div.contact-seller-form input[type=text],div.contact-seller-form input[type=tel],div.contact-seller-form input[type=email],div.contact-seller-form textarea{
			width: 90%;
			border: none;
			border-bottom: 1px solid rgb(1,1,1);
			margin: 1.5% 0;
			padding: 0;
			outline: none;
			font-size: 105%;
		}
		div.contact-seller-form input[type=submit]{
			position: relative;
			text-align: center;
			background-color: rgb(30, 219, 71);
			border: none;
			width: 100%;
			font-size: 110%;;
			line-height: 30px;
			margin:4% 0;
			border-radius: 5px;
		}
		div.contact-seller-form input[type=submit]:hover{
			opacity: 0.9;
			cursor: pointer;
		}
		div.contact-seller-form input[type=checkbox]{
			margin-left: 2%;
			margin-top: 1%;
		}

	</style>

<div class="website-records" style="background-color: cyan;">
	<div><p><h3>Total Number of Visits on the Site:</h3><i> 2,21,025</i></p></div>
	<div><p><h3>Total Number of Properties Listed:</h3><i>2,025</i></p></div>	
</div>
<style>
	div.website-records{
		width: 100%;
		text-align: center;
	}
	div.website-records p{
		width: 100%;
		text-align: center;
	}
	
	div.website-records h3{
		width: 100%;
		text-align: center;
		margin: 0;
		padding: 0;
	}
	div.website-records i{
		font-size: 30px;
	}
</style>

<?php
	include 'foot.php';
?>


</body>
</html>
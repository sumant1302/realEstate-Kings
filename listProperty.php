<?php
session_start();
include 'main.php';
if(isset($_POST['list-prop-upload-1']) || isset($_POST['list-prop-continue-2'])){
require 'list-prop-upload.php';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="real, estate, rpoperties, patna, bihar, buy, rent, house, apartments,room, sell, property">
	<title>List Property|RSK</title>
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
		.prop-page{
	background: #7fff00;
	width: 100%;
	height: 100%;
}
</style>
<div style="display:inline-flex; width: 100%; align-items:center;justify-content:center;">
<hr class="upload-1" style="width:40%; margin:0; padding:0;">
<hr class="upload-2" style="width:40%; margin:0; padding:0;">
</div>

	<?php if(!isset($_SESSION['basic-uploaded']) && !isset($_SESSION['prop-uploaded'])){ ?>

<div class="buy-top" style="display: inline-flex; align-items: center; justify-content: center; width: 100%; position: relative; height: 200px; background-image: url('images/real-estate5.png'); background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: 100% 100%;">
    <h1 style="color: rgb(243, 237, 237); text-align: center;padding: 2%; margin: 0; font-family: Verdana, Geneva, Tahoma, sans-serif; background-color: rgba(0, 0, 0, 0.4);">Sell or Rent Your Property</h1>
    </div>
    <style>
            h1{
                font-size: 300%;
            }
            @media screen and (max-width: 600px) {
                h1{
                    font-size: 250%;
                }
            }
        </style>
	
	<div class="list-property-inline" style="width: 100%;display: inline-flex; align-items: center; justify-content: center;" >
		<div class="list-property-view" style="max-width: 1000px;background-color: white;height: 100%;margin-top: 2%;">
		

<div class="list-property" style="padding-left: 1%;">
	<div class="list-property-left">
		<div class="list-property-right-top">
			<p>You are posting this property for <strike>Rs5000</strike> 
				<b style="background-color: burlywood;">FREE!</b></p>
				<span class="material-icons">
					check_circle
					</span><i>Free Professional Photoshoot</i><br>
					<span class="material-icons">
						check_circle
						</span><i>Get genuine buyers</i><br>
						<span class="material-icons">
							check_circle
							</span><i>Sell Faster</i>

		</div>
		<style>
			.list-property span.material-icons{
				font-size: 15px;
				color: cornflowerblue;
			}
		</style>
		<form class="list-property-form" action="" method="post" enctype="multipart/form-data">
			<div class="list-personal-details">
			<h4>Personal Details</h4>
			I am 
		  <input type="radio" name="uploader-type" id="radio" value="Owner">
			<label for="radio">Owner</label>
			<input type="radio" name="uploader-type" id="radio" value="Agent">
			<label for="radio">Agent</label>
			<input type="radio" name="uploader-type" id="radio" value="other">
			<label for="radio">Other</label>
			
			<div class="form-name">
			<input type="text" name="p-name" id="f-name" placeholder="Name" value="<?php echo $_SESSION["name"]; ?>">
			<!--<input type="text" name="l-name" id="l-name" placeholder="Last Name">-->
			</div>
			<input type="phone" name="p-mobile" id="mobile" placeholder="Mobile Number">
			<input type="email" name="p-email" id="email" placeholder="Email">
			</div>
			<div class="list-property-details">
				<h4>Property Details</h4>
				For 
			  <input type="radio" name="upload-for" id="radio" value="Sell">
				<label for="radio">Sell</label>
				<input type="radio" name="upload-for" id="radio" value="Rent/Lease">
				<label for="radio">Rent/Lease</label>
				<input type="radio" name="upload-for" id="radio" value="PG/Hostel">
				<label for="radio">PG/Hostel</label>
				<br>
				<br>
				<label for="select-type">Property type</label><br>
				<select class="property-type" name="property-type">
					<option selected>Select..</option>
					<option>Residential-1 BHK</option>
					<option>Residential-2 BHK</option>
					<option>Residential-3 BHK</option>
					<option>Commercial</option>
					<option>Parking</option>
					<option>Office</option>
					<option>Bungalow</option>
					<option>Industral</option>
				</select>
			</div> 
			<div class="list-property-location">
				<h4>Property Location</h4>
				<label for="city-name"></label>
				<input type="text" name="property-city" id="city-name" placeholder="city">
				<input type="text" name="property-locality" id="locality-name" placeholder="Locality">
				<br>
				<input type="hidden" name="size" value="100000">
				<label for="p-img" style="display: block; margin:2% 0;"><b>Upload Images</b></label>
				<input type="file" name="image">
			</div>

			<textarea name="query" id="query" cols="30" rows="10" placeholder="Enter any message"></textarea><br>
			<input type="checkbox" id="check1" name="rsk-exclusivity" value="Yes" checked required>I am posting this property 'exclusively' on RSK
`				<br>
			<input type="checkbox" id="check2" name="agree-whatsapp" value="Yes" checked>I want to receive responses on  Whatsapp

			<br>
			<?php if(isset($_SESSION["loggedin"])){ ?>
				<input type="submit" name="list-prop-upload-1" id="list-prop-upload" value="Continue">
			<?php } ?>
		</form>
		<?php if(!isset($_SESSION["loggedin"])){ ?>
			<button name="list-prop-login" id="list-prop-login" onclick="document.getElementById('myBtn').click()">Login and Continue</button>
			<style>
				div.list-property button#list-prop-login {
    position: relative;
    left: 15%;
    text-align: center;
    background-color: rgb(30, 219, 71);
    border: none;
    width: 50%;
    font-size: 110%;
    line-height: 30px;
    margin: 4% 0;
    border-radius: 5px;
	cursor: pointer;
}

* {
    box-sizing: border-box;
}
			</style>
		<?php	} ?>
	</div>
	<div class="list-property-right">
		<p>You are posting this property for <strike>Rs5000</strike> 
			<b style="background-color: burlywood;">FREE!</b></p>
			<span class="material-icons">
				check_circle
				</span><i>Free Professional Photoshoot</i><br>
				<span class="material-icons">
					check_circle
					</span><i>Get genuine Buyers</i><br>
					<span class="material-icons">
						check_circle
						</span><i>Sell Faster</i>

	</div>
</div>
<img src="images/real-estate5.png" alt="" width="100%" height="400px">
	
</div>
</div>
<?php } ?>

<?php if(isset($_SESSION['basic-uploaded']) && !isset($_SESSION['prop-uploaded'])){ ?>
		<style>
			hr.upload-1{
				border:10px solid red; 
				color:blue; 
				z-index:1;
			}
		</style>
	<div class="list-property-inline" style="width: 100%;display: inline-flex; align-items: center; justify-content: center;" >
		<div class="list-property-view" style="max-width: 1000px;background-color: white;height: 100%;margin-top: 2%;">

<div class="list-property" style="padding-left: 1%;">
<div class="list-property-left">
	<form class="list-property-form" action="" method="post">
		<div class="list-personal-details">
			<div class="form-name">
			Price: <br>
			<input name="prop-price" type="text" placeholder="Price">
			Property Title: <br>
			<input type="text" name="prop-title" id="" placeholder="e.g. 3 BHK Independent House, 5 BHK Bungalow etc.... ">

			<br>
			<b>Property Confugrations</b><br><br>
			Build-up Area: <br>
			<input type="text" name="prop-buildup-area" id="prop-buildup-area" placeholder="Build-up Area Value">
			Configuration: <br>
			<input type="text" name="prop-config" id="prop-config" placeholder="eg. 3 BHK, 5BHK etc.">
			Possession Status: <br>
			<input type="date" name="prop-posess-status" id="prop-posess-status" placeholder="eg. 31st Jan, 2002">
			<br>
			Facing: <br>
			<input type="text" name="prop-facing" id="" placeholder="eg. East">
			<br>
			Carpet Area: <br>
			<input type="text" name="prop-carpet-area" id="prop-carpet-area" placeholder="eg. 1120 ft">
			Bathrooms: <br>
			<input type="text" name="prop-bathrooms" id="prop-bathrooms" placeholder="eg. 3 BHK, 5BHK etc.">
			Balcony: <br>
			<input type="text" name="prop-balcony" id="prop-balcony" placeholder="eg. 3 BHK, 5BHK etc.">
			Bedrooms: <br>
			<input type="text" name="prop-bedrooms" id="prop-bedrooms" placeholder="eg. 3 BHK, 5BHK etc.">
			</div>
			</div>
			<div class="list-property-details">
				
			<label for="select-type">Parking:</label><br>
			<select class="property-type" name="prop-parking">
					<option selected>Select..</option>
					<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
			</div>
			About: <br>
			<textarea name="about-property" id="about-property" cols="30" rows="10" placeholder="Write about property"></textarea><br>
			
			<br>
			<br>
			<input type="submit" name="list-prop-continue-2" id="l-cont-2" value="Continue →">
		</form>
		</div>
	</div>
<img src="images/real-estate5.png" alt="" width="100%" height="400px">

		</div>
		
	</div>
	<style>
		div.list-property {
    width: 100%;
    display: inline-flex;
    align-content: center;
    justify-content: center;
	}
	</style>
	<?php }  ?>
<?php if(isset($_SESSION['prop-uploaded'])){ ?>
	<style>
		hr.upload-1, hr.upload-2{
				border:10px solid red; 
				color:blue; 
				z-index:1;
			}
	</style>
	<div class="prop-upload">
	<span class="material-icons" style="font-size: 150%; text-align:center;">
					check_circle
					</span><br>
					<h2>Your Property is successfully Uploaded</h2>
	</div>
<?php } ?>
<style>
	form.list-property-form input[type=file]::-webkit-file-upload-button{
		cursor: pointer;
	}
	div.list-property{
		width: 100%;
		display: inline-flex;
	}
	div.list-property-left{
		width: 65%;
	}
	div.list-property-right{
		width: 35%;
		margin-top: 10%;
	}
	div.list-property-right-top{
		display: none;
	}
	div.list-property .property-type{
		width: 50%;
		padding: 1%;
		margin: 1%;
		font-size: 110%;
		border: none;
		border-bottom: 1px solid rgb(1,1,1);
		padding-bottom: 0;
		cursor: pointer;
		
	}
	div.list-property input[type=text],input[type=phone],input[type=email], textarea{
		width: 90%;
		border: none;
		border-bottom: 1px solid rgb(1,1,1);
		margin: 1.5% 0;
		padding: 0;
		outline: none;
		font-size: 105%;
	}
	div.list-property input[type=submit]{
		position: relative;
		left: 15%;
		text-align: center;
		background-color: rgb(30, 219, 71);
		border: none;
		width: 50%;
		font-size: 110%;;
		line-height: 30px;
		margin:4% 0;
		border-radius: 5px;
	}
	div.list-property input[type=submit]:hover{
		opacity: 0.9;
		cursor: pointer;
	}
	div.list-property input[type=checkbox]{
		margin-left: 2%;
		margin-top: 1%;

	}
	@media screen and (max-width:900px) {
		div.list-property-left{
			width: 100%;
		}
		div.list-property-right{
			display: none;
		}
		div.list-property-right-top{
		display: block;
	}
	}
	
	@media screen and (max-width:600px) {
	
		div.list-property .property-type{
		width: 80%;
		
	}
	div.list-property input[type=text],input[type=phone],input[type=email], textarea{
		width: 90%;
	}
	div.list-property input[type=submit]{
		position: relative;
		width: auto;
		margin:4%;
	}
	div.list-property input[type=submit]:hover{
		opacity: 0.9;
		cursor: pointer;
	}
	div.list-property input[type=checkbox]{
		margin-left: 2%;
	}
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

	 div.contact-seller-form input[type=text],div.contact-seller-form input[type=tel],
	 div.contact-seller-form input[type=email],div.contact-seller-form textarea{
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


<?php
	include 'foot.php';
?>
</body>
</html>
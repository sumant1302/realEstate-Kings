<?php
    include 'main.php';
    session_start();
?>

<?php
    include 'header.php';
    include 'modals.php';
?>

<style>
	.contact-page{
	    background: #7fff00;
	    width: 100%;
	    height: 100%;
    }
</style>
<div class="buy-top" style="display: inline-flex; align-items: center; justify-content: center; width: 100%; position: relative; height: 200px; background-image: url('images/real-estate1.png'); background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: 100% 100%;">
    <h1 style="color: rgb(243, 237, 237); text-align: center;padding: 2%; margin: 0; font-family: Verdana, Geneva, Tahoma, sans-serif; background-color: rgba(0, 0, 0, 0.4);">Contact Us</h1>
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


<div class="enquiry">
	<div class="enquiry-right">
		<h1 style="margin:auto; text-align:center; color: rgb(25, 26, 112);">Enquire With Us</h1>
		<form class="enquiry-form" action="" method="post">
			<div class="form-name">
			<input type="text" name="first-name" id="f-name" placeholder="First Name">
			<input type="text" name="last-name" id="l-name" placeholder="Last Name">
			</div>
			<input type="phone" id="mobile" placeholder="Mobile Number">
			<input type="email" name="email" id="email" placeholder="Email">
			<textarea name="query" id="query" cols="30" rows="10" placeholder="Enter Your Query"></textarea>
			<input type="submit" name="submit" id="submit" value="Submit">
			
		</form>
		</div>
	</div>


<div class="contact-more" style="background-color: rgb(27, 165, 165); margin: 0; padding:0; position: relative; line-height: 50px;">
	<p style="padding: 0; margin: auto; color: black; font-size: 20px; text-align: center;">For more info, feel free to Write to Us at <a href="contact@realestatekings.com" style="color: inherit;"><b><i>help@realestatekings.com</i></b></a></p>
</div>
<div class="about-location">
	<div class="about-location-left">
		<h1>Find Us Here</h1>
		<div class="mapouter">
			<div class="gmap_canvas">
				<iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Plot%20No%2025,%20Institutional%20Area%20Sector%20-%2032,%20Gurgaon%20-%20122001&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
				</iframe>
				<a href="https://123movies-to.org"></a><br>
				<style>
				.mapouter{
					position:relative;
				text-align:right;
				height:400px;
				width:100%;
				}
				</style>
				<a href="https://www.embedgooglemap.net"></a>
				<style>
				.gmap_canvas {
					overflow:hidden;
					background:none!important;
					height:400px;
					width:100%;
					}
					</style>
					</div>
				</div>
	</div>
	<div class="about-location-right">
		<h2>Real Estate Kings Pvt. Ltd.</h2>
		<p>
			Plot No 25, Institutional Area
			Sector - 32, Gurgaon - 122001
			Phone: 08899939993
			Fax: +91-0124-4866599
		</p>
	</div>
</div>


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

	 div.contact-seller-form input[type=text],div.contact-seller-form input[type=tel],div.contact-seller-form input[type=email],div.contact-seller-form  textarea{
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

<style>
		div.enquiry{
	width: 100%;
	display: block;
	background-color: rgb(200, 206, 145,0.4);
	margin: auto;
}
div.enquiry-left{
	width: 100%;
	height: 100%;
}
div.enquiry-right{
	width: 100%;
	height: 100%;
	margin: auto;
}
div.enquiry-left img{
	width: 100%;
	height:200px;
	margin: 0;
}
form.enquiry-form input, textarea{
	margin: 2% 2%;
	padding-left: 5px;
}
form.enquiry-form input[type=text]{
	width: 45%;
	font-size: 105%;
	background: none;
	border:none;
	border-bottom: 2px solid red;
	outline: none;
}
input#l-name{
	margin-left: 0;
	padding-left: 5px;
}
input#f-name{
	margin-right: 0;
	padding-left: 5px;
}

form.enquiry-form input[type=phone], input[type=email], textarea{
	width: 90%;
	font-size: 110%;
	border: none;
	border-bottom: 2px solid red;
	background: none;
	outline: none;
}
form.enquiry-form textarea{
	max-height:100px ;
	font-size: 105%;
}
form.enquiry-form input[type=submit]{
	margin-left: 25%;
	width: 40%;
	height: 40px;
	border: none;
	background-color:royalblue;
	cursor: pointer;
	font-size: 20px;
	color: white;
}
	</style>
	
<?php
    include 'foot.php';
?>
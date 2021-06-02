<?php
    include 'main.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="real, estate, rpoperties, patna, bihar, buy, rent, house, apartments,room, sell, property">
	<title>Media|RSK</title>
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
    .media-page{
	background: #7fff00;
	width: 100%;
	height: 100%;
}
</style>

<div class="media-images" style="text-align: center;">
<div class="property-button card">
	<div class="property-button-image" style="width: 100%; height: 100%;">
		<img src="images/real-estate1.png" alt="property-pic" style="width: 100%;height: 100%;">
	</div>
	</div>
	<div class="property-button card">
	<div class="property-button-image" style="width: 100%; height: 100%;">
		<img src="images/real-estate2.png" alt="property-pic" style="width: 100%;height: 100%;">
	</div>
	</div>
<div class="property-button card">
	<div class="property-button-image" style="width: 100%; height: 100%;">
		<img src="images/real-estate3.png" alt="property-pic" style="width: 100%;height: 100%;">
	</div>
	</div>
<div class="property-button card">
	<div class="property-button-image" style="width: 100%; height: 100%;">
		<img src="images/real-estate4.png" alt="property-pic" style="width: 100%;height: 100%;">
	</div>
	</div>
<div class="property-button card">
	<div class="property-button-image" style="width: 100%; height: 100%;">
		<img src="images/real-estate5.png" alt="property-pic" style="width: 100%;height: 100%;">
	</div>
	</div>
<div class="property-button card">
	<div class="property-button-image" style="width: 100%; height: 100%;">
		<img src="images/real-estate6.png" alt="property-pic" style="width: 100%;height: 100%;">
	</div>
	</div>
<div class="property-button card">
	<div class="property-button-image" style="width: 100%; height: 100%;">
		<img src="images/real-estate7.png" alt="property-pic" style="width: 100%;height: 100%;">
	</div>
	</div>
<div class="property-button card">
	<div class="property-button-image" style="width: 100%; height: 100%;">
		<img src="images/real-estate8.png" alt="property-pic" style="width: 100%;height: 100%;">
	</div>
	</div>
<div class="property-button card">
	<div class="property-button-image" style="width: 100%; height: 100%;">
		<img src="images/real-estate9.png" alt="property-pic" style="width: 100%;height: 100%;">
	</div>
	</div>
<div class="property-button card">
	<div class="property-button-image" style="width: 100%; height: 100%;">
		<img src="images/real-estate1.png" alt="property-pic" style="width: 100%;height: 100%;">
	</div>
	</div>
<div class="property-button card">
	<div class="property-button-image" style="width: 100%; height: 100%;">
		<img src="images/real-estate2.png" alt="property-pic" style="width: 100%;height: 100%;">
	</div>
	</div>
<div class="property-button card">
	<div class="property-button-image" style="width: 100%; height: 100%;">
		<img src="images/real-estate3.png" alt="property-pic" style="width: 100%;height: 100%;">
	</div>
	</div>
<div class="property-button card">
	<div class="property-button-image" style="width: 100%; height: 100%;">
		<img src="images/real-estate4.png" alt="property-pic" style="width: 100%;height: 100%;">
	</div>
	</div>
<div class="property-button card">
	<div class="property-button-image" style="width: 100%; height: 100%;">
		<img src="images/real-estate5.png" alt="property-pic" style="width: 100%;height: 100%;">
	</div>
	</div>
<div class="property-button card">
	<div class="property-button-image" style="width: 100%; height: 100%;">
		<img src="images/real-estate6.png" alt="property-pic" style="width: 100%;height: 100%;">
	</div>
	</div>
<div class="property-button card">
	<div class="property-button-image" style="width: 100%; height: 100%;">
		<img src="images/real-estate7.png" alt="property-pic" style="width: 100%;height: 100%;">
	</div>
	</div>
<div class="property-button card">
	<div class="property-button-image" style="width: 100%; height: 100%;">
		<img src="images/real-estate8.png" alt="property-pic" style="width: 100%;height: 100%;">
	</div>
	</div>
<div class="property-button card">
	<div class="property-button-image" style="width: 100%; height: 100%;">
		<img src="images/real-estate9.png" alt="property-pic" style="width: 100%;height: 100%;">
	</div>
	</div>
	</div>


<style>
	div.property-button{
		width: 300px; 
		height: 250px; 
		margin: 1%;
		margin-left: 2%; 
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

<?php
    include 'foot.php';
?>
</body>
</html>
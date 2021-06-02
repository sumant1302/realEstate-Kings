<div class="buy-property-view">
		<div class="property-view-all">
    <div class="property-view-top" style="display: flex; width: 100%; background-color: white; margin:1% 0;">
        <div class="view-top-left" style="width: 50%; padding: 2%;">
            <div class="property-name">
                <p><h2><?php echo $title; ?></h2></p>
            </div>
            <div class="property-address">
                <p style="color: rgb(94, 94, 107);"><?php echo $locality.", ".$city; ?></p>
            </div>
        </div>
        <div class="view-top-right" style="width: 50%;">
            <div class="property-details" style="max-width:100%; float: right;">
                <p style="color: rgb(172, 172, 184);max-width: 100%; right: 0;">Last updated at:<?php echo $lastupdated; ?> </p>
                <div class="property-price">
                    <p style="color: rgb(74, 14, 153); right: 0px; margin: 0;"><b style="color: black; font-size: 110%;">&#x20B9; <?php echo $price; ?></b>EMI starts at Rs 48.9 K/month</p>
                    <p style="font-size: 90%; color: rgb(127, 127, 139); right: 0; margin: 0;">&#x20B9; <?php 
					$avg_price="";
					if($build_area!=0 && $price!=0 && is_numeric($price) && is_numeric($build_area)) {
					$avg_price=$price/$build_area;
					}
					echo number_format((float)$avg_price, 2, '.', '');;
					 ?>K/sq. ft</p>
                    <button class="contact-seller" style="border: none; background-color: cadetblue; color: white; width: 100px; height: 30px; float: right; margin:0 5% 5% 0;">
					<a href="#get-contact" style="text-decoration: none; color: inherit; width: 100%; height: 100%;">Contact Seller</a></button>
                </div>
            </div>
        </div>
    </div>
	<div class="property-view-photo" style="display: flex; width: 100%; height: 400px; align-items: center; justify-content: center; background-color: rgb(205, 235, 235);">
		<div class="view-property" style="display: block;">
			<div class="view-property-pic">
		<img src="images/real-estate-kings.jpg" alt="real-state-kings" style="width:200px; height: 100px;">
		</div>
		<div class="view-property-request" style="text-align: center; margin: 20px;">
		<button class="req-photos">
		<a href="#get-contact" style="text-decoration: none; color: inherit;">Request Photos</a></button>
		</div>
		</div>
	</div>
	<style>
		.req-photos{
			line-height: 30px; 
			width: 120px; 
			padding: 0px; 
			color:red; 
			border: 3px solid red; 
			background-color: rgb(202, 203, 204,0.4); 
			cursor: pointer;
		}
		button.req-photos:hover{
			color:white;
			background-color: red;
		}
	</style>

	<div class="view-below" style="width: 100%; width:100%; padding: 0 2%; margin: 1% 0; background-color: white; ">
	<div class="property-details" style="width: 100%; display: inline-flex; width:100%; padding: 0 2%; margin: 1% 0; background-color: white;">
		<div class="about-property-buy">
			<div class="buildup-area">
				<p style="color: rgb(172, 162, 162);">Build Up Area</p>
			</div>
			<div class="area-value">
				<p style="color: black;"><?php echo $build_area; ?></p>
			</div>
		</div>
		<hr>
		<div class="about-property-buy">
			<div class="avg-price">
				<p style="color: rgb(172, 162, 162);">Avg. Price</p>
			</div>
			<div class="avg-value">
				<p style="color: black;"><?php 
					$avg_price="";
					if($build_area!=0 && $price!=0 && is_numeric($price) && is_numeric($build_area)) {
					$avg_price=$price/$build_area;
					}
					echo number_format((float)$avg_price, 2, '.', '');;
					 ?>K sq/ft</p>
			</div>
		</div>
		<hr>
		<div class="about-property-buy">
			<div class="configuration">
				<p style="color: rgb(172, 162, 162);">Configuration</p>
			</div>
			<div class="avg-value">
				<p style="color: black;"><?php echo $config; ?></p>
			</div>
		</div>
		<hr>
		<div class="about-property-buy">
			<div class="posession-status">
				<p style="color: rgb(172, 162, 162);">Posession status</p>
			</div>
			<div class="posession-date">
				<p style="color: black;"><?php echo $posession; ?> </p>
			</div>
		</div>
		<hr>
		<div class="about-property-buy">
			<div class="facing">
				<p style="color: rgb(172, 162, 162);">Facing</p>
			</div>
			<div class="face-direction">
				<p style="color: black;"><?php echo $facing; ?></p>
			</div>
		</div>
		</div>

		<div id="view-buttons" class="view-buttons" style="width:100%; padding:1% 2%; margin: 1% 0; background-color: white;">
			<button class="overview" style="border-bottom: 2px solid red;"><a href="#overview" style="text-decoration: none; color: inherit;">OVERVIEW</a></button>
			<button class="overview"><a href="#locality" style="text-decoration: none; color: inherit;">LOCALITY</a></button>
			<button class="overview"><a href="#similar-properties" style="text-decoration: none; color: inherit;">SIMILAR PROPERTIES</a></button>
			<button class="overview overview-contact-seller"><a href="#get-contact" style="text-decoration: none; color: inherit;">CONTACT SELLER</a></button>
		</div>
		</div>

		<div class="view-inline">
		<div class="all-details">
		<div id="overview" class="overview" style="width:100%; padding: 0 2%; margin: 1% 0; background-color: white;  display: inline-flex;">
			<div class="overview-left" style="width: 100%;">
			<p><h3>Overview</h3></p>
			<div class="overview-details" style="width:100%; display: inline-flex;">
				<div class="overview-details-left">
				<div class="overview-details">
					<div class="facing">
						<p style="color: rgb(172, 162, 162);">Brokerage</p>
					</div>
					<div class="face-direction">
						<p style="color: black;">No Charge</p>
					</div>
				</div>
				<div class="overview-details">
			<div class="facing">
				<p style="color: rgb(172, 162, 162);">Carpet Area</p>
			</div>
			<div class="face-direction">
				<p style="color: black;"><?php echo $carpet_area; ?></p>
			</div>
			</div>
			<div class="overview-details">
				<div class="facing">
					<p style="color: rgb(172, 162, 162);">Bathrooms</p>
				</div>
				<div class="face-direction">
					<p style="color: black;"><?php echo $bathrooms; ?></p>
				</div>
			</div>
			<div class="overview-details">
				<div class="facing">
					<p style="color: rgb(172, 162, 162);">Balcony</p>
				</div>
				<div class="face-direction">
					<p style="color: black;"><?php echo $balcony; ?></p>
				</div>
			</div>
			</div>

			<div class="overview-details-right">
			<div class="overview-details">
				<div class="facing">
					<p style="color: rgb(172, 162, 162);">Price</p>
				</div>
				<div class="face-direction">
					<p style="color: black;">&#x20B9; <?php echo $price; ?></p>
				</div>
			</div>
			<div class="overview-details">
				<div class="facing">
					<p style="color: rgb(172, 162, 162);">Bedrooms</p>
				</div>
				<div class="face-direction">
					<p style="color: black;"><?php echo $bedrooms; ?></p>
				</div>
			</div><div class="overview-details">
				<div class="facing">
					<p style="color: rgb(172, 162, 162);">Parking</p>
				</div>
				<div class="face-direction">
					<p style="color: black;"><?php echo $parking; ?></p>
				</div>
			</div>
			<div class="overview-details">
				<div class="facing">
					<p style="color: rgb(172, 162, 162);">Added</p>
				</div>
				<div class="face-direction">
					<p style="color: black;"><?php echo $updatedAt; ?></p>
				</div>
			</div>
			</div>
			</div>
			</div>
			<div class="overview-about" style="width: 100%; padding:0 2%; padding-top: 5%;">
			<p><b>About this Property</b></p>
			<p style="color:rgb(172, 162, 162);; font-size: 90%;">
				 Looking for a <?php echo $title; ?> for <?php echo $for; ?> in <?php echo $city; ?>? Your search ends here. 
				Buy this <?php echo $config; ?> property in <?php echo $city."'s"; ?> finest location, Danapur. 
				This Independent House is available at a reasonable price of Rs <?php echo $price; ?>.
				 The built up area of this property is <?php echo $build_area; ?> square feet. It is spacious for a 
				family and this property has a carpet area of <?php echo $carpet_area; ?> Square feet.
				 This property is <?php echo $facing; ?> facing. There are <?php echo $bedrooms; ?> bedrooms and <?php echo $bathrooms; ?> bathrooms.
				 There are a number of reputed schools in the vicinity such as St. Karen's Secondary School,
				 RPS Girls Public School, and Little Millennium 
				- Kaliket Nagar - Patna. Medical facility is also close at hand with names like 
				Hi-Tech Emergency Hospital, Bimal Hospital, and Kesav Hospital</p>
			</div>
		</div>

		<?php 
            include 'sell-ad.php';
        ?>

		<div id="locality" class="locality" style="width:100%; padding:2%; margin: 1% 0; background-color: white; ">
			<p><h3>Locality</h3></p>
			<div class="locality-map-view" style="width:100%; padding: 0 2%; margin: 1% 0;">
				<p>Map-view</p>
				<div class="mapouter">
					<div class="gmap_canvas">
						<iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=danapur&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
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
		</div>

		<div id="similar-properties" class="similar-properties" style="width:100%; padding: 2%; margin: 1% 0; background-color: white; ">
			<p><h3>Similar Properties in nearby locations</h3></p>
			<div class="similar">
				<div class="property-button card" onclick="window.open('buy-property-view.htm');">
					<div class="property-button-image" style="width: 100%; height: 70%;">
						<img src="images/real-estate9.png" alt="property-pic" style="width: 100%;height: 100%;">
					</div>
					<div class="property-button-details" style="width: 100%; height: 30%; padding: 2%;">
						<div class="property-price">
							<b style="color: blue;">&#x20B9; 67.6L</b>
						</div>
						<div class="property-name">
							<b style="color: black;">3-BHK Super Deluxe House</b>
						</div>
						<div class="property-address">
							<p style="margin: 0;">Patna, Bihar</p>
						</div>
		
					</div>
				</div>

				

					<div class="property-button card" onclick="window.open('buy-property-view.htm');">
						<div class="property-button-image" style="width: 100%; height: 70%;">
							<img src="images/real-estate9.png" alt="property-pic" style="width: 100%;height: 100%;">
						</div>
						<div class="property-button-details" style="width: 100%; height: 30%; padding: 2%;">
							<div class="property-price">
								<b style="color: blue;">&#x20B9; 67.6L</b>
							</div>
							<div class="property-name">
								<b style="color: black;">3-BHK Super Deluxe House</b>
							</div>
							<div class="property-address">
								<p style="margin: 0;">Patna, Bihar</p>
							</div>
			
						</div>
					</div>
	
					<div class="property-button card" onclick="window.open('buy-property-view.htm');">
						<div class="property-button-image" style="width: 100%; height: 70%;">
							<img src="images/real-estate9.png" alt="property-pic" style="width: 100%;height: 100%;">
						</div>
						<div class="property-button-details" style="width: 100%; height: 30%; padding: 2%;">
							<div class="property-price">
								<b style="color: blue;">&#x20B9; 67.6L</b>
							</div>
							<div class="property-name">
								<b style="color: black;">3-BHK Super Deluxe House</b>
							</div>
							<div class="property-address">
								<p style="margin: 0;">Patna, Bihar</p>
							</div>
			
						</div>
					</div>
	
					<div class="property-button card" onclick="window.open('buy-property-view.htm');">
						<div class="property-button-image" style="width: 100%; height: 70%;">
							<img src="images/real-estate9.png" alt="property-pic" style="width: 100%;height: 100%;">
						</div>
						<div class="property-button-details" style="width: 100%; height: 30%; padding: 2%;">
							<div class="property-price">
								<b style="color: blue;">&#x20B9; 67.6L</b>
							</div>
							<div class="property-name">
								<b style="color: black;">3-BHK Super Deluxe House</b>
							</div>
							<div class="property-address">
								<p style="margin: 0;">Patna, Bihar</p>
							</div>
			
						</div>
					</div>
	
					
	
								
			</div>
		</div>
		</div>
		
		<div id="get-contact" class="get-contact" style="width: 100%;">
		<div class="get-contact-center" style="position:sticky; top: 13%; max-width:500px; padding: 0 2%; margin: 1% 0; background-color: rgba(248, 239, 239, 0.7); ">
		<div id="contact-seller" class="contact-seller" >
			<p><b>Contact Seller</b></p>
			<div class="about-seller">
				<div class="seller-details">
					<div class="seller-pic">
						<img src="images/rsk-icon.png" alt="agent" style="width: 100%; height:100%; border-radius: 50%;">
					</div>
					<div class="seller-name-type">
						<div class="seller-name">
							<p style="color: black; text-transform: uppercase;"><?php echo $name; ?></p>
						</div>
						<div class="seller-type">
							<p style="color: rgb(129, 114, 114);"><?php echo $upl_type; ?></p>
							<p class="seller-contact-number" style="color: rgb(32, 30, 30);"><b><?php echo substr($mobile,0,5)."....."; ?></b></p>
						</div>
					</div>
					</div>
					</div>
					<div class="contact-seller-form card" style="width:100%; padding: 0 2%; margin: 1% 0; background-color: white;">
						<p><b style="font: 90%;">Please Share your contact</b></p>
						<form action="">
							<input type="text" name="name" placeholder="Name">
							<input type="tel" name="phone" placeholder="Phone">
							<input type="email" name="email" placeholder="Email">
						<p><b style="font: 90%;">You are looking for</b></p>
						<select class="property-type" name="residential-type" id="residential-type">
							<option value="select">Residential-1 BHK</option>
							<option value="select">Residential-2 BHK</option>
							<option value="select">Residential-3 BHK</option>
							<option value="select">Bungalow</option>
							<option value="select">Office</option>
							<option value="select">Commercial</option>
							<option value="select">Parking</option>
							<option value="select">Industrial</option>
						</select>

						<textarea name="query" id="query" cols="30" rows="5" placeholder="Enter any message"></textarea><br>
				<input type="checkbox" id="check1" checked>I agree to be contacted by RealeStateKings and other agents via WhatsApp, SMS, phone, email etc
					<br>
				<input type="checkbox" id="check2" checked>I am interested in home loans

				<br>
				<input type="submit" name="submit" id="submit" value="Get Contact Details">
				
						</form>
						</div>
					</div>
					</div>
					</div>
				</div>
				</div>
			</div>

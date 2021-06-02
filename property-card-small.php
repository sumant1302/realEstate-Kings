<div class="property-button card" onclick="window.open('buy-property-view.php/propID=<?php echo $propID; ?>');">
	<div class="property-button-image" style="width: 100%; height: 70%;">
		<img src="<?php echo "images/".$images; ?>" alt="property-pic" style="width: 100%;height: 100%;">
	</div>
	<div class="property-button-details" style="width: 100%; height: 30%; padding: 2%;">
		<div class="property-price">
			<b style="color: blue;">&#x20B9; <?php echo $price; ?></b>
		</div>
		<div class="property-name">
			<b style="color: black;"><?php echo $name; ?></b>
		</div>
		<div class="property-address">
			<p style="margin: 0;"><?php echo $locality.$city; ?></p>
		</div>
	
		</div>
</div>

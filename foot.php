<div class="properties-links">
	<p><h4 style="margin:0 2%; color: rgb(172, 32, 32);">People also search for:-</h4></p><br>
	<?php
	$link=mysqli_connect("localhost","root","","aromafeeds");
	if(!$link){
		echo "Cities database not connected";
	}
	$sql="SELECT City FROM cities LIMIT 20";
	$result=mysqli_query($link, $sql);

	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			echo "<p><a>Properties in ".$row['City']."</a></p>";
		}
	}


	?>
	</div>

<style>
	div.properties-links{
		background-color: rgb(0, 0, 0,0.8);
		padding-bottom: 2%;
	}
	div.properties-links a{
		text-decoration: none;
		color: rgb(196, 191, 191);
	}
	div.properties-links p{
		margin: 0;
		display: inline-block;
		width: 24%;
		padding-left:2% ;
		font-size: 90%;
	}
	div.properties-links a:hover{
		color: rgb(106, 146, 173);
	}
	
</style>


<div class="foot">
	<div class="foot1">
		<h3>Our Addresses</h3>
		<p><span class="material-icons">location_on</span> <br>
			Plot No 25, Institutional Area <br>
			Sector - 32, Gurgaon - 122001	<br>
			Phone: 08899939993 <br>
			Fax: +91-0124-486659
		</p>
	</div>
	<div class="foot1">
		<h3>Quick Links</h3>
		<a href="about.htm">About Us</a>
		<a href="contact.htm">Contact Us</a>
		<a href="list-property.htm">Sell/List Property</a>
		<a href="buy-property.htm">Buy Property</a>
		<a href="#">Terms & Conditions</a>
		<a href="#">Home Loan</a>
		<a href="#">Plrivacy Policy</a>
		<a href="#">International</a>
		<a href="#">Media Resources</a>

			
	</div>
	<div class="foot1">
		<h3>Network sites</h3>
			<a href="housing.com">housing.com</a>
			<a href="makaan.com">makaan.com</a>
			<a href="indianrealestateforum.com">indianrealestateforum.com</a>
			<a href=""></a>
			<h3>Email us At</h3>
			<a href="mailto: contact@realestatekings.com">contact@realestatekings.com</a>
			<h3>Follow us On</h3>
			<span class="icons">
			<a href="#"><img src="images/fb-icon.png" alt="fb-icon"></a>
			<a href="#"><img src="images/insta-icon.jpg" alt="insta-icon"></a>
			<a href="#"><img src="images/twitter-icon.jpg" alt="twitter-icon"></a>
			</span>
	</div>
</div>



		<footer>
		<p><sup>&copy;</sup> Real eState Kings Private Limited 2009-2021</p>
		</footer>

<script type="text/javascript" src="rsk-web.js"></script>
<script>
    var btn3=document.getElementById("nav-btn");
var modal3=document.getElementById("myModal3");
var cl= document.getElementsByClassName("close3")[0];

btn3.onclick= function(){
    modal3.style.display="block";
}
cl.onclick= function(){
    modal3.style.display="none";
}

var modal2 = document.getElementById("myModal2");
var btn2 = document.getElementById("myBtn2");
var span2 = document.getElementsByClassName("close2")[0];

btn2.onclick = function() {
  modal2.style.display = "block";
}

span2.onclick = function() {
  modal2.style.display = "none";
}

var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
  if(event.target==modal3){
    modal3.style.display="none";
  }
  if(event.target==modal){
    modal.style.display="none";
  }
}

</script>

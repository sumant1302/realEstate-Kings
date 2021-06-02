
	<style>
		body{
			background-color: rgba(224, 193, 135, 0.4);
			font-family: 'Open Sans', sans-serif;
			font-size: 90%;
		}
		h1{
			font-size: 250%;
		}
		h2{
			font-size: 200%;
		}
	</style>

<div class="top">
			<nav>
			<ul>
				<li><a href="home.php" class="home-page">Home</a>
				<li><a href="about.php" class="about-page">About Us</a>
				<li><a href="buy-property.php" class="prop-page">Properties<span class="material-icons drop-down" style="position: absolute; top: 15%;">
					arrow_drop_down
					</span>
					<span class="material-icons drop-up" style="position: absolute; top: 15%;">
						arrow_drop_up
						</span></a>
					<ul>
						<li><a href="buy-property.php">Buy/Rent</a>
						<li><a href="listProperty.php">List Property</a>
					</ul>
				<li><a href="media.php" class="media-page">Media</a>
				<li><a href="blog.php" class="blog-page">Blog</a>
				<li><a href="contact.php" class="contact-page">Contact Us</a>
				</ul>
		</nav>
	</div>

<header>
		<a href="home.php"><img src="images/rsk-logo.png" class="logo"/></a>
		<div class="header-follow" style="float: right; padding: 5px;">
			<a href="#"><img src="images/fb-icon2.png" alt="fb-icon" style="height: 25px; width: 25px;"></a>
			<a href="#"><img src="images/insta-icon.jpg" alt="insta-icon" style="height: 25px; width: 25px;"></a>
			<a href="#"><img src="images/twitter-icon.jpg" alt="twitter-icon" style="height: 25px; width: 25px; border-radius: 50%;"></a>
		</div>
		<div class="header-login" style="position: absolute; right: 5px; bottom: 5px;">
		<?php if(!isset($_SESSION["id"])){ ?>

		<button type="rectangle"id="myBtn" ><span class="material-icons" style="font-size: 20px;left: 0px; display: inline-block; vertical-align: middle; text-align: center;">
			person
			</span>Login</button>
			<?php } else {?>
				<div class="profile-btn">
				<button id="logout-btn"><a href="">Welcome!<?php echo $_SESSION["name"]; ?></a></button>
				<ul>
					<li><a href="logout.php">Logout</a></li>
					<li><a href="">Profile</a></li>
				</ul>
				</div>
				<style>
					div.profile-btn ul{
						width: inherit;
						display: none;
						position: absolute;
						background-color:	lightblue;
						text-decoration: none;
						list-style: none;
						text-align: center;
						margin: 0;
						z-index: 1;
					}
					div.profile-btn ul li{
						width: 100px;
						color: black;
						font-size: 20px;
					}
					div.profile-btn:hover ul{
						display: block;
					}
					header button#logout-btn {
    					width: auto;
    					height: 25px;
    					cursor: pointer;
    					border-radius: 5px;
    					font-size: 15px;
    					border: none;
    					background: #80eb07;
    					color: rgb(4, 1, 12);
    					font-weight: normal;
					}
					form.login input[type="email"]{
						width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		
					}
				</style>
				<script>

				</script>
				<?php } ?>
		<button id="nav-btn" class="nav-btn" onclick="nav.style.display='block'"><span class="material-icons">
			view_list
			</span>
		</button>
			</div>
	</header>
<button type="rectangle" id="myBtn2" style="z-index: 1;">Contact Us</button>


<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Logged in</title>
    <meta charset="UTF-8">
	<link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-prompt.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/be5a5992b7.js"></script>
</head>
<body>

<div class="topbar">
		<a href="../home.html"><img src="../images/logo.png"></a>
		<ul>
			<li><a href="../home.html">Homepage</a></li>
			<li><a href="category.html">Category</a></li>
			<li><a href="account.html">Account</a></li>
			<li><form method="get" action="../php/search.php"><input type="text" name="search" placeholder="Search for Application"></form></li>
			<li><img src="../images/cart.png"></li>
			<li><img src="../images/menu.png" class="menuicon"></li>
		</ul>

	</div>
	<div class="animation-area">
		<ul class="box-area">
			<li><img src="../images/facebook.png"></li>
			<li><img src="../images/tiktok.png"></li>
			<li><img src="../images/telegram.png"></li>
			<li><img src="../images/instagram.png"></li>
			<li><img src="../images/tomtalking.png"></li>
			<li><img src="../images/classroom.png"></li>
		</ul>
		<ul class="box-area2">
			<li><img src="../images/dontstarve.png"></li>
			<li><img src="../images/templerun2.png"></li>
			<li><img src="../images/subwaysuffer.png"></li>
			<li><img src="../images/plantandzombie2.png"></li>
			<li><img src="../images/zoom.png"></li>
			<li><img src="../images/whereismywater2.png"></li>
		</ul>
        <div class="log-field">
            <p class="log-prompt">
				<?php if (isset($_SESSION['success'])) :
					echo $_SESSION['success']; 
					unset($_SESSION['success']);
				?>
				<?php endif ?>
			</p>
            <p class="appre">
				<?php  if (isset($_SESSION['username'])) : ?>
					<p class="appre">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
					<a href="index.php?logout='1'" style="color: red;"><a href="logout.php"><div class="rt">LOG OUT</div></a></a>
    			<?php endif ?>
			</p>
            <a href="../home.html" style="text-decoration: none;"><div class="rt">RETURN TO HOME PAGE</div></a>
        </div>
	</div>
	<div class="endingOffer">
		<div class="smallContainer">
			<div class="row">
				<div class="col-2">
					<img src="../images/iphone12.png">
				</div>
				<div class="col-2">
					<p>Best Playing devices in the 21th century<p>
					<h2>Iphone pro max 12</h2>
					<small>
						Smart devices is not just for phoning but also for entertainment and working so on. Bigger screen, longer battery with the full-touch display, adjustable brightness, sound, everything is clear and ease-hearing.
					</small>
					<a href="">Click here to buy</a>
				</div>
			</div>
		</div>
	</div>
	<div class="testimonial">
		<div class="smallContainer">
			<div class="row">
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>
						Software is just about talking machine language to a computer. I guarantee 100% of the software I made is super useful and effecient to all people who have downloaded it. Feel free to get my app immediately.
					</p>
					<img src="../images/Minh.png">
					<h3>L?? ????ng Minh</h3>
					<h3>Software Engineering</h3>
				</div>
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>
						The system of the video game is easy like just about eating, any trouble can all be fixed by me within only 1 hour, if having any trouble call to my store office and complain about 519K0013, but we are all known that no complants for me in the last century.
					</p>
					<img src="../images/519K0013.png">
					<h3>Nguy???n ????nh Minh Kh??i</h3>
					<h3>Application Developer</h3>
				</div>
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<p>
						I'm a beta tester, every bug in every games, I can find it easily. With no doubt, I am the one who help all the game writter finding their mistake. If you have found a bug that I have not? Congratulations, you are also a good tester.
					</p>
					<img src="../images/Huy.png">
					<h3>Tr???n Huy</h3>
					<h3>Game Beta tester</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="paymentbrand">
		<div class="smallContainer">
			<div class="row">
				<div class="col-5">
					<img src="../images/paypal.png">
				</div>
				<div class="col-5">
					<img src="../images/mastercard.png">
				</div>
				<div class="col-5">
					<img src="../images/visa.png">
				</div>
				<div class="col-5">
					<img src="../images/gpay.png">
				</div>
				<div class="col-5">
					<img src="../images/applepay.png">
				</div>
			</div>
		</div>		
	</div>
	<div class="footer">
		<div class="smallContainer">
			<div class="row">
				<div class="footer-1">
					<h3>Download KMS store</h3>
					<p>Available right now on ios and android</p>
					<img src="../images/app-store.png">
					<img src="../images/play-store.png">
				</div>
				<div class="footer-2">
					<a href="../home.html"><img src="../images/logo.png"></a>
					<p>Free entertainment application with variuos features is watting for you</p>
				</div>
				<div class="footer-3">
					<h3>Useful Links belows</h3>
					<ul>
						<li>Game for sale</li>
						<li>Top review</li>
						<li>Return policy</li>
						<li>Join Affiliate</li>
					</ul>
				</div>
				<div class="footer-4">
					<h3>Follow us</h3>
					<ul>
						<li>Facebook</li>
						<li>Instagram</li>
						<li>Twitter</li>
						<li>Youtube</li>
					</ul>
					
				</div>
			</div>
			<hr>
			<p class="copyright">Copy Right - Easy Gaming 2021</p>
		</div>
	</div>

</body>
</html>

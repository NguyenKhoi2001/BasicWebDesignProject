<?php include('host.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
	<link href="../css/style.css" rel="stylesheet">
    <link href="../css/accountstyle.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/be5a5992b7.js"></script>
</head>
<body>
<div class="topbar">
		<a href="../home.html"><img src="../images/logo.png"></a>
		<ul>
			<li><a href="../home.html">Homepage</a></li>
			<li><a href="../html/category.html">Category</a></li>
			<li><a href="../html/account.html">Account</a></li>
			<li><form method="get" action="../search.php"><input type="text" name="search" placeholder="Search for Application"></form></li>
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
        <div class="formcontainer-n">
			<div class="formbtn">
				<span>Login</span>
			</div>	
			<form method="post" action="login.php">
				<?php include('errors.php'); ?>
				<input type="text" placeholder="username" name="username">
				<input type="password" placeholder="password" name="password">
				<button type="submit" class="btn" name="login_user">Login</button>
			</form>
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
					<h3>Lý Đăng Minh</h3>
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
					<h3>Nguyễn Đình Minh Khôi</h3>
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
					<h3>Trần Huy</h3>
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

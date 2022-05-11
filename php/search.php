<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/style-search.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/be5a5992b7.js"></script>
</head>
<body>
    <div class="topbar">
		<a href="home.html"><img src="../images/logo.png"></a>
		<ul>
			<li><a href="../home.html">Homepage</a></li>
			<li><a href="../html/category.html">Category</a></li>
			<li><a href="../html/account.html">Account</a></li>
			<li><form method="get" action="search.php"><input type="text" name="search" placeholder="Search for Application"></form></li>
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
        <div class="search-res">
            <h2>SEARCH RESULTS</h2>
            <p id="search-value-holder" style="display: none">
                <?php
                    $search_value = $_GET['search'];
                    echo $search_value;
                ?>
            </p>
            <ul id="app-list">
                <li><a href="../html/app-pubg.html"><img src="../images/pubg.png"><p>PUBG</p></a></li>
                <li><a href="../html/app-gun.html"><img src="../images/gun.png"><p>Gun</p></a></li>
                <li><a href="../html/app-temple-run-2.html"><img src="../images/templerun2.png"><p>Temple Run 2</p></a></li>
                <li><a href="../html/app-dont-starve.html"><img src="../images/dontstarve.png"><p>Don't Starve</p></a></li>
                <li><a href="../html/app-plants-vs-zombies.html"><img src="../images/plantandzombie2.png"><p>Plants vs Zombies</p></a></li>
                <li><a href="../html/app-where-is-my-water-2.html"><img src="../images/whereismywater2.png"><p>Where is my water 2</p></a></li>
                <li><a href="../html/app-clash-of-clans.html"><img src="../images/classofclan.png"><p>Class of Clans</p></a></li>
                <li><a href="../html/app-facebook.html"><img src="../images/facebook.png"><p>Facebook</p></a></li>
                <li><a href="../html/app-tiktok.html"><img src="../images/tiktok.png"><p>Tiktok</p></a></li>
                <li><a href="../html/app-instagram.html"><img src="../images/instagram.png"><p>Instagram</p></a></li>
                <li><a href="../html/app-zingmp3.html"><img src="../images/zingmp3.png"><p>ZingMP3</p></a></li>
                <li><a href="../html/app-soundcloud.html"><img src="../images/soundcloud.png"><p>Soundcloud</p></a></li>
                <li><a href="../html/app-line.html"><img src="../images/socialmedia.png"><p>Line</p></a>
            </ul>
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
                    <a href="home.html"><img src="../images/logo.png"></a>
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
    <script type="text/javascript">
        searching();
        function searching() {
            var search_value = document.getElementById("search-value-holder").textContent;
            search_value = search_value.trim().toUpperCase();
            var ul = document.getElementById("app-list");
            var li = ul.getElementsByTagName("li");
            var p, text;
            for(var i = 0; i < li.length; i++) {
                p = li[i].getElementsByTagName("p")[0];
                text = p.textContent;
                /*if(text.toUpperCase().indexOf(search_value) > -1)
                alert("s"+search_value.trim()+"vs"+text.toUpperCase()+"e"+text.toUpperCase().includes(search_value));*/
                if(text.toUpperCase().includes(search_value)) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Caf&eacute;!</title>
	<link rel="stylesheet" href="css/styles.css">
</head>

<body class="bodyStyle">

	<div id="header" class="mainHeader">
		<hr>
		<div class="center">ABITHACaf&eacute;</div>
	</div>
	<br>
	<?php
		// Get the application environment parameters from the Parameter Store.
		include ('getAppParameters.php');

		// Display the server metadata information if the showServerInfo parameter is true.
		include('serverInfo.php');
	?>
	<hr>
	<div class="topnav">
		<a href="index.php">Home</a>
		<a href="#aboutUs">About Us</a>
		<a href="#contactUs">Contact Us</a>
		<a href="menu.php">Menu</a>
		<a href="orderHistory.php">Order History</a>
	</div>
	<hr>
	<div id="mainContent">

		<div id="mainPictures" class="center">
			<table>
				<tr>
					<td><img src="https://www.tastingtable.com/img/gallery/18-must-try-indian-mithai/intro-1670865737.jpg" height=auto width="490"></td>
					<td><img src="https://res.cloudinary.com/hz3gmuqw6/image/upload/c_fill,q_60,w_750,f_auto/7-pani-puri-canva-phpxM6qmK" height=auto width="450"></td>
				</tr>
			</table>
			<hr>
			<p>Our caf&eacute;  an assortment of delicious and delectable pastries and coffees that will put a smile on your face. From cookies to croissants, tarts and cakes, each treat is especially prepared to excite your tastebuds and brighten your day!</p>
			<br>
			<table>
				<tr>
					<td bgcolor="aquamarine">
						<div class="cursiveText">Frank bakes a rich variety of cookies. Try them all!</div>
						<table>
							<tr>
								<td><img src="images/Cookies.jpg" height=auto width="300"></td>
							</tr>
						</table>
					</td>
					<td bgcolor="orange">
						<table>
							<tr>
								<td><img src="images/Cup-of-Hot-Chocolate.jpg" height=auto width="200"></td>
								<td class="cursiveText">Tea,<br>Coffee,<br>Lattes,<br> and Hot Chocolate.<br>Yes, we have it!</td>
							</tr>
						</table>
					</td>
					<td bgcolor="aquamarine">
						<div class="cursiveText">Our tarts are always <br/> a customer favorite!<br><br>
					  </div>
						<table>
							<tr>
								<td><img src="images/Strawberry-Tarts.jpg" height=auto width="170"></td>
								<td><img src="images/Strawberry-Blueberry-Tarts.jpg" height=auto width="170"></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<hr>
		</div>
	</div>

	<div id="aboutUs" class="center">
		<hr>
		<div>
			<h2>About Us</h2>
		</div>
			<table>
				<tr>
					<td><img src="https://b.zmtcdn.com/data/pictures/1/20626791/7bafabdfd670d85e5bd4e8e96a2b3972_featured_v2.jpg" height=auto width="400"></td>
					<td><p>Geetha and Abitha have been adding sweetness to their customers' lives since 2020.  Frank's recipes have been passed down from his mother and use simple and fresh ingredients to produce delightful flavors.  Both of them will personally greet you with a welcoming smile when you visit!</p></td>
				</tr>
			</table>
			<hr>
		</div>

	<div id="contactUs" align="center">
		<hr>
		<div>
			<h2>Contact Us</h2>
		</div>
		<table>
			<tr>
				<td><img src="images/Coffee-Shop.jpg" height=auto width="120"></td>
			</tr>
		</table>
		<div><p>123 Any Street<br>Any Town, USA<br><br>Tel: +1-800-555-0193</p></div>
		<div>
			<h3>Hours</h3>
		</div>
		<div>Weekdays: 6:00am - 6:00pm<br>Saturday: 7:00am - 8:00pm<br>Closed on Sundays</div>
	</div>

	<div id="Copyright" class="center">
		<h5>&copy; 2020, Amazon Web Services, Inc. or its Affiliates. All rights reserved.</h5>
	</div>
</body>
</html>

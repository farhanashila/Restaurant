<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Booking</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="style15.css" media="all" />
	
	
</head>
<body>
<section class="keya">
<marquee bgcolor="#f8f6f3">
<div class="food1"><img src="img/2.png" alt="food"/></div>
<div class="food2"><h1>Maxicun Spicy</h1></div>
</marquee>
<div class="a"><a href="index.php">Home</a></div>
<div class="b"><a href="menu1.php">Menu</a></div>
<div class="c"><a href="booking.php">Booking</a></div>
<div class="d"><a href="check.php">Check Status</a></div>
<div class="e"><a href="deletenews.php?logout=ture">Logout</a></div>
<div class="img"><img src="img/nil.jpg" alt="pasta"/></div>
</section>
<section class="bita">
<div class="newsevents">
<div class="kk"><b>NEWS & EVENTS</b></div>
<marquee direction="up"><div class="kkk">
<ul>
	<?php 
	include 'lib/user.php';
	$u = new User();
	$news = $u->getAllNews();
	foreach ($news as $value) {
	 ?>
<li><?= $value['news']; ?></li></br>
<?php } ?>
</ul></div></marquee></div>
<img src="img/Capture8.png" class="thh"/>
<div class="h">
	
<form action="" method="post">
<div class="ll">Choose Table No<br/><select name="id">
<option value="1">Table No-1</option>
<option value="2">Table No-2</option>
<option value="3">Table No-3</option>
<option value="4">Table No-4</option>
<option value="5">Table No-5</option>
<option value="6">Table No-6</option>
<option value="7">Table No-7</option>
<option value="8">Table No-8</option>
</select><br/>
Seats<br/>
<input type="text" name="person" placeholder="Enter Number of Person's" required></div><br/>
Time<br/>
<input type="time" name="timest" placeholder="hh:mm:ss" required><br/>
Date<br/>
<input type="date" name="datest" required><br/>
<table>
<tr><td><input type="submit" name="submit" value="send"></td></td></tr>
</table>
</form>
</div>
</section>
<?php 
		if (isset($_POST['submit'])) {
			if ($stat = $u->Book($_POST)) {
			    	echo '<p style="color:Green">Table booked !! Requesr Id is '.$stat.'</P>'; 
			   } 
			    else {
			      echo '<p style="color:red">Booking Failed !!</P>';
			    }
		}
	 ?>
</body>
</html>
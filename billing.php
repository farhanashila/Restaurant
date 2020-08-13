<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>User homepage</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="style18.css" media="all" />
	<style type="text/css">
		form{
			display: inline-block; float: left; margin: 10px; padding: 10px;
		}
		form label{
			margin: 5px;
			padding: 0px;
			width: 300px;
		}
		form input, select{
			margin: 5px;
			padding: 0px;
			width: 300px;
		}
	</style>
	
</head>
<body>
<section class="keya">
<marquee bgcolor="#f8f6f3">
<div class="food1"><img src="img/2.png" alt="food"/></div>
<div class="food2"><h1>Maxican Spicy</h1></div>
</marquee>
<!-- employee navigation -->
<?php include 'nav/employeemenu.php'?>
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
<a href="printbill.php">Print Bill</a>
<h1>Billing Panel</h1>
<?php 
	if (isset($_POST['submit'])) {
 	 	if ($u->insertBill($_POST)) {
 	 		echo '<p>Bill Submitted Succesfully!!</p>';
 	 	}
	}
 ?>
 <div>

<form action="" method="post">
<label for="cname">Customer Name</label>
<input type="text" name="cname" id="cname" placeholder="Your Name"><br>
<label for="category">Choose Product</label>
<select name="category">
	<option value="North India">Burger</option>
	<option value="Thai">Sub</option>
	<option value="Chinese">Chup</option>
	<option value="Bangladeshi">Drink's</option>
</select><br>
<label for="pname">Product Name</label>
<select id="pname" name="pname">
 	<?php 
 	 	$var = $u->getAllPro();
 	 	var_dump($var);
 	 	foreach ($var as $v) { 
 	 		echo '<option value="'.$v["name"].'">'.$v["name"].'</option>';
       
 	 	}
 	  ?>
 </select><br>
<label for="price">Price</label>
<input type="text" name="price" id="price"><br>
<label for="qntty">Enter Your Quantity</label>
<input type="text" name="qntty"><br>
<input type="submit" name="submit" value="SEND"><input type="submit" value="GENERATE BILL">
</form>
 	
 </div>
</section>
</body>
</html>
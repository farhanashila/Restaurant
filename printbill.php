<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>User homepage</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="style18.css" media="all" />
	
</head>
<body>
	<a href="billing.php" style="align-self: center;">Go Back</a>
	<form action="" method="post">
		<label for="name">Customer Name</label>
		<input type="text" name="cname" id="name">
		<input type="submit" name="submit" value="Get Bill">
	</form>
<?php 
if (isset($_POST['submit'])) {
	include 'lib/user.php';
	$u = new User(); 
	$data = $u->getAllbill($_POST);
	$sl =0;
	$total = 0;
	?>
	<table style="border: 1px solid;width: 100%; margin: 3px; padding: 3px; border-collapse: collapse;text-align: center;">
		<caption style="background-color:red;color: green; font-weight: bold;font-size: 33px;">User List</caption>
		<tr style="border: 1px solid">
			<th style="border: 1px solid" >sl</th>
			<th style="border: 1px solid">Product Name</th>
			<th style="border: 1px solid">Price</th>
		</tr>
		<?php foreach ($data as $usr): ?>
		<tr>
			<td style="border: 1px solid"><?= ++$sl; ?></td>
			<td style="border: 1px solid"><?= $usr['pname'] ?></td>
			<td style="border: 1px solid"><?php 
			$total = $total +$usr['bill']; ?><?= $usr['bill'] ?></td>
		</tr>
		<?php endforeach ?>
		
	</table><p style="float: right; font-weight: border; margin-right: 200px; font-size: 33px;">Tota : <?= $total; ?></p>
<?php	} ?>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Good Sounds Recording</title>
	<link rel="stylesheet" href="css/recording.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>

<body>
<a id="TOP"></a>
<div class="navbar">
<ul class="navbar">
  <li><a href="index.html" class="here">Home</a></li>
  <li><a href="reservations.html">Reservations</a></li>
  <li><a href="services.html">Services</a></li>
  <li><a href="contact.html">Contact</a></li>
</ul>
</div>

<!-- Titlebar -->
<div class="titlebar">
<h1>Good Sounds Recording</h1>
</div>

<!-- Main content -->
<div class="main">

<?php

	$name = strip_tags($_POST["name"]);
	$email = strip_tags($_POST["email"]);
	$date = $_POST["date"];
	$studio = $_POST["studio"];

	if (empty($name) || empty($email) || empty($date) || empty($studio))
	{
		echo "Please fill in all fields.";
	}
	else
	{
		// create connection
		mysql_connect("mysql.scottsurette.com","surette","scottgoodsounds") or die("Unable to connect to MySQL");
		mysql_select_db("goodsoundsrecording");

  	$sql = "INSERT INTO reservations (studio, email, date)
		VALUES ('$studio','$email', '$date')";

		$result = mysql_query($sql);

		if($result)
		{
			$subject = "Reservation Confirmed";
			$header = "From: scott@scottsurette.com\n";
			$message = "Your reservation on $date has been confirmed!";

			mail($email, $subject, $message, $header);

			echo "<p>Hello, $name! Your reservation on $date has been confirmed!</p>";
		}
		else
		{
			echo "There was an error with your reservation.";
		}

		mysql_close();
	}
?>

<hr />

<p><em><a href="credits.html">credits</a></em></p>

</div>

</body>
</html>

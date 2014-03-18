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
	$comment = strip_tags($_POST["comment"]);

	if (empty($name) || empty($email) || empty($comment))
	{
		echo "Please fill in all fields.";
	}
	else
	{
		$subject = "Question/Comment from $email";
		$header = "From: contact@scottsurette.com\n";

		mail("scott@scottsurette.com", $subject, $comment, $header);

		echo "<p>Thanks, $name! Your question/comment has been received!</p>";
	}
?>

<hr />

<p><em><a href="credits.html">credits</a></em></p>

</div>

</body>
</html>

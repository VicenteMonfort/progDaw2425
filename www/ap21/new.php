<?php

require_once "autoload.php";

$cartera = new Cartera();
if (count($_POST) > 0) {
	$cartera->insert($_POST);
	header("location: list.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>New Client Form</title>
	<link rel="stylesheet" type="text/css" href="./editStyle.css" media="all">
	
</head>

<body id="main_body">

	<div id="form_container">

		<h1><a>New Client Form</a></h1>
		<form id="form_36409" class="appnitro" method="post" action="new.php">
			<div class="form_description">
				<h2>New Client Form</h2>
				<p>DAW 23-24</p>
			</div>
			<ul>

				<li id="li_1">
					<label class="description" for="id">id </label>
					<div>
						<input id="id" name="id" class="element text small" type="text" maxlength="10" value="" />
					</div>
				</li>
				<li id="li_2">
					<label class="description" for="company">company </label>
					<div>
						<input id="company" name="company" class="element text medium" type="text" maxlength="255" value="" />
					</div>
				</li>
				<li id="li_3">
					<label class="description" for="investment">Investment </label>
					<div>
						<input id="investment" name="investment" type="number" value="" />
					</div>
				</li>
				<li id="li_4">
					<label class="description" for="date">Date </label>
					<input id="date" name="date" type="date" />
				</li>
				<li id="li_5">
				<label class="active" for="active">Active </label>
					<div>
						<input id="active" name="active" type="number" value="" />
					</div>
				</li>

				<li class="buttons">
					<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
				</li>
			</ul>
		</form>
		<div id="footer">
			Generated by <a href="http://www.daw23-24.org">DAW 23-24</a>
		</div>
	</div>
</body>

</html>
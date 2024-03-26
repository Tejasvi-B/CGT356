<?php

@ $db = mysqli_connect("goss.tech.purdue.edu", "cgt356web1e", "Acoustic1e8704"); //my username for the sql workspace and the password that goes with it
mysqli_select_db($db, "cgt356web1e") or die(mysqli_error());

if(!$db)
{
	echo("Error: Could not connect to database. Please try again later.");
	exit;
}

?>
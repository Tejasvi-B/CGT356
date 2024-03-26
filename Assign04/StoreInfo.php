<?php
session_start();//starts the session
header("Cache-Control: no-cache");

if( !empty($_POSR["name"]) )
	$_SESSION["name"]     = $_POST["name"];
if( !empty($_POSR["address"]) )
	$_SESSION["address"]  = $_POST["address"];
if( !empty($_POSR["city"]) )
	$_SESSION["city"]     = $_POST["city"];
if( !empty($_POSR["state"]) )
	$_SESSION["state"]    = $_POST["state"];
if( !empty($_POSR["zip"]) )
	$_SESSION["zip"]      = $_POST["zip"];
if( !empty($_POSR["country"]) )
	$_SESSION["country"]  = $_POST["country"];
if( !empty($_POSR["phone"]) )
	$_SESSION["phone"]    = $_POST["phone"];
if( !empty($_POSR["email"]) )
	$_SESSION["email"]    = $_POST["email"];
if( !empty($_POSR["comments"]) )
	$_SESSION["comments"] = $_POST["comments"];

//Prevent people from navigating directly to this page
if ((empty($_POST["name"]))  || (empty($_POST["address"])) ||
	(empty($_POST["city"]))  || (empty($_POST["state"])) ||
	(empty($_POST["zip"]))   || (empty($_POST["country"])) ||
	(empty($_POST["phone"])) || (empty($_POST["email"])) ||
	(empty($_POST["comments"])) 
   
   )
{
$_SESSION["errorMessage"] = "* Please fill out all of the required fields";
	header("Location: index.php");
	exit;
}

if(empty($_POST["Sname"]) )
{
	// copy billing from shipping
 	$_SESSION["Sname"]    = $_SESSION["name"];
	$_SESSION["Saddress"] = $_SESSION["address"];
	$_SESSION["Scity"]    = $_SESSION["city"];
	$_SESSION["Sstate"]   = $_SESSION["state"];
	$_SESSION["Szip"]     = $_SESSION["zip"];
	$_SESSION["Scountry"] = $_SESSION["country"];

}
else
{
	$_SESSION["Sname"]    =$_POST["Sname"];
    $_SESSION["Saddress"] = $_POST["Saddress"];
	$_SESSION["Scity"]    = $_POST["Scity"];
	$_SESSION["Sstate"]   = $_POST["Sstate"];
	$_SESSION["Szip"]     = $_POST["Szip"];
	$_SESSION["Scountry"] = $_POST["Scountry"];
}

//redirect 
header("Location:DisplayInfo.php")

?>
<?php
session_start();
// add a check to not allow people to directly navigate to this page 

if (empty($_POST["name"]) )
{
	header("location:index.php");
}

$_SESSION["errorMessage"] = "";

?>

////Start Page////

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assign 04 DisplayInfoPage</title>
	<style type="text/css">
		fieldset { padding: 10px; border: 1px solid #ccc; width: 400px; overflow: auto; margin: 10px;}
		fieldset#billing{position: absolute; top: 60px; left: 20px;}
		fieldset#shipping{position: absolute; top: 60px; left: 460px ;}
		fieldset#submit{position: absolute; top: 540px; left: 20px; width: 840px; text-align: center;}
		legend {color: #000099; margin: 0 10px 0 0; padding: 0 5px; font-size: 11pt; font-weight: bold;}
		fieldset input#SubmitBtn {background: #e5e5e5; color: #000099; border: 1px solid #ccc; padding: 5px; width: 150px;}
		label span {color: #ff0000;}
		ul { list-style: none; margin-top: 5px;}
		ul li { display: block; float: left; width: 100%; height: 1%;}
		ul li label {float: left; padding: 7px; color: #6666ff; }
		ul li input, ul li textarea {float: right; margin-right: 10px; border: 1px solid #ccc; padding: 3px;}
		li input: focus, li textarea: focus {border: 1px solid #666;}
		
		ul li span {float: left; margin-left: 10px; font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";}
	</style>
</head>

<body>
	<h1 style="font-size: 14pt; text-indent: 360px;">Assign03 - DisplayFormData Page </h1>
	
	<form id="form0" method="post" action="displayFormData.php">
		<fieldset id="billing">
			<legend> Billing Information</legend>
			<ul> 
				<li> <span> <?php echo($_POST["name"]); ?> </span> </li>
				<li> <span> <?php echo($_POST["address"]); ?> </span> </li>
				<li> <span> <?php echo($_POST["city"]); ?>, <?php echo($_SESSION["state"]); ?>, <?php echo($_SESSION["zip"]); ?></span> </li>
				<li> <span> <?php echo($_POST["country"]); ?> </span> </li>
				<li> <span> <?php echo($_POST["phone"]); ?> </span> </li>
				<li> <span> <?php echo($_POST["email"]); ?> </span> </li>
			</ul>
		</fieldset>
		<fieldset id="shipping">
			<legend>Shipping Information (if different from billing) </legend>
			<ul> 
				<li> <span> <?php echo($_POST["Sname"]); ?> </span> </li>
				<li> <span> <?php echo($_POST["Saddress"]); ?> </span> </li>
				<li> <span> <?php echo($_POST["Scity"]); ?>, <?php echo($_SESSION["Sstate"]); ?>, <?php echo($_SESSION["Szip"]); ?></span> </li>
				<li> <span> <?php echo($_POST["Scountry"]); ?> </span> </li>
			</ul>
		</fieldset>

	</form>
	
	<div id="nav"><span id="nav1"><a href="index.php"> Continue Updating</a></span><span id="nav2"><a href="finishedUpadte.php">Finished Updating</a></span></div>

</body>
</html>
<?php
session_start();
include("includes/openDbConn.php");

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Assign05 - Select</title>
</head>

<body>
<?php
	$sql = "SELECT UserID, LastName, FirstName, Title FROM usersLab5";
	
	$result = mysqli_query($db, $sql);
	
	if(empty($result))
		$num_results = 0;
	else
		$num_results = mysqli_num_rows($result);
	
?>
	
	<h1 style="text-align: center;">Assign05 - Select</h1>
	
	<?php
	include("includes/menu.php");
	?>
	<table style="border: 60px; width: 500px; padding: 0px; margin: 0px auto; border-spacing: 0px;" title="Listing of Users">
		<thead>
			<tr>
				<th colspan="4" style="font-weight: bold; background-color: #b1946c; text-align: center; text-decoration: underline;">UsersLab5 table</th>
			</tr>
			<tr>
				<th style="background-color: #b1946c; font-weight: bold;">UserID</th>
				<th style="background-color: #b1946c; font-weight: bold;">LastName</th>
				<th style="background-color: #b1946c; font-weight: bold;">FirstName</th>
				<th style="background-color: #b1946c; font-weight: bold;">Title</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="4" style="text-align: center; font-style: italic;">Information pulled from MySQL database</td>
			</tr>
		</tfoot>
		<tbody>
			<?php
			for($i=0; $i<$num_results; $i++)
			{
				$row = mysqli_fetch_array($result);
				
				?>
				<tr>
					<td style="border-right: 1px solid #000000;"><?php echo( trim($row["UserID"]) );  ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo( trim($row["LastName"]) );  ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo( trim($row["FristName"]) );  ?></td>
					<td><?php echo( trim($row["Title"]) );  ?></td>
				</tr>
			<?php
			}//end of for loop
			?>
		</tbody>	
	</table>
	
	<p>&nbsp;</p>
	
	<?php
	$sql = "SELECT ShipperID, CompanyName, Phone FROM shippersLab5";
	
	$result = mysqli_query($db, $sql);
	
	if(empty($result))
		$num_results = 0;
	else
		$num_results = mysqli_num_rows($result);
	
	?>
	<table style="border: 60px; width: 500px; padding: 0px; margin: 0px auto; border-spacing: 0px;" title="Listing of Shippers">
		<thead>
			<tr>
				<th colspan="4" style="font-weight: bold; background-color: #b1946c; text-align: center; text-decoration: underline;">ShippersLab5 table</th>
			</tr>
			<tr>
				<th style="background-color: #b1946c; font-weight: bold;">ShipperID</th>
				<th style="background-color: #b1946c; font-weight: bold;">CompanyName</th>
				<th style="background-color: #b1946c; font-weight: bold;">Phone</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="4" style="text-align: center; font-style: italic;">Information pulled from MySQL database</td>
			</tr>
		</tfoot>
		<tbody>
			<?php
			for($i=0; $i<$num_results; $i++)
			{
				$row = mysqli_fetch_array($result);
				
				?>
				<tr>
					<td style="border-right: 1px solid #000000;"><?php echo( trim($row["ShipperID]]"]) );  ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo( trim($row["CompanyName"]) );  ?></td>
					<td style="border-right: 1px solid #000000;"><?php echo( trim($row["FristName"]) );  ?></td>
					<td><?php echo( trim($row["Phone"]) );  ?></td>
				</tr>
			<?php
			}//end of for loop
			?>
		</tbody>
	</table>
	
<?php
include("includes/closeDbConn.php");	
	
?>
	


	
</body>
</html>
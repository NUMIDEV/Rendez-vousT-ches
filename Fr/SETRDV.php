<?php 
require '../connect.php';
if (isset($_POST['ok'])) {
	$Nom=$_POST['Nom'];
	$Endroit=$_POST['Endroit'];
	$Objet=$_POST['Objet'];
	$Details=$_POST['Details'];
	$Horloge=$_POST['Horloge'];
	$Ntel=$_POST['Ntel'];

	$Date=$_POST['Date'];
	$timestamp = strtotime($Date);
    // Creating new date format from that timestamp
    $Date1 = date("d-m-Y", $timestamp);

$req="INSERT INTO `rendezvous`( `Nom`, `Endroit`, `Objet`, `Details`, `Date`, `Horloge`, `Ntel`) VALUES ('$Nom', '$Endroit', '$Objet', '$Details', '$Date', '$Horloge', '$Ntel')";
$query=mysqli_query($con,$req);

}

  ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
	<style type="text/css">
		td{
	 text-align: center;

}

input{
padding: 10px;
}
	</style>
</head>
<body>
 
<form  method="POST"  action="<?php echo $_SERVER['PHP_SELF'];   ?>" >
<center><br><br><div class="hide2"  style="border: solid 1px grey ; border-radius: 20px;padding:5px;background: white"><table>
	<h1 style="color:grey;">Planifier un rendez-vous</h1>

	<tr><td><input type="text" name="Nom"  placeholder="Nom"></td></tr>

	<tr><td><input type="text" name="Ntel"  placeholder="N°Tel"></td></tr>
	<tr><td><input type="text" name="Endroit" placeholder="L'endroit du rendez-vous"></td></tr>
	<tr><td><input type="text" name="Objet" placeholder="Objet"></td></tr>
		<tr><td><textarea  cols="30" rows="4" name="Details" placeholder="Details" style="padding: 10px;"></textarea></td></tr>
	<tr><td><input type="date" name="Date" style="margin-right:  3px;"><input type="time" name="Horloge" style="margin-left:  3px;"></td></tr>
	<tr><td><input type="submit" name="ok" value="Planifier" style="background: red;padding: 10px;color: white;border-radius:  10px;border: none;" ></td></tr>
</table></div></center>
</form>

</body>
</html>
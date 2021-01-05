<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

	<style type="text/css">
	.zoomer:hover{
background: white;
transform: scale(1.2);    
	}
		td{
	 text-align: center;
padding:5px;
}

input{
padding: 10px;
}

	</style>
</head>
<body>
<br><br>
<form    method="GET"  action="showRDV.php" >


<center>
	<br><br><br><br>
	<div class="hide1"  style="border: solid 1px grey ; border-radius: 20px;padding:50px;background: white"><table>
	<h1 style="color:grey;">Look for appointments</h1>

	<tr><td><input type="date" name="Date1" ></td></tr>
	<tr><td> 
		<input type="submit" name="ok1" value="Search" style="background: red;padding: 10px;color: white;border-radius:  10px;border: none;" >
	</td></tr>
</table></div></center>
</form>


</body>
</html>
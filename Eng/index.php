<?php 

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" >
	<style type="text/css">
html,body{
	padding: 0;
	margin: 0;
	width: 100%;
	overflow:hidden;
}
	
   .division1{
   	padding:5%;
   	width: 40%;
   	float: left;

   }

     .division2{
     padding:5%;
   	width: 40%;
   	float:right;

   } 
    @media screen and (orientation: portrait) {

     .division1{
   	margin-top: 50px;
   	padding: 4%;
   	width: 90%;
   	float: left;
   }

     .division2{
   	width: 90%;
   	float:right;
   } 

    }
     
	</style>
</head>
<body style="background:#DCDCDC;">
		<center style="position: fixed;width: 100%" >
		<div style="width:17%;background:#6495ED;color:white;padding: 10px ;border-radius: 10px;border: none;line-height: 25px;">
	<?php 
	$mydate=getdate(date("U"));
	date_default_timezone_set("Africa/Algiers");


	echo "$mydate[weekday], $mydate[mday] $mydate[month], $mydate[year]"; 
	echo "<br><center>" . date("h:i:sa")."</center>";
	?>
		
	<select onchange="document.location.href=this.value">
	
    <option   ><dt>English</dt></option>
      <option  value="../Ar"><dt >العربية  </dt></option>
    <option value="../Fr"><dt >Français</dt></option>
</select>
	</div></center>

<div style="width: 100%">
	<div class="division1" >
<?php require "SETRDV.php"; ?> 
	</div><div  class="division2"  >

	
	<?php require "GETRDV.php";?>
</div></div>
	
</body>
</html>
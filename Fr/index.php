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
	overflow: hidden;
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

$jour="a";

if ("$mydate[weekday]"=="Monday") {
	$jour="Lundi";
}
if ("$mydate[weekday]"=="Tuesday") {
	$jour="Mardi";
}
if ("$mydate[weekday]"=="Wednesday") {
	$jour="Mercredi";
}
if ("$mydate[weekday]"=="Thursday") {
	$jour="Jeudi";
}
if ("$mydate[weekday]"=="Friday") {
	$jour="Vendredi";
}
if ("$mydate[weekday]"=="Saturday") {
	$jour="Samedi";
}
if ("$mydate[weekday]"=="Sunday") {
	$jour="Dimanche";
}


$mois="a";

if ("$mydate[month]"=="January") {
$mois="Janvier";
}if ("$mydate[month]"=="February") {
	$mois="Février";
}if ("$mydate[month]"=="March") {
	$mois="Mars";
}if ("$mydate[month]"=="April") {
	$mois="Avril";
}if ("$mydate[month]"=="May") {
$mois="Mai";
}if ("$mydate[month]"=="June") {
	$mois="Juin";
}if ("$mydate[month]"=="July") {
	$mois="Juillet";
}if ("$mydate[month]"=="August") {
	$mois="Aout";
}if ("$mydate[month]"=="September") {
	$mois="Septembre";
}if ("$mydate[month]"=="October") {
	$mois="Octobre";
}if ("$mydate[month]"=="November") {
	$mois="Novembre";
}if ("$mydate[month]"=="December") {
$mois="Décembre";
}
	echo "$jour, $mydate[mday] $mois, $mydate[year]"; 
	echo "<br><center>" . date("h:i:sa")."</center>";
	?>
	<select onchange="document.location.href=this.value">
	
    <option ><dt >Français</dt></option>
    <option  value="../Eng" ><dt>English</dt></option>
      <option  value="../Ar"><dt >العربية  </dt></option>
</select></div>

</center>

<div style="width: 100%">
	<div class="division1" >
<?php require "SETRDV.php"; ?> 
	</div><div  class="division2"  >

	
	<?php require "GETRDV.php";?>
</div></div>
	<div style="color: red;font-weight: bold;position: fixed;right:0;bottom: 0;margin-right:10px">Made by Numidev</div>
</body>
</html>
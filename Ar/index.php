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
	$jour="الاثنين    ";
}
if ("$mydate[weekday]"=="Tuesday") {
	$jour="الثلاثاء  ";
}
if ("$mydate[weekday]"=="Wednesday") {
	$jour="الاربعاء    ";
}
if ("$mydate[weekday]"=="Thursday") {
	$jour="الخميس   ";
}
if ("$mydate[weekday]"=="Friday") {
	$jour="الجمعة   ";
}
if ("$mydate[weekday]"=="Saturday") {
	$jour="السبت    ";
}
if ("$mydate[weekday]"=="Sunday") {
	$jour="الاحد    ";
}



$mois="a";

if ("$mydate[month]"=="January") {
$mois="يناير  ";
}if ("$mydate[month]"=="February") {
	$mois="فبراير  ";
}if ("$mydate[month]"=="March") {
	$mois="مارس   ";
}if ("$mydate[month]"=="April") {
	$mois="أبريل   ";
}if ("$mydate[month]"=="May") {
$mois="مايو  ";
}if ("$mydate[month]"=="June") {
	$mois="جوان  ";
}if ("$mydate[month]"=="July") {
	$mois="جويلية   ";
}if ("$mydate[month]"=="August") {
	$mois="أوت   ";
}if ("$mydate[month]"=="September") {
	$mois="سبتمبر  ";
}if ("$mydate[month]"=="October") {
	$mois="أكتوبر   ";
}if ("$mydate[month]"=="November") {
	$mois="نوفمبر   ";
}if ("$mydate[month]"=="December") {
$mois="ديسمبر  ";
}



	echo " $mydate[year]  $jour  $mydate[mday] $mois"; 
	echo "<br><center>" . date("h:i:sa")."</center>";
	?>
	<select onchange="document.location.href=this.value">
	
      <option ><dt >العربية  </dt></option>
    <option  value="../Fr"><dt >Français</dt></option>
    <option  value="../Eng" ><dt>English</dt></option>
</select>

</div>

</center>

<div style="width: 100%">
	<div class="division1" >
<?php require "SETRDV.php"; ?> 
	</div><div  class="division2"  >

	
	<?php require "GETRDV.php";?>
</div></div>
	
</body>
</html>
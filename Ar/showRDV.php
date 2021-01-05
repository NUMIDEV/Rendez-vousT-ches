

  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  	<meta charset="utf-8">
    <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="../fontawesome/css/brands.css" rel="stylesheet">
  <link href="../fontawesome/css/solid.css" rel="stylesheet">
  	<style type="text/css">
  	html{
  		padding: 0px;
  		margin: 0px;
  	}
  		body{
  		padding: 0px;
  		margin: 0px;
  	}
  			td{
	 text-align: center;
padding:5px;
}
  		 @media screen and (orientation: portrait) {
  		 	.marginTab{
  		 		 padding-right:200px;
  		 	}
.body{

	  transform: rotate(90deg);
    transform-origin:bottom left;
    
    position:absolute;
  top: -100vw;
  left:0;
    
    height:100vw;
    width:100vh;
    font-size: 25px;

    overflow:hidden;
}
.zoomer{
  font-size: 40px;
}
 }
  	</style>
  </head>
  <body style="background:#DCDCDC;">
     <a href="index.php"> <i style="position: absolute;size: 50px;color: red;font-size: 30px;margin:10px;" class="fas fa-arrow-circle-left"></i></a>
  <?php 
require '../connect.php';

	
	$Date1=$_REQUEST['Date1'];

$timestamp = strtotime($Date1);
// Creating new date format from that timestamp
$Date2 = date("d-m-Y", $timestamp);

$req1="SELECT * FROM rendezvous where `Date`='$Date1'";
$query1=mysqli_query($con,$req1);
	
	$i=0;$j=0;
while ($row1=mysqli_fetch_assoc($query1)) {


if($j==0){


echo "<br><br><br><br><center class='body' style=''><table class='marginTab'>
  <h1 id='get2' style='color:grey;'>مواعيد يوم     $Date2</h1><br>
  <tr style='outline: thin solid grey;background:#787575;color:white;padding:0px;margin:0px'>
  <td >الموضوع   </td>
  <td >الإسم   </td>
  <td >رقم الهاتف    </td>
  <td >المكان   </td>
  <td >التوقيت   </td>
  <td >التفاصيل   </td></tr>"; 

}

$j=$j+1;




   $i=1;
	echo "<tr  style='outline: thin solid grey;background:#EBF7FE'>
	  <td '>".$row1['Objet']."</td>
	  <td >".$row1['Nom']."</td>
	 <td >".$row1['Ntel']."</td>
	 <td >".$row1['Endroit']."</td>   
	   <td >".$row1['Horloge']."</td>
	   <td  >".$row1['Details']."</td></tr>";

$row1=mysqli_fetch_assoc($query1);
  
	echo "<tr  style='outline: thin solid grey;background:#CDCCCC'>
	  <td '>".$row1['Objet']."</td>
	  <td >".$row1['Nom']."</td>
	 <td >".$row1['Ntel']."</td>
	 <td >".$row1['Endroit']."</td>
	   <td >".$row1['Horloge']."</td>
	   <td  >".$row1['Details']."</td></tr>";

}

echo "</table></center>";
if ($i==0) {

	echo "<center>  <h1 id='get2' style='color:grey;'>مواعيد يوم     $Date2</h1><br>
<h3><span class='zoomer' style='color: red'>لا توجد مواعيد ليوم ".$Date2."</span></h3></center>";	
}



  ?>
  </body>
  </html>
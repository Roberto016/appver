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
<div class="regresar"><a href="vinos.html"><img src="images/regresar.png" /></a></div>
<div class="f2">
  
  
 
<br />




<center>

  <? 
  
  $torres=$_POST['torres'];
  $martell=$_POST['martell'];
  $marques=$_POST['marques'];
  $muralles=$_POST['muralles'];
  $abadal=$_POST['abadal'];
  $blanco=$_POST['blanco'];
  $cabernet=$_POST['cabernet'];
  

echo "<table>";
echo"<br>";
echo "<tr align=center ><td colspan=5 style='border:2px dotted #00CC00' >Su compra es :</td></tr>";

echo "<tr align=center><td style='border:2px dotted #FF0000'>Producto</td><td style='border:2px dotted #FF0000'> Precio </td><td style='border:2px dotted #FF0000'>Cantidad Adquirida</td><td style='border:2px dotted #FF0000'>Total</td></tr>";

if($torres>0){
	$t1=226.81*$torres;
echo "<tr align=center><td  style='border:2px dotted #0000CC'>BRANDY TORRES 10 700 ML</td><td style='border:2px dotted #0000CC'>$ 226.81 MX</td><td style='border:2px dotted #0000CC'>".$torres."</td><td style='border:2px dotted #0000CC'>$ ".$t1." MX</td><tr>";
}
else{}

if($martell>0){
	$t2=795.00*$martell;

echo "<tr align=center><td  style='border:2px dotted #0000CC'>Cognac Martell V.S.O.P 700 ML </td><td style='border:2px dotted #0000CC'>$ 795.00 MX</td><td style='border:2px dotted #0000CC'>".$martell."</td><td style='border:2px dotted #0000CC'>$ ".$t2." MX</td><tr>";
}	
	
	else{}
	
	
	
	if($marques>0){
	$t3=967.00*$marques;

echo "<tr align=center><td  style='border:2px dotted #0000CC'>	VINO TINTO MARQUÉS DE VARGAS RESERVA PRIVADA 750 </td><td style='border:2px dotted #0000CC'>$ 967.00 MX</td><td style='border:2px dotted #0000CC'>".$marques."</td><td style='border:2px dotted #0000CC'>$ ".$t3." MX</td><tr>";
}	
	
	else{}
	
	
		if($muralles>0){
	$t4=1249.00*$muralles;

echo "<tr align=center><td  style='border:2px dotted #0000CC'>	VINO TINTO GRANS MURALLES 750 ML BODEGAS TORRES 750 ML (ESPAÑA)  </td><td style='border:2px dotted #0000CC'>$ 1,249.00 MX</td><td style='border:2px dotted #0000CC'>".$marques."</td><td style='border:2px dotted #0000CC'>$ ".$t4." MX</td><tr>";
}	
	
	else{}
			
			
			if($abadal>0){
	$t5=467.00*$abadal;

echo "<tr align=center><td  style='border:2px dotted #0000CC'>	VINO TINTO ABADAL SELECCION 01 750 ML (ESPAÑA)</td><td style='border:2px dotted #0000CC'>$ 467.00 MX</td><td style='border:2px dotted #0000CC'>".$abadal."</td><td style='border:2px dotted #0000CC'>$ ".$t5." MX</td><tr>";
}	
	
	else{}
	
	
	if($blanco>0){
	$t6= 2412.00*$blanco;

echo "<tr align=center><td  style='border:2px dotted #0000CC'>	VINO TINTO ABADAL SELECCION 01 750 ML (ESPAÑA)</td><td style='border:2px dotted #0000CC'>$  2,412.00 MX</td><td style='border:2px dotted #0000CC'>".$blanco."</td><td style='border:2px dotted #0000CC'>$ ".$t6." MX</td><tr>";
}	
	
	else{}
	
	
		if($cabernet>0){
	$t7= 262.28 *$cabernet;

echo "<tr align=center><td  style='border:2px dotted #0000CC'>Enate rosado cabernet sauvignon </td><td style='border:2px dotted #0000CC'>$  262.28  MX</td><td style='border:2px dotted #0000CC'>".$cabernet."</td><td style='border:2px dotted #0000CC'>$ ".$t7." MX</td><tr>";
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
<li class="current"><a href="#"><b>Vinos y Licores</b></a></li>
<li><a href="cafes.html"><b>Cafeteria</b></a></li>
<li><a href="farmacia.html"><b>Farmacia</b></a></li>
<li><a href="dulces.html"><b>Dulceria</b></a></li>



</ul>
</div>




</div><!---- fin fondo -->

<link rel="icon" href="images/favicon.png" type="image/x-icon">

</body>
</html>


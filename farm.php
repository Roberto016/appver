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
</div>

<div class="f2">
<div class="regresar"><a href="farmacia.html"><img src="images/regresar.png" /></a></div>
<br />





<center>

  <? 
  
  $colgate=$_POST['colgate'];
  $algodon=$_POST['algodon'];
  $flanax=$_POST['flanax'];
  $jeringas=$_POST['jeringas'];
  $aspirina=$_POST['aspirina'];
  $panales=$_POST['panales'];
  $alcohol=$_POST['alcohol'];
  
  
  echo "<table>";
echo"<br>";
echo "<tr align=center ><td colspan=5 style='border:2px dotted #00CC00' >Su compra es :</td></tr>";

echo "<tr align=center><td style='border:2px dotted #FF0000'>Producto</td><td style='border:2px dotted #FF0000'> Precio </td><td style='border:2px dotted #FF0000'>Cantidad Adquirida</td><td style='border:2px dotted #FF0000'>Total</td></tr>";


if($colgate>0){
	$t1= 20.00*$colgate;
echo "<tr align=center><td style='border:2px dotted #0000CC'>Pasta de Dientes Colgate</td><td style='border:2px dotted #0000CC'>$  20.00 MX</td><td style='border:2px dotted #0000CC'>".$colgate."</td><td style='border:2px dotted #0000CC'>$ ".$t1." MX</td><tr>";
}
else{}



if($algodon>0){
	$t2=15.00*$algodon;

echo "<tr align=center><td style='border:2px dotted #0000CC'>	Paquete de Algodón </td><td style='border:2px dotted #0000CC'>$ 15.00 MX</td><td style='border:2px dotted #0000CC'>".$algodon."</td><td style='border:2px dotted #0000CC'>$ ".$t2." MX</td><tr>";
}	
	
	else{}
	
	
	
	if($flanax>0){
	$t3=72.00*$flanax;

echo "<tr align=center><td style='border:2px dotted #0000CC'>	Flanax 500 Caja  </td><td style='border:2px dotted #0000CC'>$ 72.00  MX</td><td style='border:2px dotted #0000CC'>".$flanax."</td><td style='border:2px dotted #0000CC'>$ ".$t3." MX</td><tr>";
}	
	else{}
	
	
		if($jeringas>0){
	$t4=45.00 *$jeringas;

echo "<tr align=center><td style='border:2px dotted #0000CC'>	Paquete de Jeringas  </td><td style='border:2px dotted #0000CC'>$ 45.00  MX</td><td style='border:2px dotted #0000CC'>".$jeringas."</td><td style='border:2px dotted #0000CC'>$ ".$t4." MX</td><tr>";
}	
	
	else{}
			
			
			if($aspirina>0){
	$t5=53.00*$aspirina;

echo "<tr align=center><td style='border:2px dotted #0000CC'>	Caja de Aspirinas Efervescentes </td><td style='border:2px dotted #0000CC'>$ 53.00 MX</td><td style='border:2px dotted #0000CC'>".$aspirina."</td><td style='border:2px dotted #0000CC'>$ ".$t5." MX</td><tr>";
}	
	
	else{}
	
	
	if($panales>0){
	$t6= 57.00 *$panales;

echo "<tr align=center><td style='border:2px dotted #0000CC'>Paquete de pañales </td><td style='border:2px dotted #0000CC'>$ 57.00  MX</td><td style='border:2px dotted #0000CC'>".$panales."</td><td style='border:2px dotted #0000CC'>$ ".$t6." MX</td><tr>";
}	
	
	else{}
	
	
		if($alcohol>0){
	$t7=  10.50*$alcohol;

echo "<tr align=center><td style='border:2px dotted #0000CC'>	Botella de Alcohol</td><td style='border:2px dotted #0000CC'>$ 10.50MX</td><td style='border:2px dotted #0000CC'>".$alcohol."</td><td style='border:2px dotted #0000CC'>$ ".$t7." MX</td><tr>";
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
<li><a href="cafes.html"><b>Cafeteria</b></a></li>
<li  class="current"><a href=""><b>Farmacia</b></a></li>
<li><a href="dulces.html"><b>Dulceria</b></a></li>



</ul>
</div>




</div><!---- fin fondo -->

<link rel="icon" href="images/favicon.png" type="image/x-icon">

</body>
</html>


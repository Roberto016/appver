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
<div class="carro"><img src="images/carro.png" /></div>
<div class="regresar"><a href="dulces.html"><img src="images/regresar.png" /></a></div>
<div class="f2">


<br />


<center>

  <? 
  
  $gomas=$_POST['gomas'];
  $nuezi=$_POST['nuezi'];
  $cocadas=$_POST['cocadas'];
  $animal=$_POST['animal'];
  $choco=$_POST['choco'];
  $alegrias=$_POST['alegrias'];
  $aguitas=$_POST['aguitas'];
  
  
  
  echo "<table>";
echo"<br>";
echo "<tr align=center ><td colspan=5 style='border:2px dotted #00CC00' >Su compra es :</td></tr>";

echo "<tr align=center><td style='border:2px dotted #FF0000'>Producto</td><td style='border:2px dotted #FF0000'> Precio </td><td style='border:2px dotted #FF0000'>Cantidad Adquirida</td><td style='border:2px dotted #FF0000'>Total</td></tr>";


if($gomas){
	$t1= 30.00*$gomas;
echo "<tr align=center><td style='border:2px dotted #0000CC'>Gomitas Surtidas 1kg</td><td style='border:2px dotted #0000CC'>$ 30.00 MX</td><td style='border:2px dotted #0000CC'>".$gomas."</td><td style='border:2px dotted #0000CC'>$ ".$t1." MX</td><tr>";
}
else{}



if($nuezi>0){
	$t2=250.00*$nuezi;

echo "<tr align=center><td style='border:2px dotted #0000CC'>	Nuez de la India 1kg</td><td style='border:2px dotted #0000CC'>$ 250.00 MX</td><td style='border:2px dotted #0000CC'>".$nuezi."</td><td style='border:2px dotted #0000CC'>$ ".$t2." MX</td><tr>";
}	
	else{}
	
	
	
	if($cocadas>0){
	$t3=10.00 *$cocadas;

echo "<tr align=center><td style='border:2px dotted #0000CC'>	Cocadas Pza  </td><td style='border:2px dotted #0000CC'>$ 10.00   MX</td><td style='border:2px dotted #0000CC'>".$cocadas."</td><td style='border:2px dotted #0000CC'>$ ".$t3." MX</td><tr>";
}	
	else{}
	
	
		if($animal>0){
	$t4=15.00 *$animal;

echo "<tr align=center><td style='border:2px dotted #0000CC'>	Galleta de Animalito 1kg</td><td style='border:2px dotted #0000CC'>$ 15.00  MX</td><td style='border:2px dotted #0000CC'>".$animal."</td><td style='border:2px dotted #0000CC'>$ ".$t4." MX</td><tr>";
}	
	else{}
			
			
			if($choco>0){
	$t5=50.00*$choco;

echo "<tr align=center><td style='border:2px dotted #0000CC'>	Chocolate Amargo abuelita caja </td><td style='border:2px dotted #0000CC'>$ 50.00 MX</td><td style='border:2px dotted #0000CC'>".$choco."</td><td style='border:2px dotted #0000CC'>$ ".$t5." MX</td><tr>";
}	
	
	else{}
	
	
	if($alegrias>0){
	$t6= 15.00 *$alegrias;

echo "<tr align=center><td style='border:2px dotted #0000CC'>	Paquete de Alegrias </td><td style='border:2px dotted #0000CC'>$ 15.00  MX</td><td style='border:2px dotted #0000CC'>".$alegrias."</td><td style='border:2px dotted #0000CC'>$ ".$t6." MX</td><tr>";
}	
	
	else{}
	
	
		if($aguitas>0){
	$t7=  15.00*$aguitas;

echo "<tr align=center><td style='border:2px dotted #0000CC'>	Paquete de Aguitas</td><td style='border:2px dotted #0000CC'>$ 15.00 MX</td><td style='border:2px dotted #0000CC'>".$aguitas."</td><td style='border:2px dotted #0000CC'>$ ".$t7." MX</td><tr>";
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
<li><a href="farmacia.html"><b>Farmacia</b></a></li>
<li  class="current"><a href="#"><b>Dulceria</b></a></li>




</ul>
</div>




</div><!---- fin fondo -->

<link rel="icon" href="images/favicon.png" type="image/x-icon">

</body>
</html>


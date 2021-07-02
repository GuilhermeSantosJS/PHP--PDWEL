<html>
<body>

<?php 

//CALCULO MDC

$x = $_GET['PrimeiroValor'] ;
$y = $_GET['SegundoValor'];

function mdc($x,$y){
	$a = max($x,$y);
	$b = min($x,$y);
	if($a%$b == 0){
		return $b;
	}else{
		return mdc($b,($a%$b));
	}
}
echo "Resultado MDC: ",  mdc($x,$y); 

//CALCULO MMC

function mmc($x,$y){
	return (($x*$y)/(mdc($x,$y)));
}

echo "<br /> Resultado MMC:",mmc($x,$y); 

?><br>



</body>
</html>

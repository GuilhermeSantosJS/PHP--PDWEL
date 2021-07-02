<html>
<body>
 
 Resultado:
<?php 

$m = $_POST['PrimeiroValor'] ;
$n = $_POST['SegundoValor'];

$array = [$m, $n];
  
$aux = $m%$n;

if ($aux == 0) {
    echo "$array[0] é multiplo de  $array[1]";
}else {
    echo "$array[0] não é multiplo de  $array[1]";
}

?><br>

</body>
</html>

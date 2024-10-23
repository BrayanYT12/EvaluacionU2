<?php
/*cbtis89
programa que en un arreglo pone productos saca iva subtotal descuento y el total final
BRAYAN DANIEL GALINDO GONZALEZ
3°A Programacion Matutino
*/
$arrayprecios = array(
    "chocolates" => 300,
    "bombones" => 250,
    "paletas" => 100,
    "churros" => 240,
    "dulces de tamarindo" => 150,
);

$arrayIva = array();
$arraySub = array();
$arrayDesc = array();
$arrayTotal = array();

foreach ($arrayprecios as $producto => $precio) {
    $iva = $precio * 0.16; 
    $subtotal = $precio + $iva; 
    $descuento = $subtotal * 0.10; 
    $total = $subtotal - $descuento; 

    $arrayIva[$producto] = $iva;
    $arraySub[$producto] = $subtotal;
    $arrayDesc[$producto] = $descuento;
    $arrayTotal[$producto] = $total;
}


echo "Arreglos precios:<br>";
foreach ($arrayprecios as $dulces => $precio) {
    echo "$dulces = $precio<br>";
}

echo "<br>Arreglo IVA:<br>";
foreach ($arrayIva as $producto => $iva) {
    echo "$producto = $iva<br>";
}

echo "<br>Arreglo Subtotal:<br>";
foreach ($arraySub as $producto => $subtotal) {
    echo "$producto = $subtotal<br>";
}

echo "<br>Arreglo Descuento:<br>";
foreach ($arrayDesc as $producto => $descuento) {
    echo "$producto = $descuento<br>";
}

echo "<br>Arreglo Total:<br>";
foreach ($arrayTotal as $producto => $total) {
    echo "$producto = $total<br>";
}
?>



?>
?>
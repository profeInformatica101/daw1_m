<?php 
$area = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$base = $_POST['base'];
	$altura = $_POST['altura'];
	$area = $base * $altura;
} ?>
<form method="post" action="">	
Base: <input type="text" name="base">
Altura: <input type="text" name="altura">
<input type="submit" value="Calcular">
</form>
<?php
if ($area != "") {
	echo "El área del rectángulo es: " . $area;
}
?>

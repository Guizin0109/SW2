<html>
<body>
<?php
	$numero = $_POST["a"];
	$i = 0;
	for($i = 0;$i<=10; $i++)
	{
		$resultado = ($numero * $i);
		echo " $numero X $i = $resultado <br> " ;
	}
	
?>
</body>
</html>

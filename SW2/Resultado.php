<html>
<body>
<?php
	$numero1 = $_POST["a"];
	$numero2 = $_POST["b"];
	$numero3 = $_POST["c"];
	 
	if ( $numero1 > $numero2 && $numero1 > $numero3) {
		echo "O $numero1 é o numero maior";
	}
	elseif ( $numero2 > $numero1 && $numero2 > $numero3) {
		echo "O $numero2 é o numero maior";
	}
	else {
		echo "O $numero3 é o numero maior";
	}


?>
</body>
</html>

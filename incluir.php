<HTML>
<HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <TITLE>Incluir</TITLE>
</HEAD>
<BODY>
<?php
$id =			$_POST["id "];
$titulo =		$_POST["titulo "];
$artista= 		   $_POST["artista"];
$album =			   $_POST["album "];
$genero =			   $_POST["genero "];
$ano_lancamento =	$_POST["ano_lancamento "];
$duracao =			$_POST["duracao "];
$compositor =		$_POST["compositor "];
$letra  =		$_POST["letra "];

$con=mysqli_connect("localhost","root","","detran") or die ("erro!"); //faz a conexão com o banco de dados detran

$in = "insert into veiculos values ('$id',
									         '$titulo',
									         '$marca',
									         '$cor',
									         '$ano',
									         '$proprietario', 
									         '$fone', 
									         '$opcionais')";
$incluir=mysqli_query($con,$in);
if ($incluir==1)
{
   echo "
   Placa:		$placa<BR>
   Veículo:		$veiculo<BR>
   Marca:		$marca<BR>
   Cor:			$cor<BR>
   Ano:			$ano<BR>
   Proprietário:$proprietario<BR>
   Fone:		$fone<BR>
   Opcionais: 	$opcionais<hr>";
   
   echo "Registro incluído com sucesso!<BR>";
}
else
{
   echo "Registro NÃO incluído!<BR>";
}
echo "<a href='incluir.html'>Voltar</a><BR>";
?>
</BODY>
</HTML>


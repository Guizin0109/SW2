<html>
<body>

<?php

$arquivo = $_FILES['arquivo']['name'];
$destino = 'c:/xampp/htdocs/SW2/img/' . $arquivo;
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
$nome =		$_POST["nome"];
$email= 		   $_POST["email"];
$fone =			   $_POST["fone"];
$foto =			   $_POST["foto"];

$con=mysqli_connect("localhost","root","","empresa") or die ("erro!"); //faz a conexão com o banco de dados detran

$in = "insert into usuario values (null,
									         '$nome',
									         '$email',
									         '$fone',
									         '$foto')";
$incluir=mysqli_query($con,$in);
move_uploaded_file( $arquivo_tmp, $destino);
if ($incluir==1)
{
   echo "
   nome:		$nome<BR>
   email:		$email<BR>
   fone:		$fone<BR>
   foto:			$foto<BR>
<img src = img/$arquivo width=25% heigth=25%>";
   
   echo "Registro incluído com sucesso!<BR>";
}
else
{
   echo "Registro NÃO incluído!<BR>";
}
echo "<a href='incluir.html'>Voltar</a><BR>";
?>

</body>
</html>
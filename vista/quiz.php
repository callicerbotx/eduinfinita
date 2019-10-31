<? 
session_start();
// conexion db
?>
<style>
* {font-size:10px}
</style>
<br>
<form action="resultados.php" method="post"><?
// sacamos X preguntas al hazar
$hacer_trampa=1;  // 1 hacer trampa 0 no hacer trampa
$numero_de_preguntas=10;  //numero de preguntas que se sacarán al hazar
$sql="SELECT * FROM preguntas ORDER BY RAND() LIMIT $numero_de_preguntas";
if ($sql=mysql_query($sql))
{
	$a=0;
	while($assoc=mysql_fetch_assoc($sql))
	{
		$pregunta[]=$assoc['pregunta'];
		$respuesta[$a][0]=$assoc['correcta'];
		$respuesta[$a][1]=$assoc['incorrecta'];
		$_SESSION['id_pregunta'][$a]=$assoc['id'];
		$a++;
	}	
	mysql_free_result($sql);
	foreach($pregunta as $indice=>$valor)
	{
		// Mezclamos y sacamos nuevo id de correcta 
		$arrayAleatorio = range(0, 3);
		shuffle($arrayAleatorio);
		$nuevoIdCorrecta=array_search("0",$arrayAleatorio);
		$_SESSION['array'][$indice]=$arrayAleatorio;
		print "<b>$valor</b><br>\n";
		foreach($arrayAleatorio as $indice1=>$valor1)
			print "<input type=\"radio\" name=\"Pregunta".$indice."\" value=\"".$valor1."\"  />". $respuesta[$indice][$arrayAleatorio[$valor1]] . ( ( $valor1 == $nuevoIdCorrecta && $hacer_trampa) ? " correcta" : "" ) . "<br />\n";
	}
}?>
<INPUT TYPE="submit" name="respuestas" value="Respuestas">
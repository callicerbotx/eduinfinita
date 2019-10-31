<? 
session_start();
// conexion db
?>
<style>
* {font-size:12px}
.acierto{border:2px solid #336699;background:#eeeeff;text-align:center}
.fallo{border:2px solid #996633;background:#ffeeee;text-align:center}
.acierto1{background:#eeeeff;text-align:center}
.fallo1{background:#ffeeee;text-align:center}
.pregunta{background:#eeffee;text-align:center}
</style>
<table border="1" align="center" width="100%">
<tr>
<th>Pregunta</th>
<th>Correcta</th>
<th>Incorrecta</th>

</tr><?
if (is_array($_SESSION['id_pregunta']))
foreach ($_SESSION['id_pregunta'] as $key=>$value)
{
		$sql="SELECT * FROM preguntas WHERE id=".$value;
		if ($sql=mysql_query($sql))
		{?><tr><?
			$assoc=mysql_fetch_assoc($sql);
			$envio=$_SESSION['array'][$key];
			$correcta=array_search("0",$envio);
			$value1=$_POST['Pregunta'.$key];
			print "<td class=\"pregunta\"><b><tt>".$assoc['pregunta']."</b></tt></td>\n";
			print "<td".( ( array_search("0",$envio) == $value1 && $value1!="") ? " class=\"acierto\"" : " class=\"acierto\"" )."><tt>".$assoc['correcta']. "</tt></td>\n";
			print "<td".( ( array_search("1",$envio) == $value1 && $value1!="" ) ? " class=\"fallo\"" : " class=\"fallo\"" )."><tt>".$assoc['incorrecta']. "</tt></td>\n";
			 
?></tr><?

	
	}

}

session_destroy();
?>	</table>
<br><br>
<table border="1" align="center" width="50%">
<tr>
<td class="acierto">&nbsp;&nbsp;</td><td>Respuesta enviada y acertada</td>
</tr>
<tr>
<td class="fallo">&nbsp;&nbsp;</td><td>Respuesta enviada y fallada</td>
</tr>
<td class="acierto">&nbsp;&nbsp;</td><td>Respuesta correcta</td>
</tr>
<tr>
<td class="fallo">&nbsp;&nbsp;</td><td>Respuesta incorrecta</td>
</tr>
</table>
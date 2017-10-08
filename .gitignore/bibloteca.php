<!DOCTYPE html>

<!--	BIBLOTECA: 				http://livevalidation.com/download
Descargar el archivo: 	livevalidation_standalone.compressed.js
Agregar la linea:		<script type="text/javascript" src="livevalidation_standalone.compressed.js"></script>

Y ya se pueden utilizar las funciones de validacion

Ejemplos de validacion:	http://livevalidation.com/examples

xumarhu.net - Rogelio Ferreira Escutia - Mayo 2012

-->

<html>
	<head>
		<title>BIBLOTECA </title>
		<meta charset="utf-8" />
		<script type="text/javascript" src="livevalidation_standalone.compressed.js"></script>
	</head>
	<body>
<table width="220" border="0" cellspaciong="0" cellpadigding="1">
<tr bgcolor="#990033" align="center">

    	<td><b><font color="FFFFFF"> BIBLOTECA</font></b></td>
</tr>
		<form action="validar.php" method = "post">
     
<tr bgcolor="#990033">
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="4">
<tr bgcolor="#FFFFFF">
<td>
   	
nombre: <input id="f1" type="text" name="NOMBRE" /><br />
			<script type="text/javascript">
  				var f1 = new LiveValidation('f1');
  				f1.add(Validate.Presence, {failureMessage: "Escribir por favor tu nombre!!!"});
			</script>             		
    		Autor: <input id="f2" type="autor" name="autor" /><br />
			<script type="text/javascript">
  				var f2 = new LiveValidation('f2');
  				f2.add(Validate.Presence, {autor
			</script>             		
    		aceptar: <input id="f3" type="text" name="nombre" /><br />
			<script type="text/javascript">
  				var f3 = new LiveValidation('f3');
  				f3.add(Validate.Presence, {failureMessage: "Escribir por favor tu Nombre!!!"});
			</script> 
    	    eliminar  <input id="f4" type="text" name="eliminar" />
			<script type="text/javascript">
				var f4 = new LiveValidation('f4');
				f4.add(Validate.Presence, {failureMessage: "Escribir por favor edad"});
				f4.add(Validate.Numericality, {minimum:1, maximum:100, onlyInteger: true});
			</script> 
			<br /><input type="submit" value="Enviar"/>
</td>
</tr>
</table>
</td>
</tr>
</table>
    	</form>
	</body>
</html>

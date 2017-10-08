<html>
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body background="img/android-wallpaper.jpg">

<div align="center">
  <?php

ini_set('display_errors', 'Off');
ini_set('display_startup_errors', 'Off');
error_reporting(0);

$usuario = $_POST['usuario'];
$contra = $_POST['contra'];
$sesion_login = true;

function Conectarse()
{
   if (!($link=mysql_connect("localhost","root")))
   {
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysql_select_db("sistemaexpedientes",$link))
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   return $link;
}

$con = Conectarse();
$query = "SELECT * FROM registro WHERE altas ='".$altas."' AND contra = '".$contra."'";
$q = mysql_query($query,$con);
try{


if(mysql_result($q,0))
{$result = mysql_result($q, 0);
//echo $result;

    echo "<h1>BIENVENIDO</h1><br>";
    
}else{
    echo "<br> <br><br><br><strong>NO ESTAS EN LA BASE DE DATOS </strong><br><br>";
	echo 'Regresa a <a href="index.php">Login</a>';
		}
	
	
}catch(Exception $error){}
mysql_close($con);

?>
</div>
</body>
</html>

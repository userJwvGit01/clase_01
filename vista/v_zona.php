<html>
 <head>
 	<title></title>
 	<script type="text/javascript" src="../js/libreria.js"></script>
 </head>
 <body>
  <form name="pantalla" method="POST" action="../control/c_zona.php">
  	Codigo:     <input type="text" name="cod">
  	<br>
  	Descripcion:<input type="text" name="des">
  	<br>
  	<input type="hidden" name="ope">
  	<input type="button" value="Incluir" onClick="envia(this.value)">
  </form>
 </body>
 </html>
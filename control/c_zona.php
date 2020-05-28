<?php
include_once("../modelo/m_zona.php");
$objZona = new zona();
$objZona->setDatos($_POST["cod"],$_POST["des"]);
$objZona->incluye();
header("Location: ../vista/v_zona.php");
?>
<?php
require_once "library/template/Template.php";
Template::applyTemplate();
?>
<div class="panel-container">
     <h2>Bienvenido, [Nombre del Candidato]</h2>
     <button id="verOfertasBtn">Ver ofertas de empleo</button>
     <button id="verAplicacionesBtn">Ver aplicaciones</button>
     <a href="index.php" id="logoutBtn">Cerrar sesión</a>
</div>
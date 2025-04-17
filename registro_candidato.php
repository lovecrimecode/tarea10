<?php
require_once "library/template/Template.php";
Template::applyTemplate();
?>
<div class="registro-container">
     <h2>Registro de Candidato</h2>
     <form id="registroCandidatoForm">
          <input type="text" placeholder="Nombre" required>
          <input type="email" placeholder="Correo" required>
          <input type="password" placeholder="Contraseña" required>
          <button type="submit">Registrarse</button>
     </form>
     <p><a href="index.php">Volver</a></p>
</div>
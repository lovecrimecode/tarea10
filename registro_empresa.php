<?php
require_once "library/template/Template.php";
Template::applyTemplate();
?>
<div class="registro-container">
     <h2>Registro de Empresa</h2>
     <form id="registroEmpresaForm">
          <input type="text" placeholder="Nombre de empresa" required>
          <input type="email" placeholder="Correo de empresa" required>
          <input type="password" placeholder="Contraseña" required>
          <button type="submit">Registrarse</button>
     </form>
     <p><a href="index.php">Volver</a></p>
</div>
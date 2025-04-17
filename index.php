<?php
require_once "library/template/Template.php";
Template::applyTemplate();
?>
<div class="login-container">
     <h2>Iniciar sesión</h2>
     <form id="loginForm">
          <input type="email" id="email" placeholder="Correo electrónico" required>
          <input type="password" id="password" placeholder="Contraseña" required>
          <button type="submit">Iniciar sesión</button>
     </form>
     <p>¿No tienes cuenta? <a href="registro.php">Regístrate</a></p>
</div>
<script src="library/components/script.js"></script>
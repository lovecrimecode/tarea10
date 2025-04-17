<?php
require_once "library/template/Template.php";
Template::applyTemplate();
?>
<div class="aplicar-container">
     <h2>Aplicar a la oferta: [Título de la oferta]</h2>
     <form id="aplicarForm">
          <textarea placeholder="Escribe tu carta de presentación..." required></textarea>
          <button type="submit">Aplicar</button>
     </form>
</div>
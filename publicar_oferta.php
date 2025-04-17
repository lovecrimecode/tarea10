<?php
require_once "library/template/Template.php";
Template::applyTemplate();
?>
<div class="registro-container">
     <h2>Publicar Oferta de Empleo</h2>
     <form>
          <input type="text" placeholder="Título de la oferta ficticia" required>
          <textarea placeholder="Descripción breve" required></textarea>
          <button type="submit">Publicar</button>
     </form>
</div>

</main>
<footer class="p-2 mt-5 container-fluid text-center bg-dark text-white">
  <span class="text-light">© 2022 - Projet Kanban - Réalisé par : Farah, Charles, Christopher, Jérémy, Mika - <a href="https://github.com/VjeremyV/projet-Kanban"><i title="lien vers github" class="bi bi-github text-white"></i></a></span>
</footer>

<?php if (isset($_GET['creation']) && $_GET['creation'] == "0") : ?>
  <script src="./../script/createprojet.js"></script>

<?php elseif (isset($_GET['kanban']) && $_GET['kanban'] == "true") : ?>
  <script src="./../script/projet.js"></script>
  <script src="./../script/modal.js"></script>
  <script src="./../script/boutonsKanban.js"></script>

<?php elseif ((isset($_GET['kanban']) && $_GET['kanban'] == "false") || (isset($_GET['page']) && $_GET['page'] == "encours")) : ?>
  <script src="./../script/modal.js"></script>

<?php elseif (substr($_SERVER['PHP_SELF'], -9) == 'index.php') : ?>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <!-- fonctionrecaptcha prise sur le site documentation google -->
  <script type="text/javascript">
    var onloadCallback = function() {
      alert("grecaptcha is ready!");
    };
  </script>

<?php endif ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
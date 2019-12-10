<?php require APPROOT.'/views/_layouts/headerApp.php'?>
    <body>
<?php require APPROOT.'/views/_layouts/navbar.php'?>
    <h3 id="allFilms">TOUS LES FILMS & SÉRIES</h3>
    <body>
      <?php include(APPROOT.'/functions/readfilmsmodal.php');?>
      <div style="margin-left: 40%; margin-top: 5%">
          <a href="/sandbox/public/pages/add" class="btn btn-info" role="button">Ajouter</a>
          <a href="/sandbox/public/pages/index" class="btn btn-danger" role="button">Fermer</a>
      </div>
    </body>
<?php require APPROOT.'/views/_layouts/footer.php' ?>
<?php

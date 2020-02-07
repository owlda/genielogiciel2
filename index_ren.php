<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Welcome</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="css/forms.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="scripts/formulaires.js"></script>
</head>
<?php
switch($_COOKIE['lang']){
    case "es":
        require __DIR__.'/../../voc/lb_es.php';
        break;
    case "en" :
        require __DIR__.'/../../voc/lb_en.php';
        break;
    default :
        require __DIR__.'/../../voc/lb_fr.php';
        break;
}
?>
<?php include __DIR__ . '/tmp/template/headerDenis.tpl ';

?>
<body onload="initialiserMenu()">
<?php include __DIR__ . '/tmp/template/menu-ren.tpl ' ?>

<div class="container">
    <?php include __DIR__ . '/tmp/template/carousel.tpl ' ?>
</div>
<div class="container">
    <?php include __DIR__ . '/tmp/template/cardssliderDenis.tpl ' ?>
</div>

<div class="container" id="modals">
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body" style="padding:5px 5px;">
                    <div id="divConnexion">
                        <?php include 'forms/formConnexion.php' ?>
                    </div>
                    <div id="divCreationCompte">
                        <?php include 'forms/formCreationCompte.php' ?>
                    </div>
                    <div id="divMotPasseOublie">
                        <?php include 'forms/formMotPasseOublie.php' ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . '/tmp/template/footer.tpl ' ?>
</body>
</html>
<?php

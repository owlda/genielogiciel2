<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Circuit</title>

    <link rel="stylesheet" href="../css/hover-min.css">
    <link rel="stylesheet" href="../css/animate.css">

    <?php include __DIR__ . '/../tmp/template/headerIvan.tpl' ?>

    <script src="../ControllerIvan/AdminControllerIvan/_Query.js"></script>
    <script src="../ControllerIvan/AdminControllerIvan/View.js"></script>
    <script src="../libs/jquery-3.4.1.min.js"></script>
    <script src="../js/ivan-modals.js"></script>
</head>

<body onload="ListerCircuit();">
<?php include __DIR__.'/../tmp/template/menu-renIvan.tpl'?>

<main>
    <div class="container" id="list-circuit"></div>

    <div class="container" style="padding: 10px;">
        <!--Ajouter un circuit-->
        <section id="ajouter-circuit" class="animated zoomInRight"></section>
        <!--Ajouter un etape-->
        <section id="ajouter-etape" class="animated zoomInRight"></section>
    </div>

    <div id="div_modal_add_jour"></div>
    <div id="div_modal_add_restaurent"></div>
    <div id="div_modal_add_activity"></div>
    <div id="div_modal_add_hotel"></div>
</main>
<div class="footer-clean animated zoomInRight">
    <?php include __DIR__.'/../tmp/template/footer.tpl '?>
</div>

<script src="../libs/jquery-3.4.1.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
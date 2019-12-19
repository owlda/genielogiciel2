<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Circuit</title>

    <?php include __DIR__ . '/../tmp/template/headerIvan.tpl' ?>

    <script src="../ControllerIvan/AdminControllerIvan/_Query.js"></script>
    <script src="../ControllerIvan/AdminControllerIvan/View.js"></script>
    <script src="../libs/jquery-3.4.1.min.js"></script>
    <script src="../js/ivan-modals.js"></script>


</head>
<body onload="DetailCircuit();">

<?php include __DIR__.'/../tmp/template/menu-renIvan.tpl'?>

<main style="padding: 20px;">
    <div class="container border border-primary rounded-lg animated zoomInRight" style="padding: 10px;">
        <!--Ajouter un circuit-->
        <section id="ajouter-circuit" class="animated zoomInRight"></section>
        <!--Ajouter un etape-->
        <section id="ajouter-etape" class="animated zoomInRight"></section>
        <!--Ajouter un jour-->
        <section id="ajouter-jour">
            <button class="btn btn-success" type="button" style="margin: 5px;">Ajouter un jour</button>
            <div class="border border-primary rounded-lg" style="margin-left: 30px;width: 70%;">
                <div style="padding: 5px;">
                    <div class="row">
                        <div class="col"><span style="padding: 5px;font-size: 20px;">Jour 1</span></div>
                        <div class="col" style="text-align: right;margin-right: 5px;"><span style="padding: 5px;background-color: greenyellow;font-size: 20px;">1000$</span></div>
                    </div>
                    <div class="btn-toolbar">
                        <div class="btn-group" role="group"><button class="btn btn-warning" type="button">Modifier</button><button class="btn btn-danger" type="button">Supprimer</button><button class="btn btn-primary" type="button">Détaillé</button></div>
                    </div>
                    <div></div>
                </div>
            </div>
        </section>
    </div>
</main>
</body>

<div class="footer-clean animated zoomInRight">
    <?php include __DIR__.'/../tmp/template/footer.tpl '?>
</div>

<script src="../assetsIvan/js/jquery.min.js"></script>
<script src="../assetsIvan/bootstrap/js/bootstrap.min.js"></script>

</html>
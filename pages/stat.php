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

<body>
<?php include __DIR__.'/../tmp/template/menu-renIvan.tpl'?>
<main>
    <form id="FormFullCircuit" >
        <div class="form-group animated zoomInRight" style="width: 10%;margin-left: 10%;">
        <label>ID Circuit:</label>
        <input type="number" class="form-control" id="idCircuit" name="idCircuit">
        <br>
        <input type="button" value="Chercher" id="btn_cherche" class="btn btn-info" onclick="BtnFullCircuit()">
    </div>
    </form>
    <div class="container" id="table_circuit" style="padding-bottom: 10%;"></div>
</main>
<div class="footer-clean animated zoomInRight">
    <?php include __DIR__.'/../tmp/template/footer.tpl '?>
</div>
<script src="../libs/jquery-3.4.1.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
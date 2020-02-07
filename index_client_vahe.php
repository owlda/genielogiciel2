<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>guest</title>
    <script src="ControllerIvan/AdminControllerIvan/_Query.js"></script>
    <script src="ControllerIvan/AdminControllerIvan/ViewCart.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <script src="ControllerVahe/requetsMembre.js"></script>
    <script src="ControllerVahe/ViewVahe.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--<script src="assets/js/jquery.min.js"></script>-->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="scripts/formulaires.js"></script>
</head>
<body onload="initclientmenue();">
<?php
session_start();
    if(isset($_SESSION['sessionstatus'])){
        if ($_SESSION['sessionstatus'] == true) {
            echo('<div id="menu"></div>');
            //include __DIR__ . '/tmp/template/menu_client.tpl ';
        }
    }

    else {include __DIR__ . '/tmp/template/menu-ren.tpl ';}

?>

<div class="container" id="carousel">
    <?php include __DIR__ . '/tmp/template/carousel.tpl ' ?>
</div>
<div class="container">
    <div class="card-group"  id="card1" style="padding:20px; margin-bottom: 20px;">
    </div>
</div>

<<<<<<< HEAD
<div class="container" id="circuitmodal">
=======
<div class="container" id="circuitx">


</div>

<div id="cart_modal">

</div>

<!--here we keep a modal in which we will show the data for the chosen circuit to show all the details, we will use bootstrap
colapsable to show the details-->

<div class="modal fade" id="circuit_detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
>>>>>>> 78756a17944818383bdc1ac8cfadd08088177123

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
<script src="ControllerVahe/requetsMembre.js"></script>
<script src="ControllerVahe/ViewVahe.js"></script>
</html>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>guest</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="stylesheet" href="css/forms.css">
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
    <!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->

    <script src="scripts/formulaires.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <script src="https://apis.google.com/js/api:client.js"></script>
<!--    <meta name="google-signin-client_id"-->
<!--          content="266969397484-tlf4h2dn463kvmhn9lpovtgm93re0i63.apps.googleusercontent.com">-->
</head>

<body onload="initialiserMenu()">
<?php include __DIR__ . '/tmp/template/menu_forms.tpl ' ?>

<div class="container">
    <div class="carousel slide" data-ride="carousel" id="carousel-2">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"><img class="w-100 d-block"
                                                   src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"
                                                   alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block"
                                            src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"
                                            alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block"
                                            src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"
                                            alt="Slide Image"></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev"><span
                        class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a
                    class="carousel-control-next" href="#carousel-2" role="button"
                    data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-2" data-slide-to="1"></li>
            <li data-target="#carousel-2" data-slide-to="2"></li>
        </ol>
    </div>
</div>

<div class="container">
    <div class="card-group">
        <div class="card"><img class="card-img-top w-100 d-block">
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac
                    facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                <button class="btn btn-primary" type="button">Button</button>
            </div>
        </div>
        <div class="card"><img class="card-img-top w-100 d-block">
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac
                    facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                <button class="btn btn-primary" type="button">Button</button>
            </div>
        </div>
        <div class="card"><img class="card-img-top w-100 d-block">
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac
                    facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                <button class="btn btn-primary" type="button">Button</button>
            </div>
        </div>
    </div>
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

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php

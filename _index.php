<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <script src="libs/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/ivan-js.js"></script>
    <script src="libs/nicEdit-latest.js"></script>
    <?php
        require_once 'voc/lb_en.php';
    ?>
    <script>
        var obj = <?php echo json_encode($voc,JSON_UNESCAPED_UNICODE); ?>
    </script>
</head>
<body>

<h1>Welcome</h1>
<button id="sd" type='button' class='btn btn-primary'>Ajouter circuit</button>
<button id="verification-NicEdit">Verification</button>

<div id="form-circuit" style="width: 50%;margin-left: 20%"></div>





<!--Modal Login -->
<div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="Modal-Login" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal-Login">Ajouter circuit</h5>
                <div id="msg_user" class="text-danger"></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label data-error="wrong" data-success="right" for="InputEmail"><?= $voc['email'] ?></label>
                        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
                        <div id="error_email" class="text-danger"></div>
                    </div>
                    <div class="form-group">
                        <label data-error="wrong" data-success="right" for="InputPassword">Mot de passe:</label>
                        <input type="password" class="form-control" id="InputPassword">
                    </div>
                    <div class="form-group">
                        <label data-error="wrong" data-success="right" for="InputPassword">Mot de passe:</label>
                        <input type="password" class="form-control" id="InputPassword">
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" onclick="Connect();">Se connecter</button>
            </div>
        </div>
    </div>
</div>
<!--Modal Login -->

<div class="modal fade" id="modal_calendar" tabindex="-1" role="dialog" aria-labelledby="Modal-Login" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal-Login">Ajouter circuit</h5>
                <div id="msg_user" class="text-danger"></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    с <input type="text" value="dd-mm-yy" onfocus="this.select();lcs(this)"
                             onclick="event.cancelBubble=true;this.select();lcs(this)">
                    по <input type="text"  value="dd-mm-yy" onfocus="this.select();lcs(this)"
                              onclick="event.cancelBubble=true;this.select();lcs(this)">
                    </p>
                </form>

            </div>
            <button type="button" id="test" class="btn btn-secondary" data-dismiss="modal">Calendar</button>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" onclick="Connect();">Se connecter</button>
            </div>
        </div>
    </div>

</div>

</body>

</html>

<script src="libs/jquery-3.4.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<script src="js/ivan-js-calendar.js" type="text/javascript"></script>

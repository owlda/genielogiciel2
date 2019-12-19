<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Circuit</title>
    <link rel="stylesheet" href="../assetsIvan/css/hover-min.css">
    <link rel="stylesheet" href="../assetsIvan/css/animate.css">
    <link rel="stylesheet" href="../assetsIvan/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="../assetsIvan/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assetsIvan/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="../assetsIvan/css/Article-Clean.css">
    <link rel="stylesheet" href="../assetsIvan/css/Article-Dual-Column.css">
    <link rel="stylesheet" href="../assetsIvan/css/Article-List.css">
    <link rel="stylesheet" href="../assetsIvan/css/Footer-Basic.css">
    <link rel="stylesheet" href="../assetsIvan/css/Footer-Clean.css">
    <link rel="stylesheet" href="../assetsIvan/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="../assetsIvan/css/styles.css">
    <script src="../ControllerIvan/AdminControllerIvan/_Query.js"></script>
    <script src="../ControllerIvan/AdminControllerIvan/View.js"></script>
    <script src="../libs/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
</head>

<body onload="LoadAddCircuitDenis()">
<nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
    <div class="container"><img src="../assetsIvan/img/travel-icon.png" style="width: 30px;height: 30px;margin-right: 5px;"><a class="navbar-brand" href="#"><strong>Northern Star Travel</strong></a><a href="#"><i class="icon ion-android-call" style="margin-right: 10px;"></i>1-800-885-8555</a>
        <select
                style="margin: 5px;">
            <option value="12" selected="">FR</option>
            <option value="13">EN</option>
            <option value="14">ES</option>
        </select><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#">First Item</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Second Item</a></li>
                <li class="nav-item" role="presentation"></li>
            </ul><span class="navbar-text actions"> <a class="login" href="#" style="/*display: block;*/"><i class="icon-login"></i>&nbsp;Log In</a><a class="btn btn-light action-button" role="button" href="#">Sign Up</a></span></div>
    </div>
</nav>

<main>
    <h4 style="text-align: center; margin-bottom: 2%">Ajouter un nouveau circuit.</h4>
    <div class="container">
        <form action="../pages/upload.php" class="dropzone" id="dropzoneFrom">
        </form>
        <br />
        <br />
        <div align="center">
            <button type="button" class="btn btn-info" id="submit-all">Upload</button>
        </div>
        <br />
        <br />
        <div id="preview"></div>
        <br />
        <br />
    </div>
    <div class="container" id="form-circuit"></div>
</main>
<div class="footer-clean animated zoomInRight">
    <footer>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Legacy</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>Careers</h3>
                    <ul>
                        <li><a href="#">Job openings</a></li>
                        <li><a href="#">Employee success</a></li>
                        <li><a href="#">Benefits</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                    <p class="copyright">Company Name © 2017</p>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="../assetsIvan/js/jquery.min.js"></script>
<script src="../assetsIvan/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<script>
    $(document).ready(function(){
        Dropzone.options.dropzoneFrom = {
            autoProcessQueue: false,
            acceptedFiles:".png,.jpg,.gif,.bmp,.jpeg",
            init: function(){
                var submitButton = document.querySelector('#submit-all');
                myDropzone = this;
                submitButton.addEventListener("click", function(){
                    myDropzone.processQueue();
                });
                this.on("complete", function(){
                    if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
                    {
                        var _this = this;
                        _this.removeAllFiles();
                    }
                    list_image();
                });
            },
        };
        list_image();
        function list_image()
        {
            $.ajax({
                url:"../pages/upload.php",
                success:function(data){
                    $('#preview').html(data);
                }
            });
        }

        $(document).on('click', '.remove_image', function(){
            var name = $(this).attr('id');
            $.ajax({
                url:"../pages/upload.php",
                method:"POST",
                data:{name:name},
                success:function(data)
                {
                    list_image();
                }
            })
        });

    });
</script>
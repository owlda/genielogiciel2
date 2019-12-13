<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Circuit</title>
    <link rel="stylesheet" href="assetsIvan/css/hover-min.css">
    <link rel="stylesheet" href="assetsIvan/css/animate.css">
    <link rel="stylesheet" href="assetsIvan/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assetsIvan/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assetsIvan/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assetsIvan/css/Article-Clean.css">
    <link rel="stylesheet" href="assetsIvan/css/Article-Dual-Column.css">
    <link rel="stylesheet" href="assetsIvan/css/Article-List.css">
    <link rel="stylesheet" href="assetsIvan/css/Footer-Basic.css">
    <link rel="stylesheet" href="assetsIvan/css/Footer-Clean.css">
    <link rel="stylesheet" href="assetsIvan/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assetsIvan/css/styles.css">

</head>

<body>
<nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
    <div class="container"><img src="assetsIvan/img/travel-icon.png" style="width: 30px;height: 30px;margin-right: 5px;"><a class="navbar-brand" href="#"><strong>Northern Star Travel</strong></a><a href="#"><i class="icon ion-android-call" style="margin-right: 10px;"></i>1-800-885-8555</a>
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
    <div class="container" style="padding:20px">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group" id="adv-search">
                    <input type="text" class="form-control" placeholder="Chercher un circuit" />
                    <div class="input-group-btn">
                        <div class="btn-group" role="group">
                            <div class="dropdown dropdown-lg">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret">Avancé</span></button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label>Thème:</label>
                                            <select class="form-control">
                                                <option value="0" selected>All Snippets</option>
                                                <option value="1">Featured</option>
                                                <option value="2">Most popular</option>
                                                <option value="3">Top rated</option>
                                                <option value="4">Most commented</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Filter by</label>
                                            <select class="form-control">
                                                <option value="0" selected>All Snippets</option>
                                                <option value="1">Featured</option>
                                                <option value="2">Most popular</option>
                                                <option value="3">Top rated</option>
                                                <option value="4">Most commented</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Date</label>
                                            <input class="form-control" type="date" />
                                        </div>
                                        <div class="form-group">
                                            <label>Contains the words</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-repeat">Chercher</span></button>
                                    </form>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary"> <span class="glyphicon glyphicon-search">Chercher</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container animated zoomInRight">
        <div class="row">
            <div class="col" style="flex-grow: 1;">
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active"><img class="w-100 d-block" src="assetsIvan/img/desk.jpg" alt="Slide Image" loading="auto"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                                                                                                                                                                                                         data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
            <div class="col" style="flex-grow: 1;">
                <h1>Heading</h1>
                <p>Paragraph fdsf sdf sdfsdfsdf fsdfsdf dsfsdf sdfsdf sdf sdf sdfsdfsdfsdfsd fsdf sdf sdf&nbsp;<br>graph fdsf sdf sdfsdfsdf fsdfsdf dsfsdf sdfsdf sdf sdf sdfsdfsdfsdfsd fsdf sdf sdf&nbsp;<br>graph fdsf sdf sdfsdfsdf fsdfsdf dsfsdf sdfsdf
                    sdf sdf sdfsdfsdfsdfsd fsdf sdf sdf<br><br></p>
            </div>
        </div>
    </div>
    <div class="container animated zoomInRight" style="margin-top: 20px;">
        <div class="card-group">
            <div class="card" style="padding: 10px;">
                <div class="list-group-item text-white bg-info">
                    <p>Paragraph fdsf fsdf sdfsdf sdf sdfsdf sdfsdf sdf sdf fdsf sdfsd &nbsp;fsdf&nbsp;</p>
                </div><img class="card-img w-100 d-block" src="assetsIvan/img/building.jpg">
                <div class="list-group-item text-white bg-dark" style="text-align: center;display: inline;">
                    <h2 class="text-center my-1 text-nowrap" style="display: inline;margin-bottom: 10px;">50 000$</h2><button class="btn btn-primary hvr-ripple-in" style="display: inline;margin-bottom: 10px;margin-left: 35px;">Acheter</button></div>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
            </div>
            <div class="card" style="padding: 10px;">
                <div class="list-group-item text-white bg-info">
                    <p>Paragraph fdsf fsdf sdfsdf sdf sdfsdf sdfsdf sdf sdf fdsf sdfsd &nbsp;fsdf&nbsp;</p>
                </div><img class="card-img w-100 d-block" src="assetsIvan/img/building.jpg">
                <div class="list-group-item text-white bg-dark" style="text-align: center;display: inline;">
                    <h2 class="text-center my-1 text-nowrap" style="display: inline;margin-bottom: 10px;">50 000$</h2><button class="btn btn-primary hvr-ripple-in" style="display: inline;margin-bottom: 10px;margin-left: 35px;">Acheter</button></div>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
            </div>
            <div class="card" style="padding: 10px;">
                <div class="list-group-item text-white bg-info">
                    <p>Paragraph fdsf fsdf sdfsdf sdf sdfsdf sdfsdf sdf sdf fdsf sdfsd &nbsp;fsdf&nbsp;</p>
                </div><img class="card-img w-100 d-block" src="assetsIvan/img/building.jpg">
                <div class="list-group-item text-white bg-dark" style="text-align: center;display: inline;">
                    <h2 class="text-center my-1 text-nowrap" style="display: inline;margin-bottom: 10px;">50 000$</h2><button class="btn btn-primary hvr-ripple-in" style="display: inline;margin-bottom: 10px;margin-left: 35px;">Acheter</button></div>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
            </div>
        </div>
    </div>
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
<script src="assetsIvan/js/jquery.min.js"></script>
<script src="assetsIvan/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
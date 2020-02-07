<nav class="navbar navbar-light navbar-expand-md navigation-clean-button bg-warning">
    <div class="container"><img src="assets/img/travel-icon.png" style="width: 30px;height: 30px;margin-right: 5px;"><a class="navbar-brand" href="#">Voyages Merveilleux</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Circuits</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">La carte</a></li>
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Profile</a>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Mon espace</a><a class="dropdown-item" role="presentation" href="#">Panier</a><a class="dropdown-item" role="presentation" href="#">Notifications</a></div>
                </li>
            </ul>
            <span class="navbar-text actions"><a class="login" href="#"><i id="click_cart" class="fas fa-shopping-cart">(<span id="cart_client">0</span>) </i><a class="login" href="#">{$courriel}</a><a class="btn btn-light action-button" role="button" href onclick="deconnect(); return false;">Deconnexion</a></span>
            <select
                    style="margin: 5px;">
                <option value="12" selected="">FR</option>
                <option value="13">EN</option>
                <option value="14">ES</option>
            </select>
        </div>
    </div>
</nav>
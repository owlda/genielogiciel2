<div class="container" style="padding:20px; margin-bottom: 20px;">
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
<div class="container animated zoomInRight" style="padding:20px; margin-bottom: 20px;">
    <div class="row">
        <div class="col" style="flex-grow: 1;">
            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/beach.jpg" alt="Slide Image" loading="auto"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="assets/img/loft.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="assets/img/building.jpg" alt="Slide Image"></div>
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
            <h1>Paris</h1>
            <p>PLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br></p>
            <!-- <button class="btn btn-primary" type="button">Ajouter au panier</button> -->
            <a class="btn btn-primary" href="#" role="button">Ajouter au panier</a>
        </div>
    </div>
</div>
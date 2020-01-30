


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col" style="flex-grow: 1;">
                    <div class="carousel slide" data-ride="carousel"  id="carousel2">
                        <div class="carousel-inner" role="listbox" >
                            <div class="carousel-item active"><img class="w-100 d-block" src="{$arrayPhoto[0]}" alt="Slide Image" loading="auto"></div>
                            <div class="carousel-item"><img class="w-100 d-block" src="{$arrayPhoto[1]}" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="w-100 d-block" src="{$arrayPhoto[2]}" alt="Slide Image"></div>
                        </div>
                        <div><a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel2" role="button"
                                                                                                                            data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel2" data-slide-to="1"></li>
                            <li data-target="#carousel2" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
                <a href="#demo" data-toggle="collapse" style="text-align: center"><h1>{$titre}</h1></a>

                <div id="demo" class="collapse">
                    <div id="accordion">

                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                    Collapsible Group Item #1
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum..
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                    Collapsible Group Item #2
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum..
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                    Collapsible Group Item #3
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum..
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>





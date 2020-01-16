<div class="row">
    <div class="col">
        <input class="btn btn-success" type="button" value="Ajouter un hôtel" onclick="LoadModalAddHotel()">
        <h3>Hotel:</h3>
    </div>
    <div class="col">

    </div>
</div>
{foreach $arr_hotel as $hotel}
    <div class="row">
        <div class="col"></div>
        <div class="col-6">
            <h4>Hilton Montreal</h4>
            <div class="btn-toolbar">
                <div class="btn-group" role="group">
                    <button class="btn btn-warning" type="button">Modifier</button>
                    <button class="btn btn-danger" type="button">Supprimer</button>
                </div>
            </div>
        </div>
        <div class="col" style="text-align: right;margin-right: 5px;">
            <span style="padding: 5px;background-color: greenyellow;font-size: 20px;">1000$</span>
        </div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col-6">
            <div class="col"><a href="#">siteurl.ru</a> </div>
        </div>
        <div class="col"></div>
    </div>
{/foreach}

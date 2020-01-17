<div class="row">
    <div class="col">
        <input class="btn btn-success" type="button" value="Ajouter un hotel" onclick="LoadModalAddHotel({$idPaysEtape}, {$idVilleJour}, {$idJour})">
        <h3>Hotel(s):</h3>
    </div>
    <div class="col"></div>
</div>
{if $CountHotelJour > 0}
    {foreach $arr_hotel as $hotel}
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <h4>{$hotel.titre}</h4>
                <div class="btn-toolbar">
                    <div class="btn-group" role="group">
                        <button class="btn btn-warning" type="button">Modifier</button>
                        <button class="btn btn-danger" type="button">Supprimer</button>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="col"><span style="font-weight: bold">Place:</span> {$hotel.VilleHotel} </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="col"><span style="font-weight: bold">Site:</span><a href="{$hotel.site}"> {$hotel.site}</a> </div>
            </div>
            <div class="col"></div>
        </div>
    {/foreach}
{/if}


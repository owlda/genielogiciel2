<div class="row">
    <div class="col">
        <h2 style="padding: 5px;"><span style="font-size: medium">(ID={$idJour}) </span>{$NameJour}</h2>
        <div class="btn-toolbar">
            <div class="btn-group" role="group">
                <button class="btn btn-warning" type="button">Modifier</button>
                <button class="btn btn-danger" type="button">Supprimer</button>
            </div>
        </div>
    </div>
    <div class="col"></div>
    <div class="col" style="text-align: right;margin-right: 5px;">
        <span style="padding: 5px;background-color: greenyellow;font-size: 20px;">{$prixJour} $</span>
    </div>
</div>
<div class="row">
    <div class="col" style="white-space: nowrap;"><span style="font-weight: bold;">Pays:</span> {$NomPaysEtape}</div>
    <div class="col" style="white-space: nowrap;"><span style="font-weight: bold">Ville:</span> {$NomVilleJour}</div>
    <div class="col-8"><span style="font-weight: bold">Description:</span> {$DescriptionJour}</div>
</div>
<hr>
<section id="detail_restaurant_jour_{$idJour}">
    {include file="detail_restaurant.tpl"
    idPaysEtape=$idPaysEtape
    idVilleJour=$idVilleJour
    idJour=$idJour
    arr_restaurent=$arr_restaurent
    CountRestaurentJour=$CountRestaurentJour}
</section>
<hr>
<section id="detail_activity_jour_{$idJour}">
    {include file="detail_activity.tpl"
    idPaysEtape=$idPaysEtape
    idVilleJour=$idVilleJour
    idJour=$idJour
    arr_activity=$arr_activity
    CountActivityJour=$CountActivityJour}
</section>
<hr>
<section id="detail_hotel_jour_{$idJour}">
    {include file="detail_hotel.tpl"
    idPaysEtape=$idPaysEtape
    idVilleJour=$idVilleJour
    idJour=$idJour
    arr_hotel=$arr_hotel
    CountHotelJour=$CountHotelJour}
</section>
<hr>
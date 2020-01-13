<div class="row">
    <div class="col">
        <h2 style="padding: 5px;">{$NameJour}</h2>
        <div class="btn-toolbar">
            <div class="btn-group" role="group">
                <button class="btn btn-warning" type="button">Modifier</button>
                <button class="btn btn-danger" type="button">Supprimer</button>
            </div>
        </div>
    </div>
    <div class="col"></div>
    <div class="col" style="text-align: right;margin-right: 5px;">
        <span style="padding: 5px;background-color: greenyellow;font-size: 20px;">1000$</span>
    </div>
</div>
<div class="row">
    <div class="col"><span style="font-weight: bold">Pays:</span> {$NomPays}</div>
    <div class="col"><span style="font-weight: bold">Ville:</span> {$NomVille}</div>
    <div class="col-8"><span style="font-weight: bold">Description:</span> {$DescriptionJour}</div>
</div>
<hr>
<section id="detail_restaurant_jour_{$idJour}">
    {include file="detail_restaurant.tpl"
    idPays=$idPays
    idJour=$idJour
    arr_restaurent=$arr_restaurent
    CountRestaurentJour=$CountRestaurentJour}
</section>
<hr>
<section id="detail_activity">

</section>
<hr>
<section id="detail_hotel">

</section>
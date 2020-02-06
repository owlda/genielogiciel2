<div class="row">
    <div class="col">
        <h2 style="padding: 5px;"><span style="font-size: medium">(ID={$idJour}) </span>{$NameJour}</h2>
        {if (isset($NomPaysEtape) || !empty($NomPaysEtape)) && (isset($NomVilleJour) || !empty($NomVilleJour))}
            <div class="btn-toolbar">
                <div class="btn-group" role="group">
                    <input value="{$voc['btn_edit']}" class="btn btn-warning" type="button" onclick="BtnEditJour({$idJour}, {$idEtape})">
                    <input value="{$voc['btn_del']}" class="btn btn-danger" type="button">
                </div>
            </div>
        {/if}
    </div>
    <div class="col"></div>
    <div class="col" style="text-align: right;margin-right: 5px;">
        <span style="padding: 5px;background-color: greenyellow;font-size: 20px;">{$prixJour} $</span>
    </div>
</div>
<div class="row">
    <div class="col" style="white-space: nowrap;"><span style="font-weight: bold;">{$voc['lb_pays']}:</span>
        {if !isset($NomPaysEtape) || empty($NomPaysEtape)}
            <div class="alert alert-danger" role="alert">NULL</div>
        {/if}
        {$NomPaysEtape}
    </div>
    <div class="col" style="white-space: nowrap;"><span style="font-weight: bold">{$voc['lb_ville']}:</span>
        {if !isset($NomVilleJour) || empty($NomVilleJour)}
            <div class="alert alert-danger" role="alert">NULL</div>
        {/if}
        {$NomVilleJour}
    </div>
    <div class="col-8"><span style="font-weight: bold">{$voc['lb_description']}:</span>
        {if !isset($DescriptionJour) || empty($DescriptionJour)}
            <div class="alert alert-danger" role="alert">NULL</div>
        {/if}
        {$DescriptionJour}
    </div>
</div>
<hr>
{if isset($NomPaysEtape) || !empty($NomPaysEtape) || isset($NomVilleJour) || !empty($NomVilleJour)}
    <section id="detail_restaurant_jour_{$idJour}">
        {include file="detail_restaurant.tpl"
        voc = $voc
        idPaysEtape=$idPaysEtape
        idVilleJour=$idVilleJour
        idJour=$idJour
        arr_restaurent=$arr_restaurent
        CountRestaurentJour=$CountRestaurentJour}
    </section>
    <hr>
    <section id="detail_activity_jour_{$idJour}">
        {include file="detail_activity.tpl"
        voc = $voc
        idPaysEtape=$idPaysEtape
        idVilleJour=$idVilleJour
        idJour=$idJour
        arr_activity=$arr_activity
        CountActivityJour=$CountActivityJour}
    </section>
    <hr>
    <section id="detail_hotel_jour_{$idJour}">
        {include file="detail_hotel.tpl"
        voc = $voc
        idPaysEtape=$idPaysEtape
        idVilleJour=$idVilleJour
        idJour=$idJour
        arr_hotel=$arr_hotel
        CountHotelJour=$CountHotelJour}
    </section>
    <hr>
{/if}

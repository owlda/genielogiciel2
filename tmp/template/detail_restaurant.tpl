<div class="row">
    <div class="col">
        <input class="btn btn-success" type="button" value="{$voc['btn_add_restaurant']}" onclick="LoadModalAddRestaurent({$idPaysEtape}, {$idVilleJour}, {$idJour})">
        <h3>{$voc['lb_restaurant']}</h3>
    </div>
    <div class="col"></div>
</div>
{if $CountRestaurentJour > 0}
    {foreach $arr_restaurent as $restaurent}
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <h4>{$restaurent.titre}</h4>
                <div class="btn-toolbar">
                    <div class="btn-group" role="group">
                        <input value="{$voc['btn_edit']}" class="btn btn-warning" type="button">
                        <input value="{$voc['btn_del']}" class="btn btn-danger" type="button">
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="col"><span style="font-weight: bold">Place:</span> {$restaurent.VilleRestaurent} </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="col"><span style="font-weight: bold">Site:</span><a href="{$restaurent.site}"> {$restaurent.site}</a> </div>
            </div>
            <div class="col"></div>
        </div>
    {/foreach}
{/if}


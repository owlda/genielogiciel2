<div class="row">
    <div class="col">
        <input class="btn btn-success" type="button" value="Ajouter une activité" onclick="LoadModalAddActivity({$idPaysEtape}, {$idVilleJour}, {$idJour})">
        <h3>Activité(s):</h3>
    </div>
    <div class="col"></div>
</div>
{if $CountActivityJour > 0}
    {foreach $arr_activity as $activity}
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <h4>{$activity.titre}</h4>
                <div class="btn-toolbar">
                    <div class="btn-group" role="group">
                        <button class="btn btn-warning" type="button">Modifier</button>
                        <button class="btn btn-danger" type="button">Supprimer</button>
                    </div>
                </div>
            </div>
            <div class="col"></div>
            {*            <div class="col" style="text-align: right;margin-right: 5px;">
                            <span style="padding: 5px;background-color: greenyellow;font-size: 20px;">1000$</span>
                        </div>*}
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="col"><span style="font-weight: bold">Description:</span> {$activity.description} </div>
            </div>
            <div class="col"></div>
        </div>
    {/foreach}

{/if}

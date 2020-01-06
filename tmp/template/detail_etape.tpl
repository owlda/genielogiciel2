<input class="btn btn-success" type="button" value="Ajouter un étape" style="margin-top: 5px;" onclick="LoadAddEtape({$idCircuit})">

{if $count_etape > 0}
    {foreach $arr_etape as $etape}
        <h4>{$etape.titre}</h4>
        <div class="btn-toolbar" style="margin-bottom: 10px;">
            <div class="btn-group" role="group">
                <input value="Modifier" class="btn btn-warning" type="button">
                <button class="btn btn-danger" type="button">Supprimer</button>
                <input value="Ajouter un jour" class="btn btn-success" type="button" onclick="LoadModalAddJour({$etape.idPays}, {$etape.idEtape})">
            </div>
            <div class="btn-group" role="group"></div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card" style="padding: 10px;">
                    {include file='carousel-circuit.tpl'}
                </div>
            </div>
            <div class="col-8">
                <p>{$etape.description}</p>
            </div>
        </div>
    {/foreach}
{/if}




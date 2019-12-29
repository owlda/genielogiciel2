<input class="btn btn-success" type="button" value="Ajouter un étape" style="margin-top: 5px;" onclick="LoadAddEtape({$idCircuit})">

{if $Nb_etape > 0}

    {foreach $arr_etape as $etape}
        <h4>{$etape.titre}</h4>
        <div class="btn-toolbar" style="margin-bottom: 10px;">
            <div class="btn-group" role="group">
                <button class="btn btn-warning" type="button">Modifier</button>
                <button class="btn btn-danger" type="button">Supprimer</button>
                <button class="btn btn-success" type="button">Ajouter un jour</button>
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



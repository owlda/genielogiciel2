<input class="btn btn-success" type="button" value="Ajouter un étape" style="margin-top: 5px;" onclick="LoadAddEtape({$idCircuit})">

{*loop for etapes*}
{if $count_etape > 0}
<div class="container border border-primary rounded-lg animated zoomInRight" style="padding: 10px;">
    {foreach $arr_etape as $etape}
        <h2><span style="font-size: medium">(ID={$etape.idEtape}) </span>{$etape.titre}</h2>
        <div class="btn-toolbar" style="margin-bottom: 10px;">
            <div class="btn-group" role="group">
                <input value="Modifier" class="btn btn-warning" type="button">
                <button class="btn btn-danger" type="button">Supprimer</button>
                <input value="Ajouter un jour" class="btn btn-success" type="button" onclick="LoadModalAddJour({$etape.idPays}, {$etape.idEtape})">
            </div>
        </div>
        <div class="row">
            <div class="col">Pays: {$etape.NomPays}</div>
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
        <section id="ajouter_jour_{$etape.idEtape}">
            {if $etape.count_jour > 0}
                {include file="ajouter_jour.tpl" etape=$etape}
            {/if}
        </section>
    {/foreach}
</div>
{/if}




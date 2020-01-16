<input class="btn btn-success" type="button" value="Ajouter un étape" style="margin-top: 5px;" onclick="LoadAddEtape({$idCircuit})">

{*loop for etapes*}
{if $count_etape > 0}
<div class="container border border-primary rounded-lg animated zoomInRight" style="padding: 10px;">
    {foreach $arr_etape as $etape}
        <h2>{$etape.titre}</h2>
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
        <section id="ajouter_jour">
            {if $etape.count_jour > 0}
                <div class="border border-primary rounded-lg" style="margin-left: 30px;width: 70%;">
                    <div style="padding: 5px;">
                        <div class="row">
                            <div class="col">
                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                        Changer un jour
                                    </button>
                                    <div class="dropdown-menu">
                                        {*loop for jours*}
                                        {$count=$etape.count_jour}
                                        {foreach $etape.arr_jour as $jour}
                                            <a class="dropdown-item" href="#" onclick="ShowDetailJourChange({$etape.arr_jour[$etape.count_jour-1].idJour}, {$jour.idJour}, {$jour.idVille}, 'Jour {$count}', {$etape.idPays});return false">Jour {$count} (NumeroJour={$jour.numeroJour}, id={$jour.idJour})</a>
                                            {$count = $count - 1}
                                        {/foreach}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section id="detail_jour_{$etape.arr_jour[$etape.count_jour-1].idJour}">
                            {include file="detail_jour.tpl"
                            arr_restaurent = $etape.arr_jour[$etape.count_jour-1].Restaurent
                            idPays = $etape.idPays
                            idJour=$etape.arr_jour[$etape.count_jour-1].idJour
                            NameJour='Jour 1'
                            DescriptionJour=$etape.arr_jour[$etape.count_jour-1].description
                            CountRestaurentJour = $etape.arr_jour[$etape.count_jour-1].count_restaurent
                            NomPays=$etape.NomPays
                            NomVille=$etape.arr_jour[$etape.count_jour-1].NomVille }
                        </section>
                    </div>
                </div>
            {/if}
        </section>
    {/foreach}
</div>
{/if}




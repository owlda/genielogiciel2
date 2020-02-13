<input class="btn btn-success" type="button" value="{$voc["btn_add_etape"]}" style="margin-top: 5px;" onclick="LoadAddEtape({$idCircuit})">
{*loop for etapes*}
{if $count_etape > 0}
<div class="container border border-primary rounded-lg animated zoomInRight" style="padding: 10px;">
    {foreach $arr_etape as $etape}
        <h2>
            <span style="font-size: medium">(ID={$etape.idEtape}) </span>
            {if !isset($etape['titre'|cat:$smarty.cookies.lang]) || empty($etape['titre'|cat:$smarty.cookies.lang])}
                <div class="alert alert-danger" role="alert">NULL</div>
            {/if}
            {$etape['titre'|cat:$smarty.cookies.lang]}
        </h2>
        {if isset($etape.NomPays) || !empty($etape.NomPays)}
            <div class="btn-toolbar" style="margin-bottom: 10px;">
                <div class="btn-group" role="group">
                    <input value="{$voc["btn_edit"]}" class="btn btn-warning" type="button">
                    <input value="{$voc["btn_del"]}" class="btn btn-danger" type="button">
                    <input value="{$voc["btn_add_day"]}" class="btn btn-success" type="button" onclick="LoadModalAddJour({$etape.idPays}, {$etape.idEtape})">
                </div>
            </div>
        {/if}
        <div class="row">
            <div class="col">{$voc["lb_pays"]}:
                {if !isset($etape.NomPays) || empty($etape.NomPays)}
                    <div class="alert alert-danger" role="alert">NULL</div>
                {/if}
                {$etape.NomPays}
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card" style="padding: 10px;">
                    {include file='carousel-circuit.tpl'}
                </div>
            </div>
            <div class="col-8">
                {if !isset($etape['description'|cat:$smarty.cookies.lang]) || empty($etape['description'|cat:$smarty.cookies.lang])}
                    <div class="alert alert-danger" role="alert">NULL</div>
                {/if}
                <p>{$etape['description'|cat:$smarty.cookies.lang]}</p>
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




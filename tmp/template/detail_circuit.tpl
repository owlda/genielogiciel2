<a href="../pages/admin.php">{$voc["lb_h1_list_circuit"]}</a>
<h1>
    {if !isset($titre) || empty($titre)}
        <div class="alert alert-danger" role="alert">NULL</div>
    {/if}
    {$titre}
</h1>
{if (isset($titre) || !empty($titre)) && (isset($NomTheme) || !empty($NomTheme))}
    <div class="btn-toolbar">
        <div class="btn-group" role="group">
            <input value="{$voc["btn_edit"]}" class="btn btn-warning" type="button" onclick="location.href='edit-circuit.php?id={$idCircuit}'">
            <input value="{$voc["btn_del"]}" class="btn btn-danger" type="button" id="btn_del_circuit" onclick="ShowModalDeleteCircuit();">
        </div>
    </div>
{/if}

<div>
    <span class="font-weight-bold">{$voc["lb_date_depart"]}: </span>
    <span class="small">{$dateDepart}</span> &nbsp; &nbsp;
    <span class="font-weight-bold">{$voc["lb_date_fin"]}: </span>
    <span class="small">{$dateFin}</span>
</div>
<div>
    <span class="font-weight-bold">{$voc["lb_theme"]} </span>
    <span>
        {if !isset($NomTheme) || empty($NomTheme)}
            <div class="alert alert-danger" role="alert">NULL</div>
        {/if}
        {$NomTheme}
    </span> &nbsp; &nbsp;
    <span class="font-weight-bold">{$voc["lb_ville_depart"]}: </span>
    <span>
        {if !isset($pointDepart) || empty($pointDepart)}
            <div class="alert alert-danger" role="alert">NULL</div>
        {/if}
        {$pointDepart}
    </span>
</div>
<div class="row">
    <div class="col">
        <div class="card" style="padding: 10px;">
            {include file='carousel_circuit.tpl' arr_image_circuit=$arr_image_circuit}
            <div class="list-group-item text-white bg-dark" style="text-align: center;display: inline;">
                <h2 class="text-center my-1" style="display: inline;margin-bottom: 10px;">{$prix}$</h2>
            </div>
        </div>
    </div>
    <div class="col">
        <p>{$description}</p>
    </div>
</div>

{include file='modal_del_circuit.tpl'}




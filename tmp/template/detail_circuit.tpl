<h1>{$titre}</h1>
<div class="btn-toolbar">
    <div class="btn-group" role="group">
        <input value="Modifier" class="btn btn-warning" type="button" onclick="location.href='edit-circuit.php?id={$idCircuit}'">
        <input value="Supprimer" class="btn btn-danger" type="button" id="btn_del_circuit" onclick="ShowModalDeleteCircuit();">
    </div>
</div>
<div><span class="font-weight-bold">Date de début: </span><span class="small">{$dateDepart}</span> &nbsp; &nbsp; <span class="font-weight-bold">Date de fin: <span class="small">{$dateFin}</span></span></div>
<div><span><span class="font-weight-bold">Thème: </span><span>{$NomTheme}</span> &nbsp; &nbsp; <span class="font-weight-bold">Ville de départ: </span><span>{$pointDepart}</span></div>
<div class="row">
    <div class="col">
        <div class="card" style="padding: 10px;">
            {include file='carousel-circuit.tpl'}
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


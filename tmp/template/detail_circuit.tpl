<h3>{$titre}</h3>
<div class="btn-toolbar">
    <div class="btn-group" role="group">
        <input value="Modifier" class="btn btn-warning" type="button" onclick="location.href='editcircuit.php?id={$idCircuit}'">
        <input value="Supprimer" class="btn btn-danger" type="button">
    </div>
</div>
<div><span class="font-weight-bold">Date de début: </span><span class="small">{$dateDepart}</span> &nbsp; &nbsp; <span class="font-weight-bold">Date de fin: <span class="small">{$dateFin}</span></span></div>
<div><span><span class="font-weight-bold">Thème: </span><span>{$NomTheme}</span> &nbsp; &nbsp; <span class="font-weight-bold">Ville de départ: </span><span>{$pointDepart}</span></div>
<div class="row">
    <div class="col">
        <div class="card" style="padding: 10px;"><img class="card-img-top w-100 d-block" src="building.jpg">
            <div class="list-group-item text-white bg-dark" style="text-align: center;display: inline;">
                <h2 class="text-center my-1" style="display: inline;margin-bottom: 10px;">{$prix}$</h2>
            </div>
        </div>
    </div>
    <div class="col">
        <p>{$description}</p>
    </div>
</div>
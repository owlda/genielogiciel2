<h1>Liste des circuits</h1>
<input value="Ajouter un circuit" class="btn btn-success" type="button" onclick="LoadAddCircuit();">
<div class="container-fluid" style="width: 95%;padding: 2%;">
    <div class="row" id="card-container"></div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Photo</th>
            <th scope="col">Titre</th>
            <th scope="col">Prix</th>
            <th scope="col">Rabais</th>
            <th scope="col">Status</th>
            <th scope="col">Thème</th>
            <th scope="col">Date de départ</th>
            <th scope="col">Date de fin</th>
            <th scope="col">...</th>
        </tr>
        </thead>
        <tbody>
        {foreach $arr_list_circuit as $key}
            <tr>
                <th scope="row">{$key.idCircuit}</th>
                <td><div style="width: 100px;height: 100px">{include file='carousel-circuit.tpl'}</div></td>
                <td>{$key.titre}</td>
                <td>{$key.prix}$</td>
                <td>
                    {if $key.Rabais < 0 }
                        <input type="button" value="&#10133; Rabais" class="btn btn-primary" style="display: inline" onclick="BtnAddRabais({$key.idCircuit})">
                        {else}
                        <span style="font-size: xx-large">{$key.Rabais}%</span><br>
                        <input type="button" value="Supprimer" class="btn btn-danger" onclick="BtnDelRabais({$key.idCircuit})"><br>
                        <span class="small">{$key.DateDebut}</span><br>
                        <span>*****</span><br>
                        <span class="small">{$key.DateFin}</span><br>
                    {/if}
                </td>
                <td><strong>{$key.NomStatutCircuit}</strong></td>
                <td>{$key.NomTheme}</td>
                <td>{$key.dateDepart}</td>
                <td>{$key.dateFin}</td>
                <td> <input type="button" value="Détaillé" class="btn btn-info" onclick="DetailCircuit({$key.idCircuit})"></td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>

{include file="modal_add_rabais.tpl"}
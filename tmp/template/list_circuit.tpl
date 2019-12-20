<h1>Liste des circuits</h1>
<input value="Ajouter un circuit" class="btn btn-success" type="button" onclick="location.href='add-circuit.php'">
<div class="container-fluid" style="width: 95%;padding: 2%;">
    <div class="row" id="card-container"></div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Photo</th>
            <th scope="col">Titre</th>
            <th scope="col">Prix</th>
            <th scope="col">Status</th>
            <th scope="col">Thème</th>
            <th scope="col">Date de départ</th>
            <th scope="col">Date de fin</th>
            <th scope="col">Rabais</th>
            <th scope="col">...</th>
        </tr>
        </thead>
        <tbody>
        {foreach $arr_list_circuit as $key}
            <tr>
                <th scope="row">{$key.idCircuit}</th>
                <td>{include file='carousel-circuit.tpl'}</td>
                <td>{$key.titre}</td>
                <td>{$key.prix}$</td>
                <td><strong>{$key.NomStatutCircuit}</strong></td>
                <td>{$key.NomTheme}</td>
                <td>{$key.dateDepart}</td>
                <td>{$key.dateFin}</td>
                <td>{$key.duree}</td>
                <td><a href="../pages/detail-circuit.php?id={$key.idCircuit}">Détaillé</a></td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>

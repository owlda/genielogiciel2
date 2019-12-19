<h1>Liste des circuits</h1>
<input value="Ajouter un circuit" class="btn btn-success" type="button" onclick="location.href='add-circuit.php'">
<div class="container-fluid" style="width: 95%;padding: 2%;">
    <div class="row" id="card-container"></div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titre</th>
            <th scope="col">Prix</th>
            <th scope="col">Status</th>
            <th scope="col">Thème</th>
            <th scope="col">Date de départ</th>
            <th scope="col">Date de fin</th>
            <th scope="col">Durée</th>
            <th scope="col">...</th>
        </tr>
        </thead>
        <tbody>
        {foreach $arr_list_circuit as $key => $value}
            <tr>
                <th scope="row">{$key}</th>
                {*<td>{$value.idCircuit}</td>*}
                <td>{$value.titre}</td>
                <td>{$value.prix}</td>
                <td><strong>{$value.NomStatutCircuit}</strong></td>
                <td>{$value.NomTheme}</td>
                <td>{$value.dateDepart}</td>
                <td>{$value.dateFin}</td>
                <td>{$value.duree}</td>
                <td><a href="../pages/detail-circuit.php?id={$key}">Détaillé</a></td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>

<h1>Liste des circuits</h1>
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
                <td><strong>{$value.idStatutCircuit}</strong></td>
                <td>{$value.idTheme}</td>
                <td>{$value.dateDepart}</td>
                <td>{$value.dateFin}</td>
                <td>{$value.duree}</td>
                <td><a href="../pages/detailcircuit.html?id={$key}" onclick="DetaleCircuit()">Détaillé</a></td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>

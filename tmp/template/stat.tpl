<table class="table table-hover">
    <tbody>
    <tr style="background-color: #c1e2b3">
        <th scope="row" >Nombre de tous les étapes</th>
        <th scope="row">Nombre de tous les jours</th>
        <th scope="row">Prix (étapes et jours)</th>
    </tr>
    <tr>
        <th scope="row">{$count_etape}</th>
        <th scope="row">{$all_jour}</th>
        <th scope="row">{$all_prix}$</th>
    </tr>
    {if $count_etape > 0}
        {foreach $arr_etape as $etape}
            <tr style="background-color: #c1e2b3">
                <th scope="row">ID Etape</th>
                <th scope="row">numeroEtap</th>
                <th scope="row">Nombre de jours</th>
                <th scope="row">Prix</th>
            </tr>
            <tr>
                <td>{$etape.idEtape}
                    <small><br>{$etape.dateDebut}
                    <br>{$etape.dateFin}</small></td>
                <td>{$etape.numeroEtap}</td>
                <td>{$etape.count_jour}</td>
                <td style="font-weight: bold">{$etape.prix}$</td>
            </tr>
            {if $etape.count_jour > 0}
                <tr style="background-color: #b3b7bb">
                    <td></td>
                    <th scope="row">ID Jour</th>
                    <th scope="row">Jour</th>
                    <th scope="row">Prix</th>
                    <th scope="row">numeroJour</th>
                    <th scope="row">Nombre de restaurents</th>
                    <th scope="row">Nombre d'activités</th>
                    <th scope="row">Nombre d'hôtels</th>
                </tr>
                {$tmp_count = 1}
                {section name=ind loop=$etape.arr_jour step=-1}
                    <tr>
                        <td></td>
                        <td>{$etape.arr_jour[ind].idJour}</td>
                        <td style="color: #6f42c1;font-weight: bold">Jour {$tmp_count}</td>
                        <td style="font-weight: bold">{$etape.arr_jour[ind].prix}$</td>
                        <td>{$etape.arr_jour[ind].numeroJour}</td>
                        <td>
                            {$etape.arr_jour[ind].count_restaurent}
                                <ul class="list-group">
                                    {foreach $etape.arr_jour[ind].Restaurent as $restaurent}
                                        <li class="list-group-item ">
                                            <strong>ID - {$restaurent.idRestaurent}</strong>
                                            <hr>
                                            <strong>Titre:</strong> {$restaurent.titre}
                                            <hr>
                                            <strong>Site:</strong> {$restaurent.site}
                                            <hr>
                                        </li>
                                    {/foreach}
                                </ul>
                        </td>
                        <td>
                            {$etape.arr_jour[ind].count_activity}
                            <ul class="list-group">
                                {foreach $etape.arr_jour[ind].Activity as $activity}
                                    <li class="list-group-item">
                                        <strong>ID - {$activity.idActivity}</strong>
                                        <hr>
                                        <strong>Titre:</strong> {$activity.titre}
                                        <hr>
                                        <strong>Description:</strong> {$activity.description}
                                        <hr>
                                    </li>
                                {/foreach}
                            </ul>
                        </td>
                        <td>
                            {$etape.arr_jour[ind].count_hotel}
                            {foreach $etape.arr_jour[ind].Hotel as $hotel}
                                <li class="list-group-item">
                                    <strong>ID - {$hotel.idHotel}</strong>
                                    <hr>
                                    <strong>Titre:</strong> {$hotel.titre}
                                    <hr>
                                    <strong>Site:</strong> {$hotel.site}
                                    <hr>
                                </li>
                            {/foreach}
                        </td>
                    </tr>
                    {$tmp_count = $tmp_count + 1 }
                {/section}
            {/if}
        {/foreach}
    {/if}
    </tbody>
</table>
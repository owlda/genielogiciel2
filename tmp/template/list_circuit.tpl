<h1>{$voc["lb_h1_list_circuit"]}</h1>
<input value="{$voc["btn_add_circuit"]}" class="btn btn-success" type="button" onclick="LoadAddCircuit();">
<div class="container-fluid" style="padding: 2%;">
    <div class="row" id="card-container"></div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Photo</th>
            <th scope="col">{$voc["lb_title"]}</th>
            <th scope="col">{$voc["lb_price"]}</th>
            <th scope="col">{$voc["lb_rabais"]}</th>
            <th scope="col">{$voc["lb_status"]}</th>
            <th scope="col">{$voc["lb_theme"]}</th>
            <th scope="col">{$voc["lb_ville_depart"]}</th>
            <th scope="col">{$voc["lb_date_depart"]}</th>
            <th scope="col">{$voc["lb_date_fin"]}</th>
            <th scope="col">...</th>
        </tr>
        </thead>
        <tbody>
        {foreach $arr_list_circuit as $key}
            <tr>
                <th scope="row">{$key.idCircuit}</th>
                <td><div style="width: 100px;height: 100px">{include file='carousel-circuit.tpl'}</div></td>
                <td>
                    {if !isset($key['titre'|cat:$smarty.cookies.lang]) || empty($key['titre'|cat:$smarty.cookies.lang])}
                        <div class="alert alert-danger" role="alert">NULL</div>
                    {/if}
                    {$key['titre'|cat:$smarty.cookies.lang]}
                </td>
                <td>{$key.prix}$</td>
                <td>
                    {if $key.Rabais < 0 }
                        <input type="button" value="&#10133; {$voc["lb_rabais"]}" class="btn btn-primary" style="display: inline" onclick="BtnAddRabais({$key.idCircuit})">
                        {else}
                        <span style="font-size: xx-large">{$key.Rabais}%</span><br>
                        <input type="button" value="Supprimer" class="btn btn-danger" onclick="BtnDelRabais({$key.idCircuit})"><br>
                        <span class="small">{$key.DateDebut}</span><br>
                        <span>*****</span><br>
                        <span class="small">{$key.DateFin}</span><br>
                    {/if}
                </td>
                <td><strong>{$key.NomStatutCircuit}</strong></td>
                <td>
                    {if !isset($key['NomTheme']) || empty($key['NomTheme'])}
                        <div class="alert alert-danger" role="alert">NULL</div>
                    {/if}
                    {$key.NomTheme}
                </td>
                <td>
                    {if !isset($key['pointDepart'|cat:$smarty.cookies.lang]) || empty($key['pointDepart'|cat:$smarty.cookies.lang])}
                        <div class="alert alert-danger" role="alert">NULL</div>
                    {/if}
                    {$key['pointDepart'|cat:$smarty.cookies.lang]}
                </td>
                <td>{$key.dateDepart}</td>
                <td>{$key.dateFin}</td>
                <td> <input type="button" value="{$voc["btn_detail"]}" class="btn btn-info" onclick="DetailCircuit({$key.idCircuit})"></td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>

{include file="modal_add_rabais.tpl" voc=$voc}
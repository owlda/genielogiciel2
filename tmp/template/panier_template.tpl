<div class="container" id="modals_panier">
    <!-- Modal -->
    <div class="modal fade" id="myModal_panier" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body" style="padding:5px 5px;">

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Circuit</th>
                            <th scope="col">Prix</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        {if $count_item_cart > 0}
                            <tbody>
                            {foreach $arr_circuit_cart as  $circuit}
                                <tr>
                                    <td>{$circuit['titre']}</td>
                                    <td><span style="font-weight: bold">{$circuit['prix']}<span></span></td>
                                    <td><button type="button" class="btn btn-danger" id="idCircuit" onclick="RemoveItemCart()">Supprimer</button></td>
                                </tr>
                            {/foreach}
                            <tr>
                                <td></td>
                                <td>Total - <span style="font-weight: bold"></span>$</td>
                                <td><button type="button" class="btn btn-success" id="idCircuit" onclick="payer()">Payer</button></td>
                            </tr>
                            </tbody>
                        {/if}


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
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
                        {if }

                        {/if}
                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><button type="button" class="btn btn-info" id="idCircuit" onclick="remove(this.id)">Supprimer</button></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total - <span></span>$</td>
                            <td><button type="button" class="btn btn-info" id="idCircuit" onclick="payer()">Supprimer</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
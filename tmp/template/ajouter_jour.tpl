<div class="border border-primary rounded-lg" style="margin-left: 30px;width: 70%;">
    <div style="padding: 5px;">
        <div class="row">
            <div class="col">
                <div class="btn-group dropup">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                        Changer un jour
                    </button>
                    <div class="dropdown-menu" id="list_jour_etape_{$etape.idEtape}">
                        {include file="list_jour.tpl" count=$etape.count_jour etape_arr_jour=$etape.arr_jour}
                    </div>
                </div>
            </div>
        </div>
        <section id="detail_jour_{$etape.arr_jour[$etape.count_jour-1].idJour}">
            {include file="detail_jour.tpl"
            prixJour = $etape.arr_jour[$etape.count_jour-1].prix
            idPaysEtape = $etape.idPays
            NomPaysEtape=$etape.NomPays
            idVilleJour=$etape.arr_jour[$etape.count_jour-1].idVille
            NomVilleJour=$etape.arr_jour[$etape.count_jour-1].NomVille
            idJour=$etape.arr_jour[$etape.count_jour-1].idJour
            NameJour='Jour 1'
            DescriptionJour=$etape.arr_jour[$etape.count_jour-1].description
            arr_restaurent = $etape.arr_jour[$etape.count_jour-1].Restaurent
            CountRestaurentJour = $etape.arr_jour[$etape.count_jour-1].count_restaurent
            arr_activity = $etape.arr_jour[$etape.count_jour-1].Activity
            CountActivityJour = $etape.arr_jour[$etape.count_jour-1].count_activity
            arr_hotel = $etape.arr_jour[$etape.count_jour-1].Hotel
            CountHotelJour = $etape.arr_jour[$etape.count_jour-1].count_hotel}
        </section>
    </div>
</div>
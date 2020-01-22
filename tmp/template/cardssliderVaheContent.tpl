{foreach $arrayCircuit as $circuit}
    <div class="card">
        <img src="upload/1/moscow.jpg" class="card-img-top w-100 d-block">
        <div class="card-body" id={$circuit.idCircuit} onclick="showcard(this.id)">
            <a onclick="toto()" href>
                <h4 class="card-title">{$circuit.titre}</h4>
            </a>
            <p class="card-text">{$circuit.description} Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
            <p class="card-text">{$circuit.prix}$</p>
            <button class="btn btn-primary" type="button">Ajouter au panier</button>
        </div>
    </div>
{/foreach}

{*
<div class="card"><img src="upload/1/moscow.jpg" class="card-img-top w-100 d-block">
    <div class="card-body" id={$idCircuit1} onclick="showcard(this.id)">
        <a onclick="toto()" href>
            <h4 class="card-title">{$titreCircuit1}</h4>
        </a>
        <p class="card-text">{$descCircuit1}Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
        <p class="card-text">50.000$</p>
        <button class="btn btn-primary" type="button">Ajouter au panier</button>
    </div>
</div>

<div class="card"><img src="assets/img/loft.jpg" class="card-img-top w-100 d-block">
    <div class="card-body">
        <h4 class="card-title">Russie</h4>
        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
        <button class="btn btn-primary" type="button">Ajouter au panier</button>
    </div>
</div>
<div class="card"><img src="assets/img/building.jpg" class="card-img-top w-100 d-block">
    <div class="card-body">
        <h4 class="card-title">États-Unis</h4>
        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
        <button class="btn btn-primary" type="button">Ajouter au panier</button></div>
</div>*}

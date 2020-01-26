{foreach $arrayCircuit as $circuit}
    <div class="card">
        <img src="upload/{$circuit.idCircuit}/1.jpg" class="card-img-top w-100 d-block">
        <div class="card-body">
            <a href onclick="showcard({$circuit.idCircuit}); return false;" >
                <h4 class="card-title">{$circuit.titre}</h4>
            </a>
            <p class="card-text">{$circuit.description} Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
            <p class="card-text">{$circuit.prix}$</p>
            <button class="btn btn-primary" type="button" onclick="addpanier({$circuit.idCircuit})">Ajouter au panier</button>
        </div>
    </div>
{/foreach}

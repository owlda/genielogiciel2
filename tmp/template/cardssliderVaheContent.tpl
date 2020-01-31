{*{foreach $arrayCircuit as $circuit}
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
{/foreach}*}
<div class="card">
    {*<img src="{$arrayPhoto[0].imagePath}" class="card-img-top w-100 d-block">*}
    <img src="{$arrayPhoto[0]}" class="card-img-top w-100 d-block">
    <div class="card-body">
        <a href onclick="showcard({$arrayCircuit[0].idCircuit}); return false;" >
            <h4 class="card-title">{$arrayCircuit[0].titre}</h4>
        </a>
        <p class="card-text">{$arrayCircuit[0].description} Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
        <p class="card-text">{$arrayCircuit[0].prix}$</p>
        <button class="btn btn-primary" type="button" onclick="addpanier({$arrayCircuit[0].idCircuit})">Ajouter au panier</button>
    </div>
</div>
<div class="card">
    <img src="{$arrayPhoto[1]}" class="card-img-top w-100 d-block">
    <div class="card-body">
        <a href onclick="showcard({$arrayCircuit[1].idCircuit}); return false;" >
            <h4 class="card-title">{$arrayCircuit[1].titre}</h4>
        </a>
        <p class="card-text">{$arrayCircuit[1].description} Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
        <p class="card-text">{$arrayCircuit[1].prix}$</p>
        <button class="btn btn-primary" type="button" onclick="addpanier({$arrayCircuit[1].idCircuit})">Ajouter au panier</button>
    </div>
</div>
<div class="card">
    <img src="{$arrayPhoto[2]}" class="card-img-top w-100 d-block">
    <div class="card-body">
        <a href onclick="showcard({$arrayCircuit[2].idCircuit}); return false;" >
            <h4 class="card-title">{$arrayCircuit[2].titre}</h4>
        </a>
        <p class="card-text">{$arrayCircuit[2].description} Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
        <p class="card-text">{$arrayCircuit[2].prix}$</p>
        <button class="btn btn-primary" type="button" onclick="addpanier({$arrayCircuit[2].idCircuit})">Ajouter au panier</button>
    </div>
</div>
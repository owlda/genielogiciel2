{foreach $arrayCircuit as $circuit}
    <div class="col-md-4">
        <div class="card">
            {*<img src="{$arrayPhoto[0].imagePath}" class="card-img-top w-100 d-block">*}
            <img src="{$circuit.photo}" class="card-img-top w-100 d-block">
            <div class="card-body">
                <a href onclick="showcard({$circuit.idCircuit}); return false;" >
                    <h4 class="card-title">{$circuit.titre}</h4>
                </a>
                <p class="card-text">{$circuit.description} Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                <p class="card-text">{$circuit.prix}$</p>
            </div>
        </div>
    </div>
{/foreach}
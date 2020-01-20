        <div class="col" style="flex-grow: 1;">
            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner" role="listbox">
                    {$count=0}
                    {foreach from=$arr_image_circuit item=image}
                        <div class="carousel-item {if $count==0}active{/if}">
                            <img class="w-100 d-block" src="{$image}" alt="Slide Image" {if $count==0}loading="auto"{/if}>
                        </div>
                        {$count=$count+1}
                    {/foreach}
                </div>
                <div>
                    <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span><span class="sr-only">Next</span>
                    </a>
                </div>
                <ol class="carousel-indicators">
                    {for $i=0 to $count-1}
                        <li data-target="#carousel-1" data-slide-to="{$i}" {if $i == 0}class="active"{/if}></li>
                    {/for}
                </ol>
            </div>
        </div>
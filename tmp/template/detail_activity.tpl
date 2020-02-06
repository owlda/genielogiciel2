<div class="row">
    <div class="col">
        <input class="btn btn-success" type="button" value="{$voc['btn_add_activity'] }" onclick="LoadModalAddActivity({$idPaysEtape}, {$idVilleJour}, {$idJour})">
        <h3>{$voc['lb_activity']}</h3>
    </div>
    <div class="col"></div>
</div>
{if $CountActivityJour > 0}
    {foreach $arr_activity as $activity}
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <h4>{$activity.titre}</h4>
                <div class="btn-toolbar">
                    <div class="btn-group" role="group">
                        <input value="{$voc['btn_edit']}" class="btn btn-warning" type="button">
                        <input value="{$voc['btn_del']}" class="btn btn-danger" type="button">
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="col"><span style="font-weight: bold">{$voc['lb_description']}:</span> {$activity.description} </div>
            </div>
            <div class="col"></div>
        </div>
    {/foreach}

{/if}

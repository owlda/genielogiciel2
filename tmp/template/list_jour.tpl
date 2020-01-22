{*loop for jours*}
{foreach $etape_arr_jour as $jour}
    <a class="dropdown-item" href="#" onclick="ShowDetailJourChange({$etape.arr_jour[$etape.count_jour-1].idJour}, {$jour.idJour}, {$jour.idVille}, 'Jour {$count}', {$etape.idPays});return false">Jour {$count} (NumeroJour={$jour.numeroJour}, id={$jour.idJour})</a>
    {$count = $count - 1}
{/foreach}
{foreach $arr_list_statutcircuit as  $status}
    <option value="{$status['idStatutCircuit']}">{$status['idStatutCircuit']} - {$status['statut']}</option>
{/foreach}
{foreach $arr_pays as $pays}
    <option value="{$pays['idPays']}">{$pays['nom'|cat:$smarty.cookies.lang]}</option>
{/foreach}
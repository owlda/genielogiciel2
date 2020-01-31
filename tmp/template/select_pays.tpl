{foreach $arr_pays as $pays}
    {if $pays['nom'|cat:$smarty.cookies.lang] != NULL}
        <option value="{$pays['idPays']}">{$pays['nom'|cat:$smarty.cookies.lang]}</option>
    {/if}
{/foreach}
{foreach $arr_list_ville as $ville}
    {if isset($ville['nom'|cat:$smarty.cookies.lang]) || !empty($ville['nom'|cat:$smarty.cookies.lang])}
        <option value="{$ville['idVille']}">
            {$ville['nom'|cat:$smarty.cookies.lang]}
        </option>
    {/if}
{/foreach}
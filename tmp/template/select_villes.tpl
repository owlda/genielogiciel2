{foreach $arr_list_ville as $ville}
    <option value="{$k}">{$v.nom}</option>

    {if $theme['theme'|cat:$smarty.cookies.lang] != NULL}
        <option value="{$theme['id']}">{$theme['theme'|cat:$smarty.cookies.lang]}</option>
    {/if}
{/foreach}
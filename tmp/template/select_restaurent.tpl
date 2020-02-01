{foreach $arr_list_restaurent as  $restaurent}
    {if $restaurent['titre'|cat:$smarty.cookies.lang] != NULL}
        <option value="{$restaurent['idRestaurent']}">{$restaurent['titre'|cat:$smarty.cookies.lang]}</option>
    {/if}
{/foreach}
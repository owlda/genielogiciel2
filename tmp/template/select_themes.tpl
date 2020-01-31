{foreach $arr_theme_circuit as $theme}
    {if $theme['theme'|cat:$smarty.cookies.lang] != NULL}
        <option value="{$theme['id']}">{$theme['theme'|cat:$smarty.cookies.lang]}</option>
    {/if}
{/foreach}
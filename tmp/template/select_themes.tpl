{foreach $arr_theme_circuit as $theme}
    <option value="{$theme['id']}">{$theme['theme'|cat:$smarty.cookies.lang]}</option>
{/foreach}
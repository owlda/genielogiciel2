{foreach $arr_list_restaurent as  $restaurent}
    <option value="{$restaurent['idRestaurent']}">{$restaurent['titre'|cat:$smarty.cookies.lang]}</option>
{/foreach}
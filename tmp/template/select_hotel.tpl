{foreach $arr_list_hotel as  $hotel}
    <option value="{$hotel['idHotel']}">{$hotel['titre'|cat:$smarty.cookies.lang]}</option>
{/foreach}
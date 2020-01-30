$(document).ready(function () {
    $("#lang").val(Cookies.get('lang'));
    Cookies.set('lang', $('#lang').val(), { expires: 30 });
});

function ChangeCokies() {
    Cookies.set('lang', $('#lang').val(), {expires: 30});
    location.reload();
}
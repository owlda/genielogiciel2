function ShowModalDeleteCircuit(){
    $('#modal_delete').modal('show');
    $('.modal-backdrop').css('position', 'static');
}

function BtnAddRabais(idCircuit){
    $('#modal_rabais').modal('show');
    $('.modal-backdrop').css('position', 'static');
    let str = 'BtnRegistreRabais(' + idCircuit + ')'
    $('#register_rabais').attr('onclick', str);
}

function BtnViewNewVille() {
    $('#ViewNewVille').css('display', 'block');
}
function BtnNotVille() {
    $('#ViewNewVille').css('display', 'none');
}

function BtnViewNewRestaurent() {
    $('#ViewNewRestaurent').css('display', 'block');
}
function BtnNotRestaurent() {
    $('#ViewNewRestaurent').css('display', 'none');
}
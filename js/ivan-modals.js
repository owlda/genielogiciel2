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

function BtnNotVille() {
    $('#ViewNewVille').css('display', 'none');
}

function BtnViewNewVille() {
    $('#ViewNewVille').css('display', 'block');
}

function LoadModalAddHotel(){
    $('#modal_add_hotel').modal('show');
    $('.modal-backdrop').css('position', 'static');
}
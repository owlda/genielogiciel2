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
$(document).ready(function () {

    new nicEditor({fullPanel : true}).panelInstance('NicEdit');



    $('#sd').click(function () {
        Create_Form_Ivan();
    });

    //TODO Получить переменную с редактора
    $('#verification-NicEdit').click(function () {

        var nicE = new nicEditors.findEditor('NicEdit');
        question = nicE.getContent();
        alert(question);
    });

});

function BtnViewNewTheme() {

    $('#ViewNewTheme').css('display', 'block');
}

function BtnNotTheme() {

    $('#ViewNewTheme').css('display', 'none');
}

function Create_Form_Ivan() {

    $('#form-circuit').text("");

    //TODO Создание формы для добавления circuit
    $('#form-circuit').append('<form>\n' +
        '  <div class="form-group">\n' +
        '    <label for="exampleInputEmail1">Titre:</label>\n' +
        '    <input type="text" class="form-control">\n' +
        '  </div>\n' +
        '  <div class="form-group">\n' +
        '    <label>Password</label>\n' +
        '    <input type="text" class="form-control">\n' +
        '  </div>\n' +
        '  <div> \n' +
        '    <label for="exampleInputEmail1" id="label_description_circuit">Description</label>\n' +
        '    <textarea id="NicEdit" cols="70" rows="5" style="width: 60%" >Some Sample Text</textarea>\n' +
        '  </div>  \n' +
        '<div class="form-group"> \n' +
        '  <label id="label_theme_circuit"></label> \n' +
        '</div> \n' +
        '<div> \n' +
        '</div>\n' + '</br>' +
        '  <button type="submit" id="btn_add_circuit" class="btn btn-primary">Submit</button>\n' +
        '</form>');

    //TODO Créer select dans la forme
    Create_Select_Ivan(obj["theme_circuit"]);

    $("#label_titre_circuit").text(obj["label_titre_circuit"]);
    $("#label_theme_circuit").text(obj["label_theme_circuit"]);
    $("#label_description_circuit").text(obj["label_description_circuit"]);
    $("#btn_add_circuit").text(obj["btn_add_circuit"]);

   /* ' <input type="text" value="dd-mm-yy" onfocus="this.select();lcs(this)"  onclick="cancelBubble=true;this.select();lcs(this)">\n' +*/
}

//TODO Function pour créer select
function Create_Select_Ivan(obj) {

    var sel_ivan = $("<select>").attr("id", "select_theme_circuit").attr("class", "form-control");

    $.each(obj, function( key, value) {
        sel_ivan.append($("<option>").attr('value',key).text(value));
    });

   $('#label_theme_circuit').after(sel_ivan);
}
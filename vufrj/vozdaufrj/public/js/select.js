
function optionCheck() {
    var select = $('#predio').val();
    if (select == "CCMN") {
        $('#CCMN').removeClass('escondidinho');
        $('#CCMN').addClass('form-control');
        $('#CCS').addClass('escondidinho');
        $('#CT').addClass('escondidinho');
        $('#REITORIA').addClass('escondidinho');
        $('#LETRAS').addClass('escondidinho');
    } else if (select == "CCS") {
        $('#CCMN').addClass('escondidinho');
        $('#CCS').removeClass('escondidinho');
        $('#CCS').addClass('form-control');
        $('#CT').addClass('escondidinho');
        $('#REITORIA').addClass('escondidinho');
        $('#LETRAS').addClass('escondidinho');
    } else if (select == "CT") {
        $('#CCMN').addClass('escondidinho');
        $('#CCS').addClass('escondidinho');
        $('#CT').removeClass('escondidinho');
        $('#CT').addClass('form-control');
        $('#REITORIA').addClass('escondidinho');
        $('#LETRAS').addClass('escondidinho');
    } else if (select == "REITORIA") {
        $('#CCMN').addClass('escondidinho');
        $('#CCS').addClass('escondidinho');
        $('#CT').addClass('escondidinho');
        $('#REITORIA').removeClass('escondidinho');
        $('#REITORIA').addClass('form-control');
        $('#LETRAS').addClass('escondidinho');
    }else if(select == "LETRAS") {
        $('#CCMN').addClass('escondidinho');
        $('#CCS').addClass('escondidinho');
        $('#CT').addClass('escondidinho');
        $('#REITORIA').addClass('escondidinho');
        $('#LETRAS').removeClass('escondidinho');
        $('#LETRAS').addClass('form-control');
    }
}
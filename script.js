$('#go_sig').click(function() {
    $('#go_sig').addClass('change_btn')
    $('#panel_sig').removeClass('panel_bg')
    $('#panel_log').addClass('panel_bg')
    $('#go_log').removeClass('change_btn')
    $('#form_sign').addClass('change_panel')
    $('#form_login').removeClass('change_panel')
});
$('#go_log').click(function() {
    $('#go_log').addClass('change_btn')
    $('#panel_log').removeClass('panel_bg')
    $('#panel_sig').addClass('panel_bg')
    $('#go_sig').removeClass('change_btn')
    $('#form_login').addClass('change_panel')
    $('#form_sign').removeClass('change_panel')
});
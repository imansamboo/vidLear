function close()
{
    $('body').removeClass('modal-open');
//$('div.modal-content').hide();
    $('div#loginAction').removeAttr( 'style' );
    $('div#loginAction').css( 'display', 'none' );
    $('div#loginAction').removeClass( 'in' );
    $('div.modal-backdrop').hide();
    $('body').removeAttr('style');
}
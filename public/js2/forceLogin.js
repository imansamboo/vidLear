function forceLogin() {
    $('body').addClass('modal-open');
    $('body').css('padding-right', '11px');
    $('#loginAction').addClass('in');
    $('#loginAction').css('display', 'block');
    $('#loginAction').css('padding-right', '11px');
    $('body').append('<div class="modal-backdrop fade in"></div>');
}

function forceBuy() {
    alert('buy')
}

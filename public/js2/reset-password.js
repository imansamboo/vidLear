$('a.forgot_link').click(function (e) {
    e.preventDefault();
    console.log('reset');
    $('h4.modal-title').empty();
    $('h4.modal-title').append('لطفا شماره همراه خود را جهت بازنشانی رمز عبور وارد نمایید.');
    var x = $('div.modal-body').first().html('<form method="GET" id="password-reset" onsubmit="" data-type="json" action="/passReset">\n' +
        '    <label for="mobile">\n' +
        '        شماره تلفن همراه :\n' +
        '    </label>\n' +
        '    <input class="form-control" name="mobile" id="mobile" required="" type="text">\n' +
        '    <br>\n' +
        '    <input name="_token" value="ZvB2aRGv9LD55V7QQs2m4bRBpJb5yMlIZXo42znw" type="hidden">\n' +
        '\n' +
        '\n' +
        '    <button type="submit" id="reset" class="login_btn">مرحله بعد</button>\n' +
        '</form>');
    $('form#password-reset').on('submit', function (e) {
        e.preventDefault();
        var $this = $(this);
        console.log($this.serializeArray());

        $.ajax({
            type: $this.attr('method'),
            url: $this.attr('action'),
            data: $this.serializeArray(),
            dataType: $this.data('type'),
            success: function (response) {
                console.log('success');
                console.log(response)
            },
            error: function (xhr, status, error){
                console.log('error');
                var err = eval("(" + xhr.responseText + ")");
                console.log(err);
            },
        })

    })

})
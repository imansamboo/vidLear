var rand = function() {
    return Math.random().toString(36).substr(2); // remove `0.`
};

var token = function() {
    return rand() + rand(); // to make it longer
};
if(window.location.origin == "https://parto.me"){
    address = window.location.origin + "/laravel/vidLear/public";
}else{
    address = window.location.origin;
}
function sleep (time) {
    return new Promise((resolve) => setTimeout(resolve, time));
}
//console.log(document.location.origin);
$('a#forgot').click(function (e) {
    e.preventDefault();
    $('div#login-error').empty()
    console.log('reset');
    $('h4.modal-title').empty();
    $('h4.modal-title').append('لطفا شماره همراه خود را جهت بازنشانی رمز عبور وارد نمایید.');
    var x = $('div.modal-body').first().html('<div id="login-error"></div><form method="GET" id="password-reset" onsubmit="" data-type="json" action="' +
        address +
        '/passReset">\n' +
        '    <label for="mobile">\n' +
        '        شماره تلفن همراه :\n' +
        '    </label>\n' +
        '    <input class="form-control" name="mobile" id="mobile" required="" type="text">\n' +
        '    <br>\n' +
        '    <input name="_token" value="' +
        token() +
        '" type="hidden">\n' +
        '<center><img src="/img/loader.gif" id="loading" style="width: 4%;display: none"></center>' +
        '\n' +
        '<a href="#login-again" class="forgot_link">رمز را به یاد آوردم</a>\n' +
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
            beforeSend: function() { $('img#loading').show();$(".login_btn").hide();$('a#forgot').hide(); },
            complete: function() { $('img#loading').hide(); $(".login_btn").show();$('a#forgot').show();},
            success: function (response) {
                $('div.alert-danger').hide();
                console.log('success');
                $('h4.modal-title').empty();
                $('h4.modal-title').append('کد دریافتی را وارد نمایید.');
                var x = $('div.modal-body').first().html('<div id="login-error"></div><form method="GET" id="verify-reset" onsubmit="" data-type="json" action="' +
                    address +
                    '/verifyReset">\n' +
                    '    <label for="last_sent_sms_code">\n' +
                    '        کد دریافتی :\n' +
                    '    </label>\n' +
                    '    <input class="form-control" name="last_sent_sms_code" id="last_sent_sms_code" required="" type="text">\n' +
                    '    <label for="password">\n' +
                    '          پسورد جدید :\n' +
                    '    </label>\n' +
                    '    <input class="form-control" name="password" id="password" required="" type="text">\n' +
                    '<center><img src="/img/loader.gif" id="loading" style="width: 4%;display: none"></center>' +
                    '    <br>\n' +
                    '    <input name="_token" value="' +
                    token() +
                    '" type="hidden">\n' +
                    '<input name="userId" value="' + response.userId +
                    '" type="hidden">' +
                    '\n' +
                    '<a href="#login-again" class="forgot_link">رمز را به یاد آوردم</a>\n' +
                    '\n' +
                    '    <button type="submit" id="reset" class="login_btn">مرحله بعد</button>\n' +
                    '</form>');
                console.log(response);
                $('form#verify-reset').on('submit', function (e) {
                    var $this = $(this);
                    e.preventDefault();
                    $.ajax({
                        type: $this.attr('method'),
                        url: $this.attr('action'),
                        data: $this.serializeArray(),
                        dataType: $this.data('type'),
                        beforeSend: function() { $('img#loading').show();$(".login_btn").hide();$('a#forgot').hide(); },
                        complete: function() {console.log('complete'); $('img#loading').hide(); $(".login_btn").show();$('a#forgot').show();},
                        success: function (response) {
                            console.log('success verify');
                            $('div#loginAction > div.modal-dialog').hide();
                            $('div#loginAction').append('<div class="modal-dialog modal-md">\n' +
                                '\n' +
                                '        <!-- Login Modal content-->\n' +
                                '        <div class="modal-content">\n' +
                                '            <div class="modal-header">\n' +
                                '                <button type="button" class="close" data-dismiss="modal">×</button>\n' +
                                '                <h4 class="modal-title">ورود به پنل کاربری</h4>\n' +
                                '                <h5 class="modal-title" style="color: green">تغییر رمز شما موفقیت آمیز بود.</h5>\n' +
                                '                <div id="login-error">\n' +
                                '                    \n' +
                                '                    \n' +
                                '                </div>\n' +
                                '            </div>\n' +
                                '        </div>\n' +
                                '\n' +
                                '    </div>');
                            sleep(2000).then(() => {
                                location.reload();
                            });

                        },
                        error: function (xhr, status, error) {
                            $('img#loading').hide(); $(".login_btn").show();$('a#forgot').show();
                            $('div.alert-danger').hide();
                            $('div#login-error').append('<div class="alert alert-danger" style="font-size: 11px">\n' +
                                '                         کد تایید وارد شده صحیح نمی باشد یا رمز عبور کمتر از چهار کاراکتر می باشد.\n' +
                                '                    </div>');
                            $("div#login-error").css('padding-top', '5%');
                            console.log('error');
                            var err = eval("(" + xhr.responseText + ")");
                            console.log(err);

                        },
                    })
                })
            },
            error: function (xhr, status, error, response){
                console.log('error');
                var err = eval("(" + xhr.responseText + ")");
                console.log(err);
                $('div.alert-danger').hide();
                $('div#login-error').append('<div class="alert alert-danger" style="font-size: 11px">\n' +
                    '                         شماره همراه درسامانه ثبت نشده است.\n' +
                    '                    </div>');
                $("div#login-error").css('padding-top', '5%');
            },
        })

    })

})
var action1 = '';
if(window.location.origin == "https://parto.me"){
    address = window.location.origin + "/laravel/vidLear/public";
}else{
    address = window.location.origin;
}
$(document).ready(function() {
    console.log('resister input');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('form#register:first').on('submit', function(e){
        console.log('sumitted');
        e.preventDefault();

        var $this = $(this);

        $.ajax({
            type: $this.attr('method'),
            url: $this.attr('action'),
            data: $this.serializeArray(),
            dataType: $this.data('type'),
            beforeSend: function() { $('img#loading').show();$(".register_btn").hide(); },
            complete: function() { $('img#loading').hide(); $(".register_btn").show();},
            success: function (status, response) {
                var x= status;
                console.log('success');
                var userID = JSON.parse(status).userID;
                $('div#registerAction > div.modal-dialog').hide();
                $('div#registerAction').append('<div class="modal-dialog modal-sm">\n' +
                    '\n' +
                    '        <!-- Register Modal content-->\n' +
                    '        <div class="modal-content">\n' +
                    '            <div class="modal-header">\n' +
                    '                <button type="button" class="close" data-dismiss="modal">×</button>\n' +
                    '                <h5 class="modal-title">لطفا کد ارسالی را جهت تایید نهایی وارد نمایید.</h5>' +

                    '            </div>\n' +
                    '            <div class="modal-body">\n' +
                    '                <div id="sms-verify-error" >\n' +
                    '                </div>\n' +
                    '                <p id="message"></p>\n' +
                    '                <div class="register_container">\n' +
                    '                    <form method="GET" onsubmit="" action="' +
                    address +
                    '/varifyWithSms" id="sms">\n' +
                    '    <label for="last_sent_sms_code">\n' +
                    '        کد ارسالی :\n' +
                    '    </label>\n' +
                    '    <input class="form-control" name="last_sent_sms_code" id="last_sent_sms_code" required="" type="text">\n' +
                    '<center><img src="' +
                    address +
                    '/img/loader.gif" id="loading" style="width: 4%;display: none"></center>' +
                    '    <br>\n' +
                    '<input name="_token" value="5PhJYPM78BTujzr6DldrRCdKfCcda1098ecp0ZTE" type="hidden">\n' +
                    '<input name="userID" value="' + userID +
                    '" type="hidden">\n' +
                    '<input name="register" id="register" class="register_btn" value="تایید نهایی" type="submit">'+
                    '  \n' +
                    '</form>\n' +
                    '                </div>\n' +
                    '            </div>\n' +
                    '        </div>\n' +
                    '    </div>');
                $("form#sms").on('submit', function(e) {
                    console.log('code sumitted');
                    e.preventDefault();

                    var $this = $(this);

                    $.ajax({
                        type: $this.attr('method'),
                        url: $this.attr('action'),
                        data: $this.serializeArray(),
                        dataType: $this.data('type'),
                        beforeSend: function() { $('img#loading').show();$(".register_btn").hide(); },
                        complete: function() { $('img#loading').hide(); $(".register_btn").show();},
                        success: function (response) {
                            console.log('success sms varify');
                            $('div#registerAction > div.modal-dialog').hide();
                            $('div#registerAction').append('<div class="modal-dialog modal-md">\n' +
                                '\n' +
                                '        <!-- Login Modal content-->\n' +
                                '        <div class="b2"></div>\n' +
                                '        <div class="bb2" style="display: block;"></div>\n' +
                                '        <button id="go2" style="display: none;">\n' +
                                '            GO\n' +
                                '        </button>\n' +
                                '        <div class="message2 comein2">\n' +
                                '            <div class="check2 scaledown2">\n' +
                                '                ✔\n' +
                                '            </div>\n' +
                                '            <p>\n' +
                                '                عضویت شما موفقیت امیز بود\n' +
                                '            </p>\n' +
                                '\n' +
                                '            <button id="ok2">\n' +
                                '                باشه\n' +
                                '            </button>\n' +
                                '        </div>\n' +
                                '    </div>');
                        },
                        error: function () {
                            console.log('error sms varify');
                            $('div.alert-danger').hide();
                            $('div#sms-verify-error').append('<div class="alert alert-danger" style="font-size: 11px">\n' +
                                '                         کد وارد شده صحیح نیست.\n' +
                                '                    </div>');
                            $("div#sms-verify-error").css('padding-top', '5%');
                        }
                    })

                })
            },
            error: function(xhr, status, error){
                /*console.log(error)
                console.log(xhr)
                var err = eval("(" + xhr.responseText + ")");
                console.log(err.errors);
                console.log(err.errors.password.length);*/
                var err = eval("(" + xhr.responseText + ")");
                $('div.alert-danger').hide();
                for (x in err.errors) {
                    if( x == 'password'){
                        if(err.errors[x].length > 1){
                            $('div#password-error').append('<div class="alert alert-danger" style="font-size: 9px; padding: 5px; margin-bottom: 7px">\n' +
                                '            رمز عبور وارد شده کمتر از چهار کاراکتر میباشد.\n' +
                                '        </div>');
                            $('div#passwordConfirm-error').append('<div class="alert alert-danger" style="font-size: 9px; padding: 5px; margin-bottom: 7px">\n' +
                                '            رمزهای عبور وارد شده مطابقت ندارند.\n' +
                                '        </div>');
                        }else{
                            if(err.errors[x][0] == "The email must be a valid email address."){
                                $('div#password-error').append('<div class="alert alert-danger" style="font-size: 9px; padding: 5px; margin-bottom: 7px">\n' +
                                    '            رمز عبور وارد شده کمتر از چهار کاراکتر میباشد.\n' +
                                    '        </div>');
                            }else if(err.errors[x][0] == "The password confirmation does not match.") {
                                $('div#passwordConfirm-error').append('<div class="alert alert-danger" style="font-size: 9px; padding: 5px; margin-bottom: 7px">\n' +
                                    '            رمزهای عبور وارد شده مطابقت ندارند.\n' +
                                    '        </div>');
                            }
                        }
                    }else if(x == 'email'){
                        if(err.errors[x][0] ==  "The email has already been taken."){
                            $('div#email-error').append('<div class="alert alert-danger" style="font-size: 9px; padding: 5px; margin-bottom: 7px">\n' +
                                '            این پست الکترونیک قبلا استفاده شده است.\n' +
                                '        </div>');
                        }else if(err.errors[x][0] ==  "The email must be a valid email address.") {
                            $('div#email-error').append('<div class="alert alert-danger" style="font-size: 9px; padding: 5px; margin-bottom: 7px">\n' +
                                '            فرمت پست الکترونیک وارد شده صحیح نمی باشد.\n' +
                                '        </div>');
                        }
                    }else if(x == 'mobile'){
                        $('div#mobile-error').append('<div class="alert alert-danger" style="font-size: 9px; padding: 5px; margin-bottom: 7px">\n' +
                            '            تعداد ارقام وارد شده صحیح نمی باشد یا شماره تلفن همراه قبلا ثبت شده است.\n' +
                            '        </div>');

                    }
                }

                //console.log(err.errors);
            }
        });
    });

});
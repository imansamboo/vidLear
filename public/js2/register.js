/*
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('form#login').on('submit', function (e) {
        e.preventDefault();

        var formData = {
            email: $('#email').val(),
            password: $('#password').val(),
        }
        $.ajax({
            type: "POST",
            url: "/login",
            data: formData,
            success: function (data) {
                location.reload();
            },
            error: function (data) {

            }
        });

    });
}*/


$(function() {

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
            success: function (response) {
                if(response.success) {
                    console.log('success');

                }else{
                    //console.log(response.error)
                    console.log('error1');

                }

            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                var text = '';
                for (x in err.errors) {
                    text += '<li>' + err.errors[x] + '</li>';
                }
                console.log(text);
                if(text == ""){
                    console.log('success');
                    $('div.modal-dialog').hide();
                    $('div#registerAction').append('<div class="modal-dialog modal-sm">\n' +
                        '\n' +
                        '        <!-- Register Modal content-->\n' +
                        '        <div class="modal-content">\n' +
                        '            <div class="modal-header">\n' +
                        '                <button type="button" class="close" data-dismiss="modal">×</button>\n' +
                        '                <h5 class="modal-title">لطفا کد ارسالی را جهت تایید نهایی وارد نمایید.</h5>\n' +
                        '            </div>\n' +
                        '            <div class="modal-body">\n' +
                        '                <p id="message"></p>\n' +
                        '                <div class="register_container">\n' +
                        '                    <form method="POST" onsubmit="" action="/varifyWithSms" id="sms">\n' +
                        '    <label for="last_sent_sms_code">\n' +
                        '        کد ارسالی :\n' +
                        '    </label>\n' +
                        '    <input class="form-control" name="last_sent_sms_code" id="last_sent_sms_code" required="" type="text">\n' +
                        '    <br>\n' +
                        '<input name="_token" value="5PhJYPM78BTujzr6DldrRCdKfCcda1098ecp0ZTE" type="hidden">\n' +
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
                            success: function (response) {
                            if(response.success) {
                                console.log('success sms');

                            }else{
                                //console.log(response.error)
                                console.log('error sms');

                            }

                        }

                    })

                    })

                }else{
                    $("h5.modal-title").append('<ul style="color: orangered;font-size: 13px;direction:ltr">' + text + '</ul>');
                }
                /*console.log(err.errors.email);
                console.log(err.errors.password);
                console.log(err.errors.mobile);
                console.log(err.errors.name);*/
            }
        });
    });

});
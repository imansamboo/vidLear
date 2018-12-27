
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
                        success: function (response) {
                            console.log('success sms varify');
                            $('div#registerAction > div.modal-dialog').hide();
                            $('div#registerAction').append('<div class="modal-dialog modal-sm">\n' +
                                '\n' +
                                '    <!-- Register Modal content-->\n' +
                                '    <div class="modal-content">\n' +
                                '        <div class="modal-header">\n' +
                                '            <button type="button" class="close" data-dismiss="modal">×</button>\n' +
                                '            <h5 class="modal-title" style="color: #00a65a">عملیات عضویت شما باموفقیت انجام شد. از گزینه "ورود به سامانه"  استفاده نمایید.</h5>\n' +
                                '        </div>\n' +
                                '    </div>\n' +
                                '</div>');
                        },
                        error: function () {
                            console.log('error sms varify');
                        }
                    })

                })
            },
            error: function(xhr, status, error){
                console.log(error)
                console.log(xhr)
                //var err = eval("(" + xhr.responseText + ")");

                //console.log(err.errors);
            }
        });
    });

});
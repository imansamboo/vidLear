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
var li = $('li.category').html();
console.log('input');
$(document).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('form#login:first').on('submit', function(e){
        e.preventDefault();

        var $this = $(this);

        $.ajax({
            type: $this.attr('method'),
            url: $this.attr('action'),
            data: $this.serializeArray(),
            dataType: $this.data('type'),
            success: function (response) {
                console.log('success');
                if(response.success) {
                    $( "#authenticate" ).empty();

                    if(response.isAdmin){
                        $('body').removeClass('modal-open');
                        //$('div.modal-content').hide();
                        $('div#loginAction').removeAttr( 'style' );
                        $('div#loginAction').css( 'display', 'none' );
                        $('div#loginAction').removeClass( 'in' );
                        $('div.modal-backdrop').hide();
                        $('body').removeAttr('style');

                        $( "#authenticate" ).append( "<ul class=\"nav navbar-nav menu-right\">\n" +
                            "                                    <li>\n" +
                            "                                        <a href=\"/logout\"  class=\"header-font\"><i\n" +
                            "                                                    class=\"fa fa-sign-out\"\n" +
                            "                                                    aria-hidden=\"true\"></i>خروج از سامانه\n" +
                            "                                        </a>\n" +
                            "                                    </li>\n" +
                            "                                    <li>\n" +
                            "                                            <a href=\"\/admin\"  class=\"header-font\"><i\n" +
                            "                                                        class=\"fa fa-user\"\n" +
                            "                                                        aria-hidden=\"true\"></i> داشبورد\n" +
                            "                                            </a>\n" +
                            "\n" +
                            "                                    </li>\n" +
                            "                                            <li class=\"nav-item dropdown category\">\n" +
                            li +
                            "                                            </li>\n" +
                            "                                </ul>" );
                    }else{
                        $('div.modal-content').hide();
                        $('body').removeClass('modal-open');
                        $('div#loginAction').removeAttr( 'style' );
                        $('div#loginAction').css( 'display', 'none' );
                        $('div#loginAction').removeClass( 'in' );
                        $('div.modal-backdrop').hide();
                        $('body').removeAttr('style');
                        $( "#authenticate" ).append( "<ul class=\"nav navbar-nav menu-right\">\n" +
                            "                                    <li>\n" +
                            "                                        <a href=\"/logout\"  class=\"header-font\"><i\n" +
                            "                                                    class=\"fa fa-sign-out\"\n" +
                            "                                                    aria-hidden=\"true\"></i>خروج از سامانه\n" +
                            "                                        </a>\n" +
                            "                                    </li>\n" +
                            "                                </ul>" );
                    }

                }else{
                    console.log('error-new');
                    $('div.alert-danger').hide();
                    $('div#login-error').append('<div class="alert alert-danger" style="font-size: 11px">\n' +
                        '                         شماره همراه یا کلمه عبور اشتباه وارد شده است.\n' +
                        '                    </div>');
                    $("div#login-error").css('padding-top', '5%');
                }

            },
            error: function () {
                console.log('error');
                $('div.alert-danger').hide();
                $('div#login-error').append('<div class="alert alert-danger" style="font-size: 11px">\n' +
                    '                         شماره همراه یا کلمه عبور اشتباه وارد شده است.\n' +
                    '                    </div>');
                $("div#login-error").css('padding-top', '5%');

                /*var response = $.parseJSON(jqXHR.responseText);
                if(response.message) {
                    alert(response.message);
                }*/
            }
        });
    });

});
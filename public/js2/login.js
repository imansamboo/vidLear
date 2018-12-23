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

    $('form#login:first').on('submit', function(e){
        e.preventDefault();

        var $this = $(this);

        $.ajax({
            type: $this.attr('method'),
            url: $this.attr('action'),
            data: $this.serializeArray(),
            dataType: $this.data('type'),
            success: function (response) {
                if(response.success) {
                    $( "#authenticate" ).empty();
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
                        "                                </ul>" );
                }else{
                    alert('نام کاربری یا رمز عبور اشتباه وارد شده است');
                }
            },
            error: function () {
                /*var response = $.parseJSON(jqXHR.responseText);
                if(response.message) {
                    alert(response.message);
                }*/
            }
        });
    });

});
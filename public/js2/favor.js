console.log('rate');
var color;
var address = '';
if(window.location.origin == "https://parto.me"){
     address = window.location.origin + "/laravel/vidLear/public";
}else{
    address = window.location.origin;
}
var address = "/laravel/vidLear/public";
//color[0] = '#D1D1D1';
$(document).ready(function(){
    if($('i.fa-heart').css('color') == 'rgb(255, 0, 0)'){
       var j = 1;
    }else{
        var j =0;
    }
    $('i.fa-heart').on('click', function (){
        if( $('i.fa-sign-in').length > 0 ){
            forceLogin();
        }else{
            var $this = $(this);
            if(j == 0){
                $this.css( 'color', 'red' )
                j = 1;
            }else{
                $this.removeAttr('style');
                j = 0;
            }
            $.get({
                url: address + '/favorProduct',
                data: {
                },
                dataType: 'JSON',
                beforeSend: function() { $('#load-favor').show();$("#like-it").hide(); },
                complete: function() { $('#load-favor').hide(); $("#like-it").show();},
                success: function (response) {
                },
                error: function (response) {


                }
            });
        }

    })
    $('button.close').on('click', function(e){
        e.preventDefault();
        close();
    })
});


function responseMessage(msg) {
    $('.success-box').fadeIn(200);
    $('.success-box div.text-message').html("<span>" + msg + "</span>");
}
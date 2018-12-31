console.log('rate');
var color;
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
                url: window.location.origin + '/favorProduct',
                data: {
                },
                dataType: 'JSON',
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
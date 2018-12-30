console.log('rate');
$(document).ready(function(){
    var j =0;
    $('i.fa-heart').on('click', function (){
        var $this = $(this);
        if(j == 0){
            $this.css( 'color', 'red' )
            j = 1;
        }else{
            $this.removeAttr('style');
            j = 0;
        }
    })
});


function responseMessage(msg) {
    $('.success-box').fadeIn(200);
    $('.success-box div.text-message').html("<span>" + msg + "</span>");
}
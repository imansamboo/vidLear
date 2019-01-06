console.log('invoice');
var newStars = '';
if(window.location.origin == "https://parto.me"){
    address = window.location.origin + "/laravel/vidLear/public";
}else{
    address = window.location.origin;
}$(document).ready(function(){
    var stars = $('i.fa-star');
    var j =0;
    $('i.fa-star').on('click', function (e){
        e.preventDefault();
        if( $('i.fa-sign-in').length > 0 ){ 
            forceLogin();
        }else {
            var $this = $(this);
            $.get({
                url: address + '/isRated',
                data: {
                },
                dataType: 'JSON',


                success: function (response) {
                    var id = $this.attr('id');
                    if (j == 0) {
                        $.get({
                            url: address + '/rateProduct',
                            data: {
                                rating: id
                            },
                            dataType: 'JSON',
                            success: function (response) {
                                console.log(response);
                                $('#load-rate').hide(); $("#star1-load").show(); $("#star2-load").show();
                                $('p.sp-rating-code-one').empty();$('p.sp-rating-code-one').append(response.averageRate);
                                $('p.sp-rating-code-two').empty();$('p.sp-rating-code-two').append( 'از ' + response.voterCount + ' رای' );

                            },
                            beforeSend: function() { $('#load-rate').show();$("#star1-load").hide(); $("#star2-load").hide();},
                        });
                        for (i = 0; i < id; i++) {
                            newStars += '<i class="fa fa-2x fa-star" style="color: #FFC106;"></i>';
                            console.log(newStars);
                        }
                        $('div.the-rate-star').empty();
                        $('div.the-rate-star').append(newStars);

                        j = 1;
                    } else {

                    }
                }($this),
                error: function (respone) {
                    console.log('rated pre');
                    console.log(respone);
                }

            });
        }

    })
    $('button.close').on('click', function(e){
        e.preventDefault();
        close();
    })

});
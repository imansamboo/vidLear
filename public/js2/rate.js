console.log('invoice');
var newStars = '';
$(document).ready(function(){
    var stars = $('i.fa-star');
    var j =0;
    $('i.fa-star').on('click', function (e){
        e.preventDefault();
        if( $('i.fa-sign-in').length > 0 ){
            forceLogin();
        }else {
            var $this = $(this);
            $.get({
                url: window.location.origin + '/isRated',
                data: {
                },
                dataType: 'JSON',
                success: function (response) {
                    console.log('not rated')
                    var id = $this.attr('id');
                    if (j == 0) {
                        $.get({
                            url: window.location.origin + '/rateProduct',
                            data: {
                                rating: id
                            },
                            dataType: 'JSON',
                            success: function (response) {
                            }
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
                error: function () {
                    console.log('rated pre')
                }

            });



            /*var $this = $(this);
            var id = $this.attr('id');
            if (j == 0) {
                $.get({
                    url: window.location.origin + '/rateProduct',
                    data: {
                        rating: id
                    },
                    dataType: 'JSON',
                    success: function (response) {
                    }
                });
                for (i = 0; i < id; i++) {
                    newStars += '<i class="fa fa-2x fa-star" style="color: #FFC106;"></i>';
                    console.log(newStars);
                }
                $('div.the-rate-star').empty();
                $('div.the-rate-star').append(newStars);

                j = 1;
            } else {

            }*/
        }

    })
    $('button.close').on('click', function(e){
        e.preventDefault();
        close();
    })

});
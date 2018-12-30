console.log('invoice');
var newStars = '';
$(document).ready(function(){
    var stars = $('i.fa-star');
    var j =0;
    $('i.fa-star').on('click', function (e){
        e.preventDefault();
        var $this = $(this);
        var id = $this.attr('id');
        if(j == 0){
            for(i=0; i < id ; i++){
                newStars += '<i class="fa fa-2x fa-star" style="color: #FFC106;"></i>';
                console.log(newStars);
            }
            $('div.the-rate-star').empty();
            $('div.the-rate-star').append(newStars);

            j = 1;
        }else{

        }
    })
});
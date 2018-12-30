console.log('invoice');
$(document).ready(function(){
    var j =0;
    $('a.sp-sidebar-buy').on('click', function (e){
        e.preventDefault();
        var $this = $(this);
        if(j == 0){
            $this.empty()
            $this.append( 'خرید شما موفقیت امیز بود.' );

            $('div.realPrice').hide();
            j = 1;
            $('div.panel-heading,icon').empty();
            $('a.timeline-links').removeClass('isDisabled');
            $('p.timeline-dl').removeClass('isDisabled');
            $('p.timeline-dl').removeAttr('style');
            $('p.timeline-dl').css('margin-top', '0px');
            $('div.timeline-free').hide();
        }else{

        }
    })
});
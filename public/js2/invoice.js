console.log('invoice');
$(document).ready(function(){
    var j =0;
    $('a.sp-sidebar-buy').on('click', function (e){
        if( $('i.fa-sign-in').length > 0 ){
            e.preventDefault();
            forceLogin();
        }


    })
    $('button.close').on('click', function(e){
        e.preventDefault();
        close();
    })
});
$('body').click(function(e){
    if (!$(e.target).hasClass('header-button')) {
        $('.header-menu').removeClass('show');
    }
});
$('.header-button').click(function(){
    $('.header-menu').toggleClass('show');
});
// Burger Menu
$('.toggle-nav').click(function() {
    $('.navbar-menu').slideToggle(300);
});
$(window).resize(function() {
    if ($(window).width() > 800 ) {
        $('.navbar-menu, .drop-menu').removeAttr('style');
    }
});

// // Drop Down Menu
// $('.drop-down > a').click(function () {
//     $(this).parent().siblings().find('ul').slideUp(300);
//     $(this).parent().children('ul').slideToggle(300);
// });







/* media */
// $(function(){
//     $('a.video-item').on('click', function(e){
//         e.preventDefault();
//         $('div.book-card').show().not($(this).data('rel')).hide();
//     });
// });

// ***************
// ** SlideShow **
// ***************



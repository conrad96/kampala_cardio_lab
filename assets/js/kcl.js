$(document).on('click', '#findOutBtn', function(event){
//focus on services div
//serviceSection
    $('html, body').animate({
        scrollTop: $("#serviceSection").offset().top
    }, 'slow');
});

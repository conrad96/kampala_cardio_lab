$(document).on('click', '#findOutBtn', function(event){
//focus on services div
    $('html, body').animate({
        scrollTop: $("#serviceSection").offset().top
    }, 'slow');
});

$(document).on('click', '.service-card', function(event){
    var getBaseURL = $("#getBaseURL").val();
    //redirect to respective service's page
    var servicePage = $(this).data("service");
    var page = getBaseURL + 'index.php/Home/'+ servicePage;
    window.location.href = page;
});

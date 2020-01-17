
$(document).on('click', '#findOutBtn', function(event){
//focus on services div
    $('html, body').animate({
        scrollTop: $("#serviceSection").offset().top
    }, 5000);
});

$(document).on('click', '.service-card', function(event){
    var getBaseURL = $("#getBaseURL").val();
    //redirect to respective service's page
    var servicePage = $(this).data("service");
    var page = getBaseURL + 'index.php/Home/'+ servicePage;
    window.location.href = page;
});

$(document).on('submit', '#appointmentForm', function(event){
    event.preventDefault();
    //submit data by ajax    
    //send email to DEFAULT_EMAIL address
    var formData = $(this).serialize();
    var getBaseURL = $("#getBaseURL").val();
    
    $.ajax({
        type: "POST",
        url: getBaseURL + 'index.php/Home/make_appointment',
        data: formData,
        beforeSend: function(){
            //show loader
            $(".loading-gif").show();
        },
        success: function(data){
            //show msg
            $(".loading-gif").hide();

            $("#msg-stat").html(data);
        }        
    });
});

$(document).on('click', '#make-appointment-btn', function(event){
    $('html, body').animate({
        scrollTop: $("#appointment-area").offset().top
    }, 5000);
});

$(document).on('mouseenter', '#bg-disp', function(event){
    //change to overlay
    $("#bg-disp").addClass("bg-overlay");
});

$(document).on('mouseleave', '#bg-disp', function(event){
    //change to overlay
    $("#bg-disp").removeClass("bg-overlay");
});
//card display overlay
$(document).on('mouseenter', '.team-img-orig', function(event){
    //change to overlay
    
});

$(document).on('mouseleave', '#bg-disp', function(event){
    //change to overlay
    $("#bg-disp").removeClass("bg-overlay");
});

$(document).on('ready', function(){
    $(".slider").slider();
});

//contact form
$(document).on('submit', '#contactForm', function(e){
    e.preventDefault();
    //send email to DEFAULT_EMAIL address
    var formData = $(this).serialize();
    var getBaseURL = $("#getBaseURL").val();

    $.ajax({
        type: "POST",
        url: getBaseURL + 'index.php/Home/contact_kcl',
        data: formData,
        beforeSend: function(){
            //show loader
            $(".loading-gif").show();
        },
        success: function(data){
            //show msg
            $(".loading-gif").hide();

            $("#msg-stat").html(data);
        }        
    });
});
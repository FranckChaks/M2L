$(document).ready(function () {
    $.each($('#myNavbar').find('li'), function() {
        $(this).toggleClass('active', 
            window.location.pathname.indexOf($(this).find('a').attr('href')) > -1);
    }); 
    
    $("#ex1").slider();
    var mem = $("#ex1").val();

// With JQuery
    $("#ex1-enabled").click(function() {
        if(this.checked) {

            console.log(mem);
            $("#ex1").slider("enable");
            $('#ex1').slider({

                formatter: function(value) {
                    return value;
                }
            });
            $("#ex1").on("slide", function(slideEvt) {
                var valueOfDoom = slideEvt.value-mem;
                if(valueOfDoom > 0){
                    valueOfDoom = "+"+valueOfDoom;
                }
                $("#ex1SliderVal").text(valueOfDoom);
            });
        }
        else {
            $("#ex1").slider("disable");


        }
    });
});
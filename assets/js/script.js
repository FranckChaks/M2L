$(document).ready(function () {
    $("#ex1").slider();
    var mem = "<?php echo $r['credit'] ?>";

// With JQuery
    $("#ex1-enabled").click(function() {
        if(this.checked) {
            console.log(mem);
            $("#ex1").slider("enable");
            $('#ex1').slider({
                formatter: function(value) {
                    return 'Current value: ' + value;
                }
            });
            $("#ex1").on("slide", function(slideEvt) {
                $("#ex1SliderVal").text(slideEvt.value);
            });
        }
        else {
            $("#ex1").slider("disable");


        }
    });
});
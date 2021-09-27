$("#new_mobile_select_btn").click(function () {
    $("#new_mobile_select").slideToggle();
});
$("#first_select").click(function () {
    $("#new_mobile_select").slideUp("slow");
});
$('#cc_price_select').change(function () {
    var ccprice = $('#cc_price_select').find(":selected").attr('data-price');
    $('#cc_price_show').text(ccprice).number(true, 0);
    var str = $('#cc_price_show').text();
    $('#cc_price_show').text("هزینه فراگارانتی : " + str + " تومان");
    $("#cc_price_show_box").slideDown("slow");
});
$('#fcc_price_select').change(function () {
    var ccprice = $('#fcc_price_select').find(":selected").attr('data-price');
    $('#fcc_price_show').text(ccprice).number(true, 0);
    var str = $('#fcc_price_show').text();
    $('#fcc_price_show').text("هزینه افزایش تعهد : " + str + " تومان");
    $("#fcc_price_show").slideDown("slow");
});

// Stepper lement
var element = document.querySelector("#kt_stepper_add_mobile_warranty");

// Initialize Stepper
var stepper = new KTStepper(element);
var n = [];
// Handle next step
stepper.on("kt.stepper.next", function (stepper) {
    stepper.goNext(); // go next step
});

// Handle previous step
stepper.on("kt.stepper.previous", function (stepper) {
    stepper.goPrevious(); // go previous step
});

$('#new_phone_model').on('change', function () {
    var other_model = $('#new_phone_model').find(':selected').val();

    if (other_model === 'others') {
        $('.my_other_model').slideToggle();
    } else {
        $('.my_other_model').slideUp("slow");
    }
});

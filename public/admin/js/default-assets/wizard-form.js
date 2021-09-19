(function ($) {
    'use strict';

    var form = $("#example-form");
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onFinished: function (event, currentIndex) {
            addWarranty();
        }
    });
    var validationForm = $("#example-validation-form");
    validationForm.val({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
    validationForm.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function (event, currentIndex, newIndex) {
            validationForm.val({
                ignore: [":disabled", ":hidden"]
            })
            return validationForm.val();
        },
        onFinishing: function (event, currentIndex) {
            validationForm.val({
                ignore: [':disabled']
            })
            return validationForm.val();
        },
        onFinished: function (event, currentIndex) {
            addWarranty();
        }
    });
    var verticalForm = $("#example-vertical-wizard");
    verticalForm.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        stepsOrientation: "vertical",
        onFinished: function (event, currentIndex) {
            addWarranty();
        }
    });

})(jQuery);

function addWarranty(){
    var myform = document.getElementById("example-form");
    var fd = new FormData(myform );
    var getUrl = window.location;

    $.ajax({
        url: getUrl .protocol + "//" + getUrl.host+'/dashboard/postajax',
        type: 'POST',
        data: fd,
        cache: false,
        contentType: false,
        error: function (xhr) {
            alert('خطا در افزودن داده');
        },
        success: function (result) {
            alert(result);
        },
        async: true,
        processData: false
    });
    //alert(fd);
}

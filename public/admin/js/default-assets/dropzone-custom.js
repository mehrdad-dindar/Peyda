!function (e) {
    "use strict";
    (function () {
        Dropzone.options.dropzoneFileAreaOne = {
            paramName: "file",
            maxFiles: 1,
            maxFilesize: 5,
            addRemoveLinks: !0,
            accept: function (e, i) {
                "justinbieber.jpg" == e.name ? i("Naha, you don't.") : i()
            }
        }, Dropzone.options.dropzoneFileAreaTwo = {
            paramName: "file",
            maxFiles: 10,
            maxFilesize: 10,
            addRemoveLinks: !0,
            accept: function (e, i) {
                "justinbieber.jpg" == e.name ? i("Naha, you don't.") : i()
            }
        }
    })()
}(jQuery);

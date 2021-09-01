var myModal = document.getElementById('myModal')
var myInput = document.getElementById('email')

myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
})


var minutes;
var seconds;
var set_inteval;
function otp_timer() {
    seconds -= 1;
    document.getElementById('seconds').innerHTML = seconds;
    document.getElementById('minutes').innerHTML = minutes;
    if (seconds == 0) {
        if (minutes > 0) {
            seconds = 60;
            minutes -= 1;
        } else {
            minutes = 0;
            document.getElementById('minutes').innerHTML = minutes;
            clearInterval(set_inteval);
            minutes = 0;
            seconds = 0;
            document.getElementById('seconds').innerHTML = '00';
            document.getElementById('minutes').innerHTML = '0';
        }
    }
}
function startTimer() {
    minutes = 3;
    seconds = 60;
    document.getElementById('seconds').innerHTML = seconds;
    document.getElementById('minutes').innerHTML = minutes;
    set_inteval = setInterval('otp_timer()', 1000);
}

/**
 * CUSTOM FILE INPUTS FOR IMAGES
 *
 * Version: 1.0.0
 *
 * Custom file inputs with image preview and
 * image file name on selection.
 */
$('input[type="file"]').each(function(){
    // Refs
    var $file = $(this),
        $label = $file.next('label'),
        $labelText = $label.find('span'),
        labelDefault = $labelText.text();

    // When a new file is selected
    $file.on('change', function(event){
        var fileName = $file.val().split( '\\' ).pop(),
            tmppath = URL.createObjectURL(event.target.files[0]);
        //Check successfully selection
        if( fileName ){
            $label
                .addClass('file-ok')
                .css('background-image', 'url(' + tmppath + ')');
            $labelText.text(fileName);
        }else{
            $label.removeClass('file-ok');
            $labelText.text(labelDefault);
        }
    });

// End loop of file input elements
});
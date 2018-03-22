$(function() {
    // Get the form.
    var form = $('#signinform');
    var formMessages = $('#form-messages');
    // Set up an event listener 
    
$(form).submit(function(event) {
    // Stop the browser from submitting the form.
    event.preventDefault();
    //create an url encoded text string 
    var formData = $(form).serialize();
    $.ajax({
        type: 'POST',
        url: $(form).attr('action'),
        data: formData,
        success: function() {   
            location.reload();  
        }
    }).fail(function(data) {
        $(formMessages).addClass('error');
        // Set the error message text.
        if (data.responseText !== '') {
            $(formMessages).text(data.responseText);
        } else {
            $(formMessages).text('Oops! An error occured and we are investigating it now.');
        }
    });
    
});
});
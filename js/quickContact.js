$(function() {
    // Get the form.
    var form = $('#quickContact-form');

    // Get the form status (displays alert to user)
    var formStatus = $('#form-status');

    
    // Set up an event listener for the contact form and pass it the submission event.
    $(form).submit(function(event) {
        // Stop the browser from submitting the form.
        event.preventDefault();
        
        //store form data (submitted by user) in serialized format leveraging jquery's .serialize function
        var formData = $(form).serialize();
        
        //use jQuery's ajax method to create a new ajax request
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        }).done(function(response) {
            // Make sure that the formMessages div has the 'success' class.
            $(formStatus).removeClass('form-error');
            $(formStatus).addClass('form-success');
        
            // Set the message text.
            $(formStatus).text(response);
        
            // Clear the form.
            $('#name').val('');
            $('#email').val('');
            $('#message').val('');
        }).fail(function(data) {
            // Make sure that the formMessages div has the 'error' class.
            $(formStatus).removeClass('form-success');
            $(formStatus).addClass('form-error');
        
            // Set the message text.
            if (data.responseText !== '') {
                $(formStatus).text(data.responseText);
            } else {
                $(formStatus).text('An error occured and your message could not be sent. Try refreshing the page.');
            }
        });
        
        
    });
    
    
    
});
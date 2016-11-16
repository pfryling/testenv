$('form').submit(function(event){
    event.preventDefault();

    var $form = $(this),
        $submit = $form.find( 'button[type="submit"]' ),
        name_value = $form.find( 'input[name="name"]' ).val(),
        email_value = $form.find( 'input[name="email"]').val(),
        message_value = $form.find( 'textarea[name="message"]').val(),
        url = $form.attr('action');

    var posting = $.post( url, {
        name: name_value,
        email: email_value,
        message: message_value
    });

    posting.done(function( data ) {
        $( "#formResponse").html(data);
        $submit.text('Sent, thank you.');
        $submit.attr("disabled", true);
    });
});
$(function() {
    $('#contact-form-1').validate({
        lang:'nl',
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true
            }
        },
        messages: {
            name: {
                required: "Gelieve uw naam in te vullen"
            },
            email: {
                required: "Gelieve uw email in te vullen",
                email: "Gelieve een geldige email in te vullen"
            },
            message: {
                required: "Gelieve uw bericht in te vullen"
            }
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"mail.php",
                success: function() {
                    $('#contact-form-1').fadeOut();
                    $('.success').fadeIn();
                },
                error: function() {
                    $('.error').fadeIn();
                }
            });
        }
    });
    $('#contact-form-2').validate({
        lang:'nl',
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true
            }
        },
        messages: {
            name: {
                required: "Gelieve uw naam in te vullen"
            },
            email: {
                required: "Gelieve uw email in te vullen",
                email: "Gelieve een geldige email in te vullen"
            },
            message: {
                required: "Gelieve uw bericht in te vullen"
            }
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"mail.php",
                success: function() {
                    $('#contact-form-2').fadeOut();
                    $('.success').fadeIn();
                },
                error: function() {
                    $('.error').fadeIn();
                }
            });
        }
    });
    $('#contact-form-3').validate({
        lang:'nl',
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true
            }
        },
        messages: {
            name: {
                required: "Gelieve uw naam in te vullen"
            },
            email: {
                required: "Gelieve uw email in te vullen",
                email: "Gelieve een geldige email in te vullen"
            },
            message: {
                required: "Gelieve uw bericht in te vullen"
            }
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"mail.php",
                success: function() {
                    $('#contact-form-3').fadeOut();
                    $('.success').fadeIn();
                },
                error: function() {
                    $('.error').fadeIn();
                }
            });
        }
    });
});

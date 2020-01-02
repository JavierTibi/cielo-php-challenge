$(document).ready(function(){

    $('#date_of_birth').datepicker({
        format: "yyyy-mm-dd",
        startDate: new Date('1900-01-01'),
        endDate:  new Date()
    });

});

if ($("#register_user").length > 0) {
    $("#register_user").validate({

        rules: {
            name: {
                required: true,
                maxlength: 50
            },
            date_of_birth: {
                required : true,
                date : true,

            },
            favorite_color: {
                required: true,
            },
            email: {
                required: true,
                maxlength: 50,
                email: true,
            },
        },
        messages: {

            name: {
                required: "The Name is required.",
                maxlength: "Your last name maxlength should be 50 characters long."
            },
            favorite_color: {
                required: "Please enter your favorite color.",

            },
            email: {
                required: "The Email is required.",
                email: "Please enter valid email.",
                maxlength: "The email name should less than or equal to 50 characters.",
            },
            date_of_birth: {
                required: "The Date of Birth is required.",
            }

        },
        submitHandler: function(form) {
            $.ajax({
                type: "post",
                url: "http://localhost/cielo/index.php/users/save",
                cache: false,
                data: $('#register_user').serialize(),
                dataType:"json",
                error: function(response) {
                    $(".alert.alert-danger").show();
                    setTimeout(function(){$(".alert.alert-danger").hide().fadeOut() }, 4000);

                },
                success: function(data) {
                    if(data.error)
                    {
                        if(data.name_error != '')
                        {
                            $('#name_error').html(data.name_error);
                        }
                        else {
                            $('#name_error').html('');
                        }
                        if(data.email_error != '') {
                            $('#email_error').html(data.email_error);
                        }
                        else {
                            $('#email_error').html('');
                        }
                        if(data.subject_error != '') {
                            $('#dob_error').html(data.dob_error);
                        } else {
                            $('#dob_error').html('');
                        }

                        if(data.color_error != '')
                        {
                            $('#color_error').html(data.color_error);
                        } else {
                            $('#color_error').html('');
                        }
                    }

                    if(data.success) {
                        $('#success_message').show().html(data.success);
                        $('#name_error').html('');
                        $('#email_error').html('');
                        $('#dob_error').html('');
                        $('#color_error').html('');
                        $('#register_user')[0].reset();
                        setTimeout(function(){$('#success_message').hide().fadeOut() }, 4000);
                    }

                }
            });
        }
    })
}

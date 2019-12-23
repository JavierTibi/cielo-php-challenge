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
                required: "Please enter name",
                maxlength: "Your last name maxlength should be 50 characters long."
            },
            favorite_color: {
                required: "Please enter your favorite color",

            },
            email: {
                required: "Please enter valid email",
                email: "Please enter valid email",
                maxlength: "The email name should less than or equal to 50 characters",
            },

        },
        submitHandler: function(form) {
            $.ajax({
                type: "post",
                url: "http://localhost/cielo/index.php/users/save",
                cache: false,
                data: $('#register_user').serialize(),
                error: function(response) {
                    $(".alert.alert-danger").show();
                    setTimeout(function(){$(".alert.alert-danger").hide().fadeOut() }, 4000);

                },
                success: function(data) {
                    if(data == false){
                        $(".alert.alert-danger").show();
                        setTimeout(function(){$(".alert.alert-danger").hide().fadeOut() }, 4000);
                    } else {
                        $(".alert.alert-success").show();
                        setTimeout(function(){$(".alert.alert-success").hide().fadeOut() }, 4000);
                    }

                }
            });
        }
    })
}

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <title>Cielo PHP Challenge</title>
    <style>
        .error {
            color: red;
            margin-left: 5px;
        }

        label.error {
            display: inline;
        }
    </style>
</head>
<body>


<div class="container">
    <div class="col-md-6 mx-auto text-center">
        <div class="header-title">
            <h2 class="wv-heading--subtitle">
                Register User
            </h2>
        </div>
    </div>
    <hr class="hr-or">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="myform form ">
                <form action="" method="post" id="register_user" name="register_user">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name"  class="form-control my-input" id="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label>Date of birth:</label>
                        <input type='text' name="date_of_birth"  class="form-control" id="date_of_birth" placeholder='Select Date' required>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email"  class="form-control my-input" id="email" placeholder="Email required">
                    </div>
                    <div class="form-group">
                        <label>Favorite Color:</label>
                        <select name="favorite_color" id="favorite_color"  class="form-control my-input" placeholder="Favorite Color" required>
                            <option value="blue">Blue</option>
                            <option value="red">Red</option>
                            <option value="green">Green</option>
                            <option value="orange">Orange</option>
                            <option value="black">Black</option>
                            <option value="white">White</option>
                        </select>
                    </div>
                    <div class="text-center ">
                        <button id="saveuser" type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                    </div>
                </form>
            </div>
            <div class="alert alert-success" style="display: none; margin-top: 10px;">User saved successfully!</div>
            <div class="alert alert-danger" style="display: none; margin-top: 10px;">Oh! An error has occurred. Please contact the Administrator.</div>
        </div>
    </div>
</div>

<!--  JavaScript -->
<script src="<?=base_url()?>/js/create_user.js"></script>
</body>
</html>
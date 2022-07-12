<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Feedback</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Armata">
    <link rel="stylesheet" href="assets/css/Feedback-Form-1.css">
    <link rel="stylesheet" href="assets/css/Feedback-Form.css">
    <link rel="stylesheet" href="assets/css/mloureiro1973-login.css">
    <link rel="stylesheet" href="assets/css/mloureiro1973-login-1.css">
    <link rel="stylesheet" href="assets/css/Responsive-feedback-form-1.css">
    <link rel="stylesheet" href="assets/css/Responsive-feedback-form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal1"  onclick="location.href='signup.php'" style="background-color: rgb(30, 40, 51);">Back</button>
    <div class="container" style="margin-top:51px;">
        <div id="form-div" style="margin-right:50px;margin-left:50px;">
            <form method="post">
                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center" style="font-family:Armata, sans-serif;font-size:30px;"><strong>Feedback </strong></h1>
                        </div>
                    </div>
                    <hr id="hr" style="background-color:#c3bfbf;">
                    <div class="row">
                        <div class="col-10 col-sm-10 col-md-8 offset-1 offset-sm-1 offset-md-2">
                            <p style="font-family:Armata, sans-serif;font-size:22px;"><strong>Email id</strong></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 col-sm-10 col-md-8 offset-1 offset-sm-1 offset-md-2"><input class="form-control" type="email" style="font-size:15px;font-family:Armata, sans-serif;" name="email"></div>
                    </div>
                    <div class="row" style="font-family:Armata, sans-serif;margin-top:10px;">
                        <div class="col-10 col-sm-10 col-md-8 offset-1 offset-sm-1 offset-md-2">
                            <p style="font-family:Armata, sans-serif;font-size:22px;"><strong>Feedback </strong></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 col-sm-10 col-md-8 offset-1 offset-sm-1 offset-md-2"><textarea class="form-control" style="font-family:Armata, sans-serif;font-size:15px;" name="feedback" maxlength="250" rows="7"></textarea></div>
                    </div>
                    <div class="row">
                        <div class="col-10 col-sm-10 col-md-8 offset-1 offset-sm-1 offset-md-2">
                            <p class="text-end" style="font-family:Armata, sans-serif;">Max length 250 characters</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9 col-sm-5 col-md-4 offset-1 offset-sm-4 offset-md-5"><button class="btn btn-warning" style="font-family:Armata, sans-serif;font-size:14px;color:rgb(0,0,0);" type="reset">Reset </button><button class="btn btn-success" id="submit-btn" style="font-family:Armata, sans-serif;font-size:14px;color:rgb(0,0,0);" type="submit">Submit </button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
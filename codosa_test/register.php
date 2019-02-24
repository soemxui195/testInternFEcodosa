<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyBlue Coin</title>

    <!-- bootstrap 4.0.0 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- animate -->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!-- preloader -->
    <link rel="stylesheet" href="assets/css/preloader.css">

    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">

    <link rel="stylesheet" href="assets/css/response.css">
    <link rel="stylesheet" href="assets/css/login.css">


</head>

<body id="body">
    <div class="register-background">
        <div class="register">
            <!--login-profile-->
            <!--login-profile-->
            <!--signin-form-->
            <div class="w3">
                <div class="signin-form profile">
                    <h3>Sign Up</h3>

                    <div class="login-form">
                        <form action="" method="post" id='msg_validate'>
                            <input id="username" type="text" required name="username" placeholder="enter username">
                            <input type="text" required name="full_name" placeholder="enter full name">
                            <input type="text" required name="email" placeholder="enter email">
                            <input type="password" required name="password" placeholder="enter password">
                            <input type="password" required name="password_confirmation" placeholder="repeat password">
                            <input type="text" name="ref_id" hidden placeholder="Ref ID" tabindex="7" required data-validation-required-message="Please enter ref ID." value='admin'>
                            <div class="g-recaptcha" data-sitekey="6LfUxnYUAAAAADIbxf_x-6mqONBsnubodxNVFJ0w"></div>

                            <div class="tp">
                                <input type="submit" name="register" value="SUBMIT">
                            </div>
                        </form>

                    </div>
                    <p style="text-align: left;"><a style="position:relative;top:5px; float:right" href="login.php"> Do you have an account?</a></p>
                </div>
            </div>
            <div class="clear"></div>
            <!--//signin-form-->
        </div>
    </div>
</body>

</html> 
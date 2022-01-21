<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login Form</title>
    <base href="{{ asset('').'frontend/' }}">
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/app.css">
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

    <script src="../backend/plugins/jquery/jquery.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="signinform">
        <h1>Login Form</h1>
        <!-- container -->
        <div class="container">
            <!-- main content -->
            <div class="w3l-form-info">
                @csrf
                <div class="w3_info">
                    <h2>Login</h2>
                    <form method="post" role="form" id="frm_login" data-route="{{ route('login') }}">
                        <div class="input-group">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="email" name="email" id="email" placeholder="Email">
                        </div>
                        <div id="show_error"></div>
                        <div class="input-group">
                            <span><i class="fas fa-key" aria-hidden="true"></i></span>
                            <input type="Password" name="password" id="password" placeholder="Password">
                        </div>
                        <div id="show_error1"></div>
                        <div id="show_error2"></div>
                        <div class="form-row bottom">
                            <div class="form-check">
                                <input type="checkbox" id="remenber" name="remenber" value="remenber">
                                <label for="remenber"> Remember me?</label>
                            </div>
                            <a href="#url" class="forgot">Forgot password?</a>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                    </form>
                    <p class="continue"><span>or Login with</span></p>
                    <div class="social-login">
                        <a href="#facebook">
                            <div class="facebook">
                                <span class="fab fa-facebook-f" aria-hidden="true"></span>

                            </div>
                        </a>
                        <a href="#twitter">
                            <div class="twitter">
                                <span class="fab fa-twitter" aria-hidden="true"></span>
                            </div>
                        </a>
                        <a href="#google">
                            <div class="google">
                                <span class="fab fa-google" aria-hidden="true"></span>
                            </div>
                        </a>
                    </div>
                    <p class="account">Don't have an account? <a href="/dang-ky">Sign up</a></p>
                </div>
            </div>
            <!-- //main content -->
        </div>
        <!-- //container -->
        <!-- footer -->
        <div class="footer">

        </div>
        <!-- footer -->
    </div>

    <!-- fontawesome v5-->
    <script src="./assets/js/fontawesome.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>

    <script type="text/javascript" charset="utf-8">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    
    </script>
    <script>
        $(function(){
            $("#frm_login").submit(function(e){
                var route=$("#frm_login").data('route');
                var form=$(this);
                $('.alert').remove();
                $.ajax({
                    type:'POST',
                    url:route,
                    data:form.serialize(),
                    success:function(result){
                        for(var i=0;i<result.length;i++){
                            if(result[i].email){
                                $("#show_error").append('<p class="alert alert-danger">'+result[i].email+'</p>');
                            }
                            if(result[i].password){
                                $("#show_error1").append('<p class="alert alert-danger">'+result[i].password+'</p>');
                            }

                            if(result[i].success){
                                toastr.success(result[i].success,'Thong bao');
                                window.location.href='/';

                            }
                            if(result[i].error){
                                $("#show_error2").append('<p class="alert alert-danger">'+result[i].error+'</p>');
                            }
                        }
                    }
                });
                e.preventDefault();
            })
        })
    </script>
</body>

</html>
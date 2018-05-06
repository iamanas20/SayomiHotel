<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Admin | Sayomi</title>
    <meta name="description" content="Neat" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />
    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/neat.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/neat.min.css')}}" />

</head>
<body>
    <div class="o-page">
        <div class="container">
            <div style="margin-top: 50px;" class="row u-justify-center">
                <div class="col-lg-6 u-text-center">
                    <h1 class="u-mb-small">Hello, Welcome to Sayomi</h1>
                    <p class="u-text-large u-mb-large">This is the admin side of the hotel website, manage your stuff in a fair and cool manner, do a great job, I know you will.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4" style="margin: auto;">
                    <div class="c-card is-animated">
                        <form class="form-group" method="post" action="/logMeIn">
                            {{ csrf_field() }}
                            <h5 class="u-mb-xsmall">Login in</h5>
                            <p class="u-mb-medium text-justify">If you already got an account you can login right here, right now:</p>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Username</span>
                                </div>
                                <input name="username" type="text" class="form-control authenticationInput" aria-label="Small" aria-describedby="inputGroup-sizing-sm" />
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
                                </div>
                                <input name="password" type="password" class="form-control authenticationInput" aria-label="Small" aria-describedby="inputGroup-sizing-sm" />
                            </div>
                            <br />
                            <input type="submit" value="Log In" class="c-btn c-btn--info has-arrow" href="dashboard01.html" />
                        </form>
                        <br />
                        @if(isset($bigNope) && $bigNope == true)
                        <h4>Check Your Username or Password!!</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 100px;">
        <div style="width: 100% !important; margin: auto;">
            <div class="copyright text-center">
                <div style="width: 100%; text-align: center;" class="copyright-content text-center">
                    <small>
                        Copyright © 2017. Made by
                        <a style="color: #f78432" target="_blank" href="https://instagram.com/iamanas22"> Anas Latique</a>. All Rights Reserved
                    </small>
                </div>
            </div>
            <div style="text-align: center; margin-bottom: 20px; margin-top: 20px;">
                <a target="_blank" href="https://instagram.com/iamanas22">
                    <img src="{{asset('images/AnasLogo.png')}}" style="max-width: 40px; text-align: center" alt="Alternate Text" />
                </a>

            </div>
        </div>
    </div><!-- // .o-page -->
    <!-- Main JavaScript -->
    <script src="js/neat.min.js?v=1.0"></script>
</body>
</html>
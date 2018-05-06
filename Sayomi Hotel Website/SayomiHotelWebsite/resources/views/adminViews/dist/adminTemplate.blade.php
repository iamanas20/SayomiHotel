<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard One | Neat</title>
    <meta name="description" content="Neat">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- Favicon -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>

    <link href="icons/css/fontawesome.css" rel="stylesheet" />
    <link href="icons/css/fontawesome.min.css" rel="stylesheet" />
    <link href="icons/css/fontawesome-all.css" rel="stylesheet" />
    <link href="icons/css/fontawesome-all.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">


    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/neat.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/neat.min.css')}}">
</head>
<body>

    <div class="o-page">
        <div class="o-page__sidebar js-page-sidebar">
            <aside class="c-sidebar">
                <div class="c-sidebar__brand">
                    {{$user->Username}}
                </div>

                <!-- Scrollable -->
                <div class="c-sidebar__body">
                    <span class="c-sidebar__title">Dashboard</span>
                    <ul class="c-sidebar__list">
                        <li>
                            <a class="c-sidebar__link " href="/admin/dashboard">
                                <i class="fas fa-list" style="margin-right: 10px;"></i>
                                Dashboard
                            </a>
                        </li>
                    </ul>

                    <span class="c-sidebar__title">General</span>
                    <ul class="c-sidebar__list">
                        <li>
                            <a class="c-sidebar__link" href="/Rooms/show">
                                <i class="fas fa-building" style="margin-right: 10px;"></i>
                                Rooms
                            </a>
                        </li>
                        <li>
                            <a class="c-sidebar__link" href="/Suites/show">
                                <i class="fas fa-suitcase" style="margin-right: 10px;"></i>
                                Suites
                            </a>
                        </li>
                        <li>
                            <a class="c-sidebar__link" href="/Guests/show">
                                <i class="fas fa-users" style="margin-right: 10px;"></i>
                                Guests
                            </a>
                        </li>
                        <li>
                            <a class="c-sidebar__link" href="/RoomBookings/show">
                                <i class="fas fa-address-book" style="margin-right: 10px;"></i>
                                Room Bookings
                            </a>
                        </li>
                        <li>
                            <a class="c-sidebar__link" href="/SuiteBookings/show">
                                <i class="fas fa-clipboard" style="margin-right: 10px;"></i>
                                Suite Bookings
                            </a>
                        </li>
                    </ul>
                </div>


                <a class="c-sidebar__footer" href="/Logout">
                    Logout
                    <i class="fas fa-power-off" style="margin-right: 10px;"></i>
                </a>
            </aside>
        </div>

        <main class="o-page__content">
            <header class="c-navbar u-mb-medium">
                <button class="c-sidebar-toggle js-sidebar-toggle">
                    <div style="width: 22px; height: 2px; background-color: black; margin: 3px 0;"></div>
                    <div style="width: 22px; height: 2px; background-color: black; margin: 3px 0;"></div>
                    <div style="width: 22px; height: 2px; background-color: black; margin: 3px 0;"></div>
                </button>

                @yield('title')

                <div class="c-dropdown dropdown">
                    <div class="c-avatar c-avatar--xsmall dropdown-toggle" id="dropdownMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                        <i class="fa fa-user"></i>
                    </div>

                    <div class="c-dropdown__menu has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuAvatar">
                        <a class="c-dropdown__item dropdown-item" href="/EditProfile"><i class="fas fa-user-cog" style="margin-right: 10px"></i>Edit Profile</a>
                        <a class="c-dropdown__item dropdown-item" href="/Logout"><i class="fas fa-power-off" style="margin-right: 10px"></i>Log out</a>
                    </div>
                </div>
            </header>

            @yield('content')

        </main>



    </div>

    <!-- Main JavaScript -->
    <script src="{{asset('javascript/neat.js')}}"></script>
    <!--<script type="text/javascript">
        history.pushState(null, '', '/dashboard');
    </script>-->

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
    <script>
        feather.replace()
    </script>

</body>
</html>
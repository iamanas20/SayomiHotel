@extends('adminViews.dist.adminTemplate')

@section('title')
<h2 class="c-navbar__title">Sayomi Hotel | Dashboard</h2>
@endsection

@section('content')

<?php
if (isset($_SESSION["user"]))
{
    $user = $_SESSION["user"];
}else
{
    return view('adminViews/dist/index');
}

?>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous" />


<div class="container">
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="c-card">
                <span class="c-icon c-icon--primary u-mb-small">
                    <i class="fas fa-address-book"></i>
                </span>

                <h3 class="c-text--subtitle">Rooms Reservations</h3>
                <h1>{{$totalNumberOfRoomsReservations}}</h1>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="c-card">
                <span class="c-icon c-icon--info u-mb-small">
                    <i class="fas fa-address-card"></i>
                </span>

                <h3 class="c-text--subtitle">Suites Reservations</h3>
                <h1>{{$totalNumberOfSuitesReservations}}</h1>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="c-card">
                <span class="c-icon c-icon--success u-mb-small">
                    <i class="fas fa-dollar-sign"></i>
                </span>

                <h3 class="c-text--subtitle">Rooms revenue</h3>
                <h1>${{$roomsRevenue}}</h1>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="c-card">
                <span class="c-icon c-icon--warning u-mb-small">
                    <i class="fas fa-dollar-sign"></i>
                </span>

                <h3 class="c-text--subtitle">Suites Revenue</h3>
                <h1>${{$suitesRevenue}}</h1>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="c-card">
                <span class="c-icon c-icon--danger u-mb-small">
                    <i class="fas fa-money-bill-alt"></i>
                </span>

                <h3 class="c-text--subtitle">Total Revenues</h3>
                <h1>${{$roomsRevenue + $suitesRevenue}}</h1>
            </div>
        </div>

        @foreach($bestRoom as $br)
        <div class="col-md-6 col-xl-3">
            <div class="c-card">
                <span class="c-icon c-icon--warning u-mb-small">
                    <i class="fas fa-handshake"></i>
                </span>

                <h3 class="c-text--subtitle">Best Room</h3>
                <p style="margin-top: 5px;">{{$br->description}}</p>
                <img src="{{ URL::to('/') }}/images/{{$br->url}}" style="margin-top: 15px;" alt="room Image" />
                <h5 style="margin-top: 15px;" class="c-text--subtitle">Reserved</h5>
                <p>{{$br->resCount}} times</p>
            </div>
        </div>
        @endforeach

        @foreach($bestSuite as $br)
        <div class="col-md-6 col-xl-3">
            <div class="c-card">
                <span class="c-icon c-icon--secondary u-mb-small">
                    <i class="fas fa-handshake"></i>
                </span>
                <h3 class="c-text--subtitle">Best Suite</h3>
                <p style="margin-top: 5px;">{{$br->description}}</p>
                <img src="{{ URL::to('/') }}/images/{{$br->url}}" style="margin-top: 15px;" alt="suite Image" />
                <h5 style="margin-top: 15px;" class="c-text--subtitle">Reserved</h5>
                <p>{{$br->resCount}} times</p>
            </div>
        </div>
        @endforeach
    </div>

</div>


<script type="text/javascript">
    history.pushState(null, '', '/admin/dashboard');
</script>
@endsection
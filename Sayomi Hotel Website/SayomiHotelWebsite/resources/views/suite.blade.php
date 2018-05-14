@extends ('layouts.template')

@section('content')

<div class="page-title parallax parallax1 flat_strech bookOneRoom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">Book The Suite</h1>
                    <div class="breadcrumbs"></div>
                </div><!-- /.page-title-captions -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<section class="flat-row menu-3">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="reservation-page-right">
                    <img src="{{asset('images/'. $suiteToBook->url)}}" />
                </div>
            </div><!--col-md-5-->

            <div class="col-md-7">
                <div class="reservation-page-left">

                    <div class="reservation-page-form">

                        <div class="title-section">
                            <div id="reserve" class="top-section">
                                <p>Reserve The Suite</p>
                            </div>
                            <h1 class="title">
                                {{$suiteToBook->description}}
                            </h1>
                        </div>

                        <ul>
                            <li>
                                All Day
                                <span></span>
                            </li>
                            <li>
                                <span style="margin-left: 5px"></span>
                                All Night
                            </li>
                        </ul>

                        <h1 class="phone">+12345 678 910</h1>

                        <h3>
                            <span id="test">Book now</span>
                        </h3>

                        <form method="post" action="/reservedSuite/{{$suiteToBook->suiteID}}">
                            {{ csrf_field() }}
                            <div class="reservation-page-input-box">
                                <label>First name</label>
                                <input type="text" class="form-control" placeholder="First name" name="Fname" id="form-name" data-error="Subject field is required" required="" />
                            </div>
                            <div class="reservation-page-input-box">
                                <label>Last name</label>
                                <input type="text" class="form-control" placeholder="Last name" name="Lname" id="form-name" data-error="Subject field is required" required="" />
                            </div>
                            <div class="reservation-page-input-box">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" id="form-name" data-error="Subject field is required" required="" />
                            </div>
                            <div class="reservation-page-input-box">
                                <label>Phone number</label>
                                <input type="tel" class="form-control" placeholder="Your phone" name="phone" id="form-phone" data-error="Subject field is required" required="" />
                            </div>
                            <div style="margin-top: -20px;" class="reservation-page-input-box">
                                <label>Nights</label>
                                <input type="number" class="form-control" placeholder="2" name="numberOfNights" id="form-date" data-error="Subject field is required" required="" />
                            </div>
                            <div style="margin-top: -20px;" class="reservation-page-input-box">
                                <label>Begin Stay Date</label>
                                <span style="width: 100%;">
                                    <input type="date" placeholder="01/01/2018" name="datepicker" id="date-picker" data-error="Subject field is required" required="" />
                                </span>
                            </div>
                            <div class="reservation-booking text-center">
                                <button type="submit" class="book-now-btn">Booking now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!--col-md-7-->
        </div><!--row-->
        @if(isset($bigNope))
        <h2 style="margin-top: 100px;" class="text-center">ENTER CORRECT VALUES</h2>
    <script>history.pushState(null, 'Sayomi Hotel', 'http://127.0.0.1:8000/reservedSuite/<?php echo $suiteToBook->suiteID?>');</script>
        @endif
    </div><!--container -->
</section>
@endsection
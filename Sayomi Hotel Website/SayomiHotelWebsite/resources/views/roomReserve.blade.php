@extends('layouts/template')

@section('content')
<div class="page-title parallax parallax1 flat_strech bookedTheRoom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">YOU HAVE BOOKED THE ROOM</h1>
                    <div class="breadcrumbs"></div>
                </div><!-- /.page-title-captions -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>

<!--on refresh display an alert cause the content will go away-->

<section class="flat-row menu-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <img style="width:90%; max-width: 1000px" src="{{asset('images/' . $roomPicture->url)}}" />
                </div>
            </div><!--col-md-5-->

            <div style="margin-top: 100px;" class="col-md-12">
                <div class="reservation-page-left">

                    <div id="divToPrint" class="reservation-page-form">
                        <div class="title-section">
                            <div id="reserve" class="top-section">
                                <p>Welcome To Sayomi</p>
                            </div>
                            <h1 class="title">
                                {{$room->description}}
                            </h1>
                            <h4>{{$room->category}}</h4>
                        </div>

                        <h3>
                            <span id="test">YOUR NAME</span>
                        </h3>
                        <h1 class="phone">{{$guest->firstName}} {{$guest->lastName}}</h1>

                        <h3>
                            <span>YOUR CODE</span>
                        </h3>
                        <h1 class="phone">{{$roomBooking->code}}</h1>

                        <h3>
                            <span id="test">YOUR STAY BEGINS</span>
                        </h3>
                        <h1 class="phone">{{$roomBooking->beginStayDate}}</h1>

                        <h3>
                            <span id="test">NUMBER OF NIGHTS</span>
                        </h3>
                        <h1 class="phone">{{$roomBooking->nights}}</h1>

                        <h3>
                            <span id="test">NUMBER OF PERSONS</span>
                        </h3>
                        <h1 class="phone">{{$roomBooking->persons}}</h1>
                    </div>
                </div>
            </div><!--col-md-7-->
        </div><!--row-->
    <br /><br />
        <div class="container">
            <div class="read-more view-all">
                
                    <a href="/reserveRoomPDF/{{$roomBooking->id}}" style="color: white; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;" >Get PDF</a>
            </div>
        </div>
    </div><!--container -->
</section>

@endsection
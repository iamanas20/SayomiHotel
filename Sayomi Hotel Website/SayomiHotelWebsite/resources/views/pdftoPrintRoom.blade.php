
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

<div style="margin-top: 100px;" class="col-md-12">
    <div class="reservation-page-left">

        <div class="reservation-page-form">

            <div class="title-section">
                <div id="reserve" class="top-section">
                    <p>Welcome To Sayomi</p>
                </div>
                <h1 class="title">
                    {{$suite->description}}
                </h1>
            </div>

            <h3>
                <span id="test">YOUR NAME</span>
            </h3>
            <h1 class="phone">{{$guest->firstName}} {{$guest->lastName}}</h1>

            <h3>
                <span>YOUR CODE</span>
            </h3>
            <h1 class="phone">{{$suiteBooking->code}}</h1>

            <h3>
                <span id="test">YOUR STAY BEGINS</span>
            </h3>
            <h1 class="phone">{{$suiteBooking->beginStayDate}}</h1>

            <h3>
                <span id="test">NUMBER OF NIGHTS</span>
            </h3>
            <h1 class="phone">{{$suiteBooking->nights}}</h1>
        </div>
    </div>
</div>
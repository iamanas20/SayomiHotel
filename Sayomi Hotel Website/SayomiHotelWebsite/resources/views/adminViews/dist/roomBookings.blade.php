@extends('adminViews.dist.adminTemplate')

@section('title')
<h2 class="c-navbar__title">Sayomi Hotel | Room Bookings</h2>
@endsection

@section('content')

<?php
if (isset($_SESSION["user"]))
{
    $user = $_SESSION["user"];
}
?>

<div class="container">
    <div class="row">
        <div style="width: 100%; margin-top: 70px; text-align: center;" class="row text-center">

            <div style="width: 55%; float: right; text-align: end">
                <h1 style="" class="text-center">Room Bookings</h1>
            </div>
        </div>
        <div class="row" style="margin-top: 20px; width: 100%">

            <div style="margin-left: 2%;" class="col-12">

                <div style=" width:100%" class="c-table-responsive@wide text-center">
                    <table class="c-table ">

                        <thead class="c-table__head">

                            <tr class="c-table__row">

                                <th class="c-table__cell c-table__cell--head">Room ID</th>

                                <th class="c-table__cell c-table__cell--head">Guest ID</th>

                                <th class="c-table__cell c-table__cell--head">Book Date</th>

                                <th class="c-table__cell c-table__cell--head">Nights</th>

                                <th class="c-table__cell c-table__cell--head">Persons</th>

                                <th class="c-table__cell c-table__cell--head">Price</th>

                                <th class="c-table__cell c-table__cell--head">Code</th>

                                <th class="c-table__cell c-table__cell--head">Actions</th>

                                <th class="c-table__cell c-table__cell--head">Confirmed</th>

                            </tr>

                        </thead>


                        <tbody>
                            @foreach($rBs as $rb)



                            <tr class="c-table__row">

                                <td class="c-table__cell">{{$rb->roomID}}</td>

                                <th class="c-table__cell">{{$rb->guestID}}</th>

                                <td class="c-table__cell">{{$rb->bookDate}}</td>

                                <td class="c-table__cell">{{$rb->nights}}</td>

                                <td class="c-table__cell">{{$rb->persons}}</td>

                                <td class="c-table__cell">{{$rb->price}}</td>

                                <td class="c-table__cell">{{$rb->code}}</td>

                                <td class="c-table__cell">

                                    <div class="c-dropdown dropdown">

                                        <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Operations

                                        </a>


                                        <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable1">

                                            <a class="c-dropdown__item dropdown-item" onclick="return confirm('You sure?');" href="deleteRoomBooking/{{$rb->id}}">Delete</a>

                                        </div>

                                    </div>

                                </td>

                                <td>
                                    @if($rb->confirmed == "Confirmed")
                                    <a class="c-btn c-btn--success" id="dropdownMenuTable1" aria-haspopup="true" aria-expanded="false">
                                        Confirmed
                                    </a>
                                    @else
                                    <a href="/confirm/{{$rb->id}}" class="c-btn c-btn--info has-icon" id="dropdownMenuTable1" aria-haspopup="true" aria-expanded="false">
                                        Not Confirmed
                                    </a>
                                    @endif
                                </td>

                            </tr>



                            @endforeach



                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>
</div>


<script type="text/javascript">
    history.pushState(null, '', '/SuiteBookings/show');
</script>
@endsection
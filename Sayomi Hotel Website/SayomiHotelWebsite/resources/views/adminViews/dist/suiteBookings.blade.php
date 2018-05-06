@extends('adminViews.dist.adminTemplate')

@section('title')
<h2 class="c-navbar__title">Sayomi Hotel | Suite Bookings</h2>
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
                <h1 style="" class="text-center">Suite Bookings</h1>
            </div>
        </div>

        <div class="row" style="margin-top: 20px; width: 100%">

            <div style="margin-left: 2%;" class="col-12">

                <div style=" width:100%" class="c-table-responsive@wide text-center">
                    <table class="c-table ">

                        <thead class="c-table__head">

                            <tr class="c-table__row">

                                <th class="c-table__cell c-table__cell--head">Suite ID</th>

                                <th class="c-table__cell c-table__cell--head">Guest ID</th>

                                <th class="c-table__cell c-table__cell--head">Book Date</th>

                                <th class="c-table__cell c-table__cell--head">Nights</th>

                                <th class="c-table__cell c-table__cell--head">Price</th>

                                <th class="c-table__cell c-table__cell--head">Code</th>

                                <th class="c-table__cell c-table__cell--head">Actions</th>

                            </tr>

                        </thead>



                        <tbody>
                            @foreach($sBs as $rb)

                            <tr class="c-table__row">

                                <td class="c-table__cell">{{$rb->suiteID}}</td>

                                <th class="c-table__cell">{{$rb->guestID}}</th>

                                <td class="c-table__cell">{{$rb->bookDate}}</td>

                                <td class="c-table__cell">{{$rb->nights}}</td>

                                <td class="c-table__cell">{{$rb->price}}</td>

                                <td class="c-table__cell">{{$rb->code}}</td>

                                <td class="c-table__cell">

                                    <div class="c-dropdown dropdown">

                                        <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Operations

                                        </a>


                                        <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable1">

                                            <a class="c-dropdown__item dropdown-item" onclick="return confirm('You sure?');" href="deleteSuiteBooking/{{$rb->id}}">Delete</a>

                                        </div>

                                    </div>

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
    history.pushState(null, '', '/RoomBookings/show');
</script>
@endsection
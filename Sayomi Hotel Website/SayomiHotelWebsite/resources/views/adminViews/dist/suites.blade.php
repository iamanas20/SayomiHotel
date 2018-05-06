@extends('adminViews.dist.adminTemplate')

@section('title')
<h2 class="c-navbar__title">Sayomi Hotel | Suites</h2>
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

                <h1 style="" class="text-center">Suites</h1>

            </div>

            <div style="width: 45%; margin-top: 10px; text-align: end; float: right">

                <h5>
                    <a class="c-btn c-btn--danger" href="/createSuite">Create a suite</a>
                </h5>

            </div>

        </div>

        <div class="row" style="margin-top: 20px; width: 100%">

            <div style="margin-left: 2%;" class="col-12">

                <div style=" width:100%" class="c-table-responsive@wide text-center">

                    <table class="c-table">

                        <thead class="c-table__head">

                            <tr class="c-table__row">

                                <th class="c-table__cell c-table__cell--head">suite</th>

                                <th class="c-table__cell c-table__cell--head">Price Per Night</th>

                                <th class="c-table__cell c-table__cell--head">Num Of Rooms</th>

                                <th class="c-table__cell c-table__cell--head">Locked (0=no/1=yes)</th>

                                <th class="c-table__cell c-table__cell--head">Actions</th>

                            </tr>

                        </thead>



                        <tbody>
                            @foreach($suites as $suite)



                            <tr class="c-table__row">

                                <td class="c-table__cell">

                                    <div class="o-media">

                                        <div class="o-media__img u-mr-xsmall">

                                            <div class="c-avatar c-avatar--small">

                                                <img class="c-avatar__img" src="{{asset('images/' . $suite->url)}}" alt="suite Image" />

                                            </div>

                                        </div>

                                        <div class="o-media__body">

                                            <h6>{{$suite->description}}</h6>

                                        </div>

                                    </div>

                                </td>

                                <td class="c-table__cell">${{$suite->pricePerNight}}</td>

                                <th class="c-table__cell">{{$suite->numberOfRooms}}</th>

                                <td class="c-table__cell">
                                    {{$suite->locked}}

                                </td>

                                <td class="c-table__cell">

                                    <div class="c-dropdown dropdown">

                                        <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Operations

                                        </a>



                                        <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable1">

                                            <a class="c-dropdown__item dropdown-item" href="/modifySuite/{{$suite->suiteID}}">Modify</a>

                                            <a class="c-dropdown__item dropdown-item" onclick="return confirm('You sure?');" href="/deleteSuite/{{$suite->suiteID}}">Delete</a>

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
    history.pushState(null, '', '/Suites/show');
</script>
@endsection
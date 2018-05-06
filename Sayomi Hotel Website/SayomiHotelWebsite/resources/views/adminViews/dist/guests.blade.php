@extends('adminViews.dist.adminTemplate')

@section('title')
<h2 class="c-navbar__title">Sayomi Hotel | Guests</h2>
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
                <h1 style="" class="text-center">Guests</h1>
            </div>
        </div>

        <div class="row" style="margin-top: 20px; width: 100%">

            <div style="margin-left: 2%;" class="col-12">

                <div style=" width:100%" class="c-table-responsive@wide text-center">
                    <table class="c-table">
                        <thead class="c-table__head">
                            <tr class="c-table__row">
                                <th class="c-table__cell c-table__cell--head">First Name</th>
                                <th class="c-table__cell c-table__cell--head">Last Name</th>
                                <th class="c-table__cell c-table__cell--head">Email</th>
                                <th class="c-table__cell c-table__cell--head">Phone</th>
                                <th class="c-table__cell c-table__cell--head">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($guests as $guest)

                            <tr class="c-table__row">

                                <td class="c-table__cell">{{$guest->firstName}}</td>

                                <td class="c-table__cell">{{$guest->lastName}}</td>

                                <td class="c-table__cell">{{$guest->email}}</td>

                                <td class="c-table__cell">{{$guest->phone}}</td>

                                <td class="c-table__cell">

                                    <div class="c-dropdown dropdown">

                                        <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Operations

                                        </a>

                                        <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable1">

                                            <a class="c-dropdown__item dropdown-item" href="/modifyGuest/{{$guest->id}}">Modify</a>

                                            <a class="c-dropdown__item dropdown-item" onclick="return confirm('you sure?');" href="/deleteGuest/{{$guest->id}}">Delete</a>

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
    history.pushState(null, '', '/Guests/show');
</script>
@endsection
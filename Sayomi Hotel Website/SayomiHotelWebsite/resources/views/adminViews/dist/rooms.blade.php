@extends('adminViews.dist.adminTemplate')

@section('title')
<h2 class="c-navbar__title">Sayomi Hotel | Rooms</h2>
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
                <h1 style="" class="text-center">Rooms</h1>
            </div>
            <div style="width: 45%; margin-top: 10px; text-align: end; float: right">
                <h5>
                    <a class="c-btn c-btn--danger" href="/createRoom">Create a room</a>
                </h5>
            </div>
        </div>
        
        <div style="margin-top: 70px; width: 100%" class="row">
            <form style="margin-left: 50%; width: 100%" action="/room">
                <input style="width: 40%; height: 30px; padding: 10px;" type="text" placeholder="Description">
                <select style="width: 20%; height: 30px; margin-left: 30px" name="categorySelect" id="categorySelect">
                    <option value="Single">
                        Single
                    </option>
                    <option value="Double">
                        Double
                    </option>
                </select>
                <input style="width: 15%; height: 30px; margin-left: 40px; color: white; border-radius: 3px; border: none; background-color: #FF693A;" class="btn btn-danger" type="submit" value="Search">
            </form>
        </div>
        
        <div class="row" style="margin-top: 20px; width: 100%">
            <div style="margin-left: 2%;" class="col-12">
                <div style="width: 100%;" class="c-table-responsive@wide text-center">
                    <table style="width: 100%;" class="c-table ">
                        <thead class="c-table__head">
                            <tr class="c-table__row">
                                <th class="c-table__cell c-table__cell--head">Room</th>
                                <th class="c-table__cell c-table__cell--head">Price Per Night</th>
                                <th class="c-table__cell c-table__cell--head">Category</th>
                                <th class="c-table__cell c-table__cell--head">Num Of Beds</th>
                                <th class="c-table__cell c-table__cell--head">Locked (0=no/1=yes)</th>
                                <th class="c-table__cell c-table__cell--head">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rooms as $room)
                            <tr class="c-table__row">
                                <td class="c-table__cell">
                                    <div class="o-media">
                                        <div class="o-media__img u-mr-xsmall">
                                            <div class="c-avatar c-avatar--small">
                                                <img class="c-avatar__img" src="{{asset('images/' . $room->url)}}" alt="Room Image" />
                                            </div>
                                        </div>
                                        <div class="o-media__body">
                                            
                                            <h6>{{$room->description}}</h6>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </td>
                                
                                <td class="c-table__cell">${{$room->pricePerNight}}</td>
                                
                                <th class="c-table__cell">{{$room->category}}</th>
                                
                                <th class="c-table__cell">{{$room->numberOfBeds}}</th>
                                
                                <td class="c-table__cell">
                                    {{$room->locked}}
                                    
                                </td>
                                
                                <td class="c-table__cell">
                                    
                                    <div class="c-dropdown dropdown">
                                        
                                        <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Operations
                                        </a>
                                        <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable1">
                                            
                                            <a class="c-dropdown__item dropdown-item" href="/modifyRoom/{{$room->roomID}}">Modify</a>
                                            
                                            <a class="c-dropdown__item dropdown-item" onclick="return confirm('You sure?');" href="deleteroom/{{$room->roomID}}">Delete</a>
                                            
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
    history.pushState(null, '', '/Rooms/show');
</script>
@endsection
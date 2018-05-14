@extends('layouts.template')

@section('content')
<!-- Page Title -->
<div class="page-title parallax parallax1 flat_strech roomsPhoto">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">Rooms</h1>
                    <div class="breadcrumbs"></div>
                </div><!-- /.page-title-captions -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>

<section class="flat-row menu-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section style1 ">
                    <div class="top-section">
                        <p>Discover</p>
                    </div>
                    <h1 class="title">Our Rooms</h1>
                </div>
            </div><!--col-md-12-->
        </div><!--row-->

        <div class="row">
        <?php $i = 0; ?>

            @foreach($result as $res)
            @if($res->locked == 0)
        @if($i < 4)
        <?php $i++; ?>
            <div class="col-sm-3 col-xs-6">
                <div class="product effect1">
                    <div class="box-wrap">
                        <div class="box-image">
                            <a href="/room/{{$res->roomID}}">
                                <img src="images/{{$res->url}}" alt="images" />
                            </a>
                        </div>
                        <div class="box-content">
                            <h6>
                                {{$res->description}}
                            </h6>
                            <p>{{$res->category}}</p>
                            <ul>
                                <li>
                                   ${{$res->pricePerNight}}
                                </li>
                                <li>
                                    <i class="fa fa-heart"></i>
                                    <i class="fa fa-heart"></i>
                                    <i class="fa fa-heart"></i>
                                    <i class="fa fa-heart"></i>
                                    <i class="fa fa-heart"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endif
            @endforeach
        </div><!--row-->
    </div><!--container -->
</section>

<!-- Flat Tab-->
<section class="flat-row flat-tab-menu menu-2">
    <div class="container">
        <div class="row"></div><!--/.row-->
        <div class="row">
            <div class="col-md-12 flat-tabs ">
                <div class="bg-tabs">
                    <div class="title-section style1 martp-0px">
                        <div class="top-section">
                            <p>Find About</p>
                        </div>
                        <h1 class="title marbt-33px ">All Rooms</h1>
                    </div>

                </div><!--/.bg-tabs-->
                <div class="flat-divider d67px"></div>
                <div class="content-tab">
                    <div class="content-inner">
                        @foreach($result as $res)
                    @if($res->locked == 0)
                        <div class="col-md-6">
                            <ul class="menu-fd">

                                <li>
                                    <div class="media-wrap">
                                        <a href="/room/{{$res->roomID}}" class="pull-left">
                                            <img src="images/{{$res->url}}" width="120" alt="client" class="img-responsive" />
                                        </a>
                                        <div class="media-body">
                                            <h6>
                                                <a href="/room/{{$res->roomID}}">{{$res->description}}</a>
                                            </h6>
                                            <span>${{$res->pricePerNight}}</span>
                                        </div>
                                        <ul class="menu-in">
                                            <li>Max Persons</li>
                                            <li>{{$res->maxPersons}}</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>                       
                        @endif
                    @endforeach

                        <div class="clearfix"></div>
                        <div class="flat-divider d35px"></div>
                        <div class="read-more view-all">
                            <a >Click On A Room To Book</a>
                        </div>
                    </div><!-- /.content-inner -->


                    <div class="content-inner">
                    </div><!-- /.content-inner -->
                </div><!-- /.content-tab -->
            </div><!--flat-tabs-->

        </div><!--row-->
    </div><!--container -->
</section>

<script>
</script>

@endsection
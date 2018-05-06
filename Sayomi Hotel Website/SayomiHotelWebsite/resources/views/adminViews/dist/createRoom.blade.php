@extends('adminViews.dist.adminTemplate')

@section('title')
<h2 class="c-navbar__title">Sayomi Hotel | Create Room</h2>
@endsection

@section('content')

<?php
if (isset($_SESSION["user"]))
{
$user = $_SESSION["user"];
}
?>

<div class="o-page">
    <div class="container">
        <div style="margin-top: 50px;" class="row u-justify-center">
            <div class="col-lg-6 u-text-center">
                <h1 class="u-mb-small">Create a Room</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin: auto;">
                <div class="c-card">
                    <h5 class="u-mb-xsmall">Create Room</h5>
                    {{Form::open(['url' => '/createRoomForReal', 'method' => 'POST', 'enctype' => 'multipart/form-data'])}}
                    <div class="form-group">
                        {{Form::label('description', 'Description')}}
                        <br />
                        {{Form::text('description', '', ['style' => 'width: 100%; height:35px; margin-top: 10px;', 'class' => 'form-control', 'placeholder' => 'Description'])}}
                    </div>
                    <br />
                    <div class="form-group">
                        {{Form::label('numberOfBeds', 'Number Of Beds')}}
                        <br />
                        {{Form::number('numberOfBeds', '', ['style' => 'width: 100%; height:35px; margin-top: 10px;', 'id' => 'article-ckeditor', 'class' => 'form-control', 'min' => '1'])}}
                    </div>
                    <br />
                    <div class="form-group">
                        {{Form::label('pricePerNight', 'Price Per Night')}}
                        <br />
                        {{Form::number('pricePerNight', '', ['style' => 'width: 100%; height:35px; margin-top: 10px;', 'id' => 'article-ckeditor', 'class' => 'form-control', 'min' => '1'])}}
                    </div>
                    <br />
                    <div class="form-group">
                        {{Form::label('category', 'Category')}}
                        <br />
                        {{Form::text('category', '', ['style' => 'width: 100%; height:35px; margin-top: 10px;', 'id' => 'article-ckeditor', 'placeholder' => 'Double or Single', 'class' => 'form-control', 'min' => '1'])}}
                    </div>
                    <br />
                    <div class="form-group">
                        {{Form::label('maxPersons', 'Max Persons')}}
                        <br />
                        {{Form::number('maxPersons', '', ['style' => 'width: 100%; height:35px; margin-top: 10px;', 'id' => 'article-ckeditor', 'class' => 'form-control', 'min' => '1'])}}
                    </div>
                    <br />
                    <div class="form-group">
                        {{Form::label('locked', 'Locked (0=no / 1=yes)')}}
                        <br />
                        {{Form::number('locked', '', ['style' => 'width: 100%; height:35px; margin-top: 10px;', 'id' => 'article-ckeditor', 'class' => 'form-control', 'min' => '0', 'max' => '1'])}}
                    </div>
                    <br />
                    <div class="form-group">
                        {{Form::label('image', 'Image')}}
                        <br />
                        {{Form::file('image')}}
                        <br />
                    </div>
                    <br />
                    {{Form::submit('Submit', ['style' => 'width: 100px; background-color: #3f9cd5; color: white; border: none; margin-left: 40%; height:35px; margin-top: 10px;',  'class'=>'btn btn-success'])}}
                    {{Form::close()}}

                    <br />
                </div>
            </div>
        </div>



        
    </div>
</div>

@endsection

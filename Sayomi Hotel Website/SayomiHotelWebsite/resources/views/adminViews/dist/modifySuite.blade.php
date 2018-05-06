@extends('adminViews.dist.adminTemplate')

@section('title')
<h2 class="c-navbar__title">Sayomi Hotel | Modify Suite</h2>
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
                <h1 class="u-mb-small">Modify The Suite</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin: auto;">
                <div class="c-card">
                    <h5 class="u-mb-xsmall">Modify The Suite</h5>
                    {{Form::open(['url' => '/modifyTheSuiteForReal/' . $suite->suiteID, 'method' => 'POST', 'enctype' => 'multipart/form-data'])}}
                    <div class="form-group">
                        {{Form::label('description', 'Description')}}
                        <br />
                        {{Form::text('description', $suite->description, ['style' => 'width: 100%; height:35px; margin-top: 10px;', 'class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                    <br />
                    <div class="form-group">
                        {{Form::label('numberOfRooms', 'Number Of Rooms')}}
                        <br />
                        {{Form::number('numberOfRooms', $suite->numberOfRooms, ['style' => 'width: 100%; height:35px; margin-top: 10px;', 'id' => 'article-ckeditor', 'class' => 'form-control', 'min' => '1'])}}
                    </div>
                    <br />
                    <div class="form-group">
                        {{Form::label('pricePerNight', 'Price Per Night')}}
                        <br />
                        {{Form::number('pricePerNight', $suite->pricePerNight, ['style' => 'width: 100%; height:35px; margin-top: 10px;', 'id' => 'article-ckeditor', 'class' => 'form-control', 'min' => '1'])}}
                    </div>
                    <br />
                    <div class="form-group">
                        {{Form::label('locked', 'Locked (0=no / 1=yes)')}}
                        <br />
                        {{Form::number('locked',  $suite->locked, ['style' => 'width: 100%; height:35px; margin-top: 10px;', 'id' => 'article-ckeditor', 'class' => 'form-control', 'min' => '0', 'max' => '1'])}}
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

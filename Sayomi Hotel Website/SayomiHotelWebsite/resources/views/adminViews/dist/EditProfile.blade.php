@extends('adminViews.dist.adminTemplate')

@section('title')
<h2 class="c-navbar__title">Sayomi Hotel | Edit Profile</h2>
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
                <h1 class="u-mb-small">Modify The Guest</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin: auto;">
                <div class="c-card ">
                    <h5 class="u-mb-xsmall">Modify The Guest</h5>
                    {{Form::open(['url' => '/modifyTheProfileForReal/' . $user->id, 'method' => 'POST', 'enctype' => 'multipart/form-data'])}}
                    <div class="form-group">
                        {{Form::label('Username', 'Username')}}
                        <br />
                        {{Form::text('Username', $user->Username, ['style' => 'width: 100%; height:35px; margin-top: 10px;', 'class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                    <br />
                    <div class="form-group">
                        {{Form::label('firstName', 'First Name')}}
                        <br />
                        {{Form::text('firstName', $user->firstName, ['style' => 'width: 100%; height:35px; margin-top: 10px;', 'class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                    <br />
                    <div class="form-group">
                        {{Form::label('lastName', 'Last Name')}}
                        <br />
                        {{Form::text('lastName', $user->lastName, ['style' => 'width: 100%; height:35px; margin-top: 10px;', 'class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                    <br />
                    <div class="form-group">
                        {{Form::label('password', 'Password')}}
                        <br />
                        {{Form::text('password', $user->password, ['style' => 'width: 100%; height:35px; margin-top: 10px;', 'class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                    <br />
                    <div class="form-group">
                        {{Form::label('email', 'Email')}}
                        <br />
                        {{Form::emaiL('email', $user->email, ['style' => 'width: 100%; height:35px; margin-top: 10px;', 'class' => 'form-control', 'placeholder' => ''])}}
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

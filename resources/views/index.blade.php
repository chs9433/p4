@extends('layouts.master')

@section('content')
<div class="container-fluid text-center">
<br>
    <h2>Hello, User!</h2>
    <h5>{{ date('m-d-Y')}}</h5>
    <hr>
    <div class="container button-group">
        <div class="row va-menu-row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <button class="btn btn-default va-menu-bttn" type="button"><i class="fas fa-folder-plus fa-2x"></i><br>New Audit</button>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <button class="btn btn-default" type="button"><i class="fas fa-folder-open fa-2x"></i><br>Load Audit</button>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <button class="btn btn-default" type="button"><i class="fas fa-calendar-alt fa-2x"></i><br>Calendar</button>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <button class="btn btn-default" type="button"><i class="fas fa-chart-line fa-2x"></i><br>Analytics</button>
            </div>
        </div>



    </div>
</div>
@endsection

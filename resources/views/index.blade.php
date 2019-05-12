@extends('layouts.master')

@section('content')
<div class="container-fluid text-center" style="margin:auto;">
    <br><br>
    <h4>Hello, User!</h4>
    <h5>{{ date('m-d-Y')}}</h5>
    <hr>
        <div class="row va-menu-row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="min-width:50%;max-width:50%;">
                <a href="#">
                    <button class="btn btn-danger btn-block" type="button">
                        <i class="fas fa-folder-plus fa-2x"></i>
                        <br>New Audit
                    </button>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="min-width:50%;max-width:50%;">
                <button class="btn btn-danger btn-block" type="button"><i class="fas fa-folder-open fa-2x"></i><br>Load Audit</button>
            </div>
        </div>
        <hr>
        <div class="row va-menu-row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="min-width:50%;max-width:50%;">
                <button class="btn btn-danger btn-block" type="button"><i class="fas fa-calendar-alt fa-2x"></i><br>Calendar</button>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="min-width:50%;max-width:50%;">
                <button class="btn btn-danger btn-block" type="button"><i class="fas fa-chart-line fa-2x"></i><br>Analytics</button>
            </div>
        </div>
        <hr>
        <div class="row va-menu-row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="min-width:50%;max-width:50%;">
                <button class="btn btn-danger btn-block" type="button"><i class="fas fa-calendar-alt fa-2x"></i><br>Audit Tools</button>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="min-width:50%;max-width:50%;">
                <button class="btn btn-danger btn-block" type="button"><i class="fas fa-chart-line fa-2x"></i><br>Resources</button>
            </div>
        </div>
</div></div>
@endsection

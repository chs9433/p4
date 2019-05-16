@extends('layouts.master')

@section('viewName')
<div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline">
    <a class="nav-link active" href="#"><strong><i class="fas fa-sitemap fa-lg"></i> Main Menu</strong></a>
  </nav>
</div>
@endsection

@section('content')
<div class="container-fluid text-center" style="margin:auto;">
    <br>
    <h4>Hello, there.</h4>
    <h5>{{ date('m-d-Y')}}</h5>
    <hr>
        <div class="row va-menu-row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="min-width:50%;max-width:50%;">
                <a href="/forms/create/audit">
                    <button class="btn btn-large btn-danger btn-block" type="button">
                        <i class="fas fa-folder-plus fa-2x"></i>
                        <br>New Audit
                    </button>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="min-width:50%;max-width:50%;">
                <a href="/forms/load/audit">
                    <button class="btn btn-large btn-danger btn-block" type="button">
                        <i class="fas fa-folder-open fa-2x"></i>
                        <br>Load Audit
                    </button>
                </a>
            </div>
        </div>
        <hr>
        <div class="row va-menu-row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="min-width:50%;max-width:50%;">
                <a href="/forms/delete/audit">
                    <button class="btn btn-large btn-danger btn-block" type="button">
                        <i class="fas fa-folder-minus fa-2x"></i>
                        <br>Delete Audit
                    </button>
                </a>
            </div>
        </div>
        <hr>
</div></div>
@endsection

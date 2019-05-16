@extends('layouts.master')

@section('viewName')
<div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline">
    <a class="nav-link active" href="#"><strong><i class="fas fa-sitemap fa-lg"></i> Audit Dashboard</strong></a>
  </nav>
</div>
@endsection

@section('content')
<div class="container text-center m-auto">
    <br>
    <h4><u>{{$auditData['submarket']}}</u></h4>
    <small><b>Start Date:</b> {{ $auditData['audit_start_date']}} | <b>End Date:</b> {{ $auditData['audit_end_date']}}</small>
    <hr>
    <div class="text-left m-auto">
        <h5><u>Audit Status</u></h5>
        <div class="row"><div class="col va-font-12" >{{ $auditData['audit_status'] }}</div></div>
        <hr>
        <h5><u>Audit Team</u></h5>
        <div class="row"><div class="col va-font-12" ><b>Lead Auditor:</b> {{ $auditData['lead_auditor'] }}</div></div>
        <div class="row"><div class="col va-font-12" ><b>Guest Auditor:</b> {{ $auditData['guest_auditor'] }}</div></div>
        <div class="row"><div class="col va-font-12" ><b>RFE SME:</b> {{ $auditData['rfe_sme'] }}</div></div>
        <div class="row"><div class="col va-font-12" ><b>EH&S SME:</b> {{ $auditData['ehs_sme'] }}</div></div>
        <hr>
        <h5><u>Site List</u></h5>
        <div class="text-left m-auto">
            <table class="table table-bordered table-responsive table-striped va-font-12">
                <thead>
                  <tr>
                    <th>Site Name</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Site Type</th>
                    <th>Tower Type</th>
                  </tr>
                </thead>
                <tbody id="siteTable">
                  @foreach($sites as $site)
                  <tr>
                    <td>{{ $site->name }}</td>
                    <td>{{ $site->city }}</td>
                    <td>{{ $site->state }}</td>
                    <td>{{ $site->site_type }}</td>
                    <td>{{ $site->tower_type }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
        <hr>
    </div>
<hr>
</div>
@endsection

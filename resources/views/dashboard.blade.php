@extends('layouts.master')

@section('viewName')
<div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline">
    <a class="nav-link active" href="#"><strong><i class="fas fa-sitemap fa-lg"></i> Audit Dashboard</strong></a>
  </nav>
</div>
@endsection

@section('content')
<div class="container-fluid text-center" style="margin:auto;">
<br>
<h4>{{$auditData['submarket']}}</h4>
<small><b>Start Date:</b> {{ $auditData['audit_start_date']}} | <b>End Date:</b> {{ $auditData['audit_end_date']}}</small>
<hr>
<div class="container-fluid text-left">
<h5>Audit Status</h5>
<div class="row"><div class="col" style="font-size:12px">{{ $auditData['audit_status'] }}</div></div>
<hr>
<h5>Audit Team</h5>
<div class="row"><div class="col" style="font-size:12px"><b>Lead Auditor:</b> {{ $auditData['lead_auditor'] }}</div></div>
<div class="row"><div class="col" style="font-size:12px"><b>Guest Auditor:</b> {{ $auditData['guest_auditor'] }}</div></div>
<div class="row"><div class="col" style="font-size:12px"><b>RFE SME:</b> {{ $auditData['rfe_sme'] }}</div></div>
<div class="row"><div class="col" style="font-size:12px"><b>EH&S SME:</b> {{ $auditData['ehs_sme'] }}</div></div>
<hr>
<h5>Sites</h5>
<hr>
<div class="container">

</div>
<hr>
</div>
<hr>
</div>
@endsection

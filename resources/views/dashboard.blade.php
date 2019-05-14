@extends('layouts.master')

@section('content')
<div class="container-fluid text-center" style="margin:auto;">
<br>
<h4>Audit Dashboard: {{$auditData['submarket']}}</h4>
<small><b>Start Date:</b> {{ $auditData['audit_start']}} | <b>End Date:</b> {{ $auditData['audit_end']}}</small>
<hr>
<div class="container text-left">
<h5>Overview</h5>
<hr>
<h5>Stats</h5>
<hr>
{{ print_r($auditData,true) }}
<hr>
<h5>Schedule</h5>
<hr>
<h5>Summary</h5>
</div>
<hr>
</div>
@endsection

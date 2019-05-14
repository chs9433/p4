@extends('layouts.master')

@section('content')
<div class="container-fluid" style="margin:auto;">
<br>
<h4>Load Audit</h4>
<small>Fill in all fields and click the 'Submit' button.</small>
<hr>
<form class="form-signin" id="formLogin" name="formLogin" method="POST" action="{{ url('/process/form/load/audit') }}">
{{ csrf_field() }}
<div class="form-group">
<label class="form-label va-form-label" for="auditID">Audit<sup class="va-info-icon"><i class="fas fa-info-circle"></i></sup></label>
<select class="form-control" id="auditID" name="auditID">
<option value="" default>---SELECT---</option>
<option value="1">Audit 1 - Central Texas</option>
<option value="2">Audit 2 - Georgia/Alabama</option>
<option value="3">Audit 3 - New York Metro</option>
</select>
</div>
<hr>

<div class="form-row">
<button class="btn btn-large btn-info mr-3 va-form-button" type="reset">Reset</button>
<button class="btn btn-large btn-success mr-3 va-form-button" type="submit">Submit</button>
</div>

</form>
</div>
@endsection

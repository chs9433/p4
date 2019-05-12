@extends('layouts.master')

@section('content')
<div class="container-fluid" style="margin:auto;">
<br>
<h4>New Audit Project</h4>
<hr>
<form class="form-signin" id="formLogin" name="formLogin" method="POST" action="{{ url('/login') }}">
{{ csrf_field() }}
<div class="form-group">
<label class="form-label va-form-label" for="submarket">Submarket</label>
<select class="form-control" id="submarket" name="submarket">
<option value="" default>---SELECT---</option>
</select>
</div>

<div class="form-group row">
<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 mb-3">
<label class="form-label va-form-label" for="startDate">Start Date</label>
<input type="date" class="form-control" id="startDate" name="startDate">
</div>
<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 mb-3">
<label class="form-label va-form-label" for="endDate">End Date</label>
<input type="date" class="form-control" id="endDate" name="endDate">
</div>
</div>

<hr>

<div class="form-row">
<button class="btn btn-large btn-info mr-3 va-form-button" type="reset">Reset</button>
<button class="btn btn-large btn-success mr-3 va-form-button" type="submit">Submit</button>
</div>

</form>
</div>
@endsection

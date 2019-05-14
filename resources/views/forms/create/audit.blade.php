@extends('layouts.master')

@section('content')
<div class="container-fluid" style="margin:auto;">
<br>
<h4>New Audit Project</h4>
<small>Fill in all fields and click the 'Submit' button.</small>
<hr>
<form class="form-signin" id="formLogin" name="formLogin" method="POST" action="{{ url('/process/form/create/audit') }}">
{{ csrf_field() }}
<div class="form-group">
<label class="form-label va-form-label" for="submarket">Submarket<sup class="va-info-icon"><i class="fas fa-info-circle"></i></sup></label>
<select class="form-control" id="submarket" name="submarket">
<option value="" default>---SELECT---</option>
<option value="Central Texas">Central Texas</option>
<option value="Georgia/Alabama">Georgia/Alabama</option>
<option value="New York Metro">New York Metro</option>
</select>
</div>
<div class="form-group row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3" style="max-width:50%;">
<label class="form-label va-form-label" for="startDate">Start Date<sup class="va-info-icon"><i class="fas fa-info-circle"></i></sup></label>
<input type="date" class="form-control" id="startDate" name="startDate">
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3" style="max-width:50%;">
<label class="form-label va-form-label" for="endDate">End Date<sup class="va-info-icon"><i class="fas fa-info-circle"></i></sup></label>
<input type="date" class="form-control" id="endDate" name="endDate">
</div>
</div>
<div class="form-group row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3" style="max-width:50%;">
        <label class="form-label va-form-label" for="leadAuditor">Lead Auditor<sup class="va-info-icon"><i class="fas fa-info-circle"></i></sup></label>
        <select class="form-control" id="leadAuditor" name="leadAuditor">
        <option value="" default>---SELECT---</option>
        <option value="Chris Sheppard">Chris Sheppard</option>
        <option value="Other">Other</option>
        </select>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3" style="max-width:50%;">
        <label class="form-label va-form-label" for="guestAuditor">Guest Auditor<sup class="va-info-icon"><i class="fas fa-info-circle"></i></sup></label>
        <select class="form-control" id="guestAuditor" name="guestAuditor">
        <option value="" default>---SELECT---</option>
        <option value="Chris Sheppard">Chris Sheppard</option>
        <option value="Other">Other</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3" style="max-width:50%;">
        <label class="form-label va-form-label" for="rfeSME">RFE SME<sup class="va-info-icon"><i class="fas fa-info-circle"></i></sup></label>
        <select class="form-control" id="rfeSME" name="rfeSME">
        <option value="" default>---SELECT---</option>
        <option value="Chris Sheppard">Chris Sheppard</option>
        <option value="Other">Other</option>
        </select>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3" style="max-width:50%;">
        <label class="form-label va-form-label" for="ehsSME">EH&S SME<sup class="va-info-icon"><i class="fas fa-info-circle"></i></sup></label>
        <select class="form-control" id="ehsSME" name="ehsSME">
        <option value="" default>---SELECT---</option>
        <option value="Chris Sheppard">Chris Sheppard</option>
        <option value="Other">Other</option>
        </select>
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

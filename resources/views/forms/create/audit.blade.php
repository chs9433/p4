@extends('layouts.master')

@section('viewName')
<div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline">
    <a class="nav-link active" href="#"><strong><i class="fas fa-sitemap fa-lg"></i> Create Audit Form</strong></a>
  </nav>
</div>
@endsection

@section('content')
<div class="container m-auto">
    <br>
    <h4>New Audit Project</h4>
    <small>Fill in all fields and click the 'Create' button.</small>
    <hr>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form class="form-signin" id="formLogin" name="formLogin" method="POST" action="{{ url('/process/form/create/audit') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="form-label va-form-label" for="submarket">Submarket<sup class="va-info-icon">*</sup></label>
            <select class="form-control" id="submarket" name="submarket" required>
                <option value="">---SELECT---</option>
                @foreach($submarkets as $submarket)
                    <option value='{{ $submarket->submarket }}' {{ (old('submarket') == $submarket->submarket) ? 'selected' : '' }}>{{ $submarket->submarket }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3 va-mw-50">
                <label class="form-label va-form-label" for="startDate">Start Date<sup class="va-info-icon">*</sup></label>
                <input type="date" class="form-control" id="startDate" name="startDate" value="{{ old('startDate') }}" required>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3 va-mw-50">
                <label class="form-label va-form-label" for="endDate">End Date<sup class="va-info-icon">*</sup></label>
                <input type="date" class="form-control" id="endDate" name="endDate" value="{{ old('endDate') }}" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3 va-mw-50">
                <label class="form-label va-form-label" for="leadAuditor">Lead Auditor
                    <sup class="va-info-icon">*</sup>
                </label>
                <select class="form-control" id="leadAuditor" name="leadAuditor" required>
                    <option value="" default>---SELECT---</option>
                    <option value="Christopher Sheppard">Christopher Sheppard</option>
                    <option value="Cory Kihlstrom">Cory Kihlstrom</option>
                    <option value="David Weinberg">David Weinberg</option>
                </select>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3 va-mw-50">
                <label class="form-label va-form-label" for="guestAuditor">Guest Auditor
                    <sup class="va-info-icon">*</sup>
                </label>
                <select class="form-control" id="guestAuditor" name="guestAuditor" required>
                    <option value="" default>---SELECT---</option>
                    <option value="Christopher Sheppard">Christopher Sheppard</option>
                    <option value="Cory Kihlstrom">Cory Kihlstrom</option>
                    <option value="David Weinberg">David Weinberg</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3 va-mw-50">
                <label class="form-label va-form-label" for="rfeSME">RFE SME<sup class="va-info-icon">*</sup></label>
                <select class="form-control" id="rfeSME" name="rfeSME" >
                    <option value="" default>---SELECT---</option>
                    <option value="Christopher Sheppard">Christopher Sheppard</option>
                    <option value="Cory Kihlstrom">Cory Kihlstrom</option>
                    <option value="David Kilian">David Kilian</option>
                    <option value="Jeff McCook">Jeff McCook</option>
                </select>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3 va-mw-50">
                <label class="form-label va-form-label" for="ehsSME">EH&S SME<sup class="va-info-icon">*</sup></label>
                <select class="form-control" id="ehsSME" name="ehsSME" required>
                    <option value="" default>---SELECT---</option>
                    <option value="Christopher Sheppard">Christopher Sheppard</option>
                    <option value="Cory Kihlstrom">Cory Kihlstrom</option>
                    <option value="David Kilian">David Kilian</option>
                    <option value="Jeff McCook">Jeff McCook</option>
                </select>
            </div>
        </div>
        <div class="form-row"><div class="col"><small class="mt-0 pt-0 mb-2 pb-2">* Required</small><br></div></div>
        <hr>
        <div class="form-row">
            <button class="btn btn-large btn-info mr-3 va-form-button" type="reset">Reset</button>
            <button class="btn btn-large btn-success mr-3 va-form-button" type="submit">Create</button>
        </div>
    </form>
</div>
@endsection

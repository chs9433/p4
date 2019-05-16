@extends('layouts.master')

@section('viewName')
<div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline">
    <a class="nav-link active" href="#"><strong><i class="fas fa-sitemap fa-lg"></i> Load Audit Form</strong></a>
  </nav>
</div>
@endsection

@section('content')
<div class="container m-auto">
    <br>
    <h4>Load Audit</h4>
    <small>Fill in all fields and click the 'Load' button.</small>
    <hr>
    <form class="form-signin" id="formLogin" name="formLogin" method="POST" action="{{ url('/process/form/load/audit') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="form-label va-form-label" for="auditID">Audit<sup class="va-info-icon">*</sup></label>
            <select class="form-control" id="auditID" name="auditID" required>
                <option value="">---SELECT---</option>
                @foreach($audits as $audit)
                    <option value='{{ $audit->id }}' {{ (old('audit') == $audit->id) ? 'selected' : '' }}>{{ $audit->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-row"><div class="col"><small class="mt-0 pt-0 mb-2 pb-2">* Required</small><br></div></div>
        <hr>
        <div class="form-row">
            <button class="btn btn-large btn-info mr-3 va-form-button" type="reset">Reset</button>
            <button class="btn btn-large btn-success mr-3 va-form-button" type="submit">Load</button>
        </div>
    </form>
</div>
@endsection

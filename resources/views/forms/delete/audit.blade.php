@extends('layouts.master')

@section('viewName')
<div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline">
    <a class="nav-link active" href="#"><strong><i class="fas fa-sitemap fa-lg"></i> Delete Audit Form</strong></a>
  </nav>
</div>
@endsection

@section('content')
<div class="container m-auto">
    <br>
    <h4>Delete Audit</h4>
    <small>Select the desired audit and press the 'Delete' button.</small>
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
    <form class="form-signin" id="formLogin" name="formLogin" method="POST" action="{{ url('/process/form/delete/audit') }}">
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
            <button class="btn btn-large btn-danger mr-3 va-form-button" type="submit">Delete</button>
        </div>
    </form>
</div>
@endsection

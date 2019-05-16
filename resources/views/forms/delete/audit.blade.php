@extends('layouts.master')

@section('content')
<div class="container-fluid" style="margin:auto;">
<br>
<h4>Delete Audit</h4>
<small>Select the desired audit and press the 'Delete' button.</small>
<hr>
<form class="form-signin" id="formLogin" name="formLogin" method="POST" action="{{ url('/process/form/delete/audit') }}">
{{ csrf_field() }}
<div class="form-group">
<label class="form-label va-form-label" for="auditID">Audit<sup class="va-info-icon"><i class="fas fa-info-circle"></i></sup></label>
<select class="form-control" id="auditID" name="auditID">
<option value="">---SELECT---</option>
@foreach($audits as $audit)
    <option value='{{ $audit->id }}' {{ (old('audit') == $audit->id) ? 'selected' : '' }}>{{ $audit->name }}</option>
@endforeach
</select>
</div>
<hr>

<div class="form-row">
<button class="btn btn-large btn-danger mr-3 va-form-button" type="submit">Delete</button>
</div>

</form>
</div>
@endsection

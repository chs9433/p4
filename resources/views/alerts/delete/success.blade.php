@extends('layouts.master')

@section('content')
<div class="container text-center">
    <br><br>
    <i class="far fa-thumbs-up fa-3x"></i>
    <h4>Success!</h4>
    <hr>
    <div><b>{{ $auditName }}</b> has been deleted.</div>
    <hr>
    <a href='{{ $alertReRoute }}'><button type="button" class="btn btn-success" style="float:right;"><i class="fas fa-thumbs-up"></i> OK</button></a>
</div>
@endsection

@extends('layouts.master')

@section('content')
<div class="container-fluid text-center" style="margin:auto;">
    <br><br>
    <h4>Success!</h4>
    <hr>
    <div class="text-left"><b>Here's the data you entered:</b> <br>{{ $formInput }}</div>
    <hr>
    <a href='{{ $alertReRoute }}'><button type="button" class="btn btn-success" style="float:right;"><i class="fas fa-thumbs-up"></i> OK</button></a>
</div>
@endsection

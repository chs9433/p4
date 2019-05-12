@extends('layouts.master')

@section('content')
<div class="container-fluid text-center" style="margin:auto;">
    <br><br>
    <h4>Success!</h4>
    <a href="{{ $alertReRoute }}"><button type="button" class="btn btn-success"><i class="fas fa-thumbs-up"></i> OK</button></a>
</div>
@endsection

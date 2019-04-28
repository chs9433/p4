@extends('layouts.master')

@section('title')
    {{ $title }}
@endsection

@section('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}

@endsection

@section('content')
<h1> Hello {{ $user['fname'] }}! </h1>
@endsection

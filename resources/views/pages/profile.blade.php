@extends('layouts.app')

@section('stylesheets')
@parent

@endsection


@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md" >@include('partials.user_info', ["member" => $member])</div>
            <div class="col-md-8"></div>
        </div>
    </div>

@endsection
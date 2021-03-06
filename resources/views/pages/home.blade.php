@extends('layouts.app')

@section('stylesheets')
@parent

<link rel="stylesheet" type="text/css" href="{{ asset('css/main_page.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.min.css') }}">
@endsection


@section('content')

@section('title')
{{ config('app.name', 'Laravel') }}
@endsection

<header class="welcome d-flex justify-content-between align-items-center">
    <div class="flex-fill ml-5">
        <h1 class="text-center">Bem-Vindo ao Papagaio!</h1>
        <h2 class="text-center mt-3 d-none d-xl-block">Entre no mundo do conhecimento Animal.</h2>
    </div>
    <img src="../images/logo.png" class="welcomeLogo" alt="logoBig">
</header>

<div class="container main-page-container mt-5">
    <div class="row flex-column-reverse flex-lg-row">
        <div class="main-content col-md-8">

            <div>
                <h2 class="font-weight-normal mb-3">Questões Populares </h2>
                @each('activities.basic_activity', $questions, 'question')
                {{ $questions->links() }}
            </div>

        </div>
        <aside class="col-md mb-4">

            <h6>Tópicos Relacionados</h6>
            <hr class="section-break" />
            <div>
                @foreach ($popular_tags as $tag)
                @include('interation.tag', ["tag" => $tag->name])
                @endforeach
            </div>


        </aside>
    </div>
</div>


@endsection
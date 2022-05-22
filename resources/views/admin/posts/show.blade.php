@extends('layouts.admin')

@section('pageTitle', $post->title)

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->content }}</p>
            </div>
        </div>
    </div>

@endsection
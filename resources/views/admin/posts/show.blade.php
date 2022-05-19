@extends('layouts.admin')

@section('pageTitle', $post->title)

@section('content')
<main class="p-5">

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->content }}</p>
            </div>
        </div>
    </div>

</main>
@endsection
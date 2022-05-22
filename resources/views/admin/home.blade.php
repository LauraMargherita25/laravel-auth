@extends('layouts.app')

@section('PageTitle', 'Admin - Dashboard')

@section('PageContent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            {{-- Laravel --}}
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}

            {{-- Henri --}}
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('admin.posts.create') }}">Create a post</a>
                    <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">All post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

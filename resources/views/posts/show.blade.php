@extends('layouts.app')
@section('title', 'Show')
@section('content')
    <div class="container">
        <div class="row">
            <div class="mx-auto d-block mt-5 col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h1><a class="text-decoration-none" href="{{ route('posts.edit', $post->id) }}">{{ $post->title }}</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
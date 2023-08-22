@extends('layouts.app')
@section('title', 'Index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="mx-auto d-block mt-5 col-md-10">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            @foreach ($posts as $post)
                            <tbody>
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td><a class="text-decoration-none" href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
                                    <td>{{ $post->content }}</td>
                                    <td>{{ $post->created_at }}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
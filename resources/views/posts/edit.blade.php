@extends('layouts.app')
@section('title', 'Edit')
@section('content')
<div class="container">
    <div class="row">
        <div class="mx-auto d-block col-md-6 mt-5">
            <div class="card">
                <div class="card-body col-md-12">
                    <form action="/posts/{{ $post->id }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" class="form-control" value="{{ $post->title }}" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Title:</label>
                            <input type="text" class="form-control" value="{{ $post->content }}" name="content">
                        </div>
                        <div class="d-flex">
                            <button type="submit" name="submit" class="btn btn-primary flex-fill m-1">Update</button>
                        </div>
                    </form>
                    <hr>
                    <form action="/posts/{{ $post->id }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <div class="d-flex">
                            <button type="submit" name="delete" class="btn btn-danger flex-fill m-1">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
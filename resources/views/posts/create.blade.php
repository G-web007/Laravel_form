@extends('layouts.app')
@section('title', 'Create')
@section('content')
<div class="container">
    <div class="row">
        <div class="mx-auto d-block col-md-6 mt-5">
            <div class="card">
                <div class="card-body col-md-12">
                    <form action="/posts" class="form-contorl" method="post">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" class="form-control" placeholder="Enter your title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Title:</label>
                            <input type="text" class="form-control" placeholder="Enter your content" name="content">
                        </div>
                        <div class="d-flex">
                            <button type="submit" class="btn btn-primary flex-fill">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
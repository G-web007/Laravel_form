@extends('layouts.app')
@section('title', 'Edit')
@section('content')
<div class="container">
    <div class="row">
        <div class="mx-auto d-block col-md-6 mt-5">
            <div class="card">
                <div class="card-body col-md-12">
                    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['App\Http\Controllers\PostController@update', $post->id]]) !!}
                        {{ csrf_field() }}
                        <div class="mb-3">
                            {!! Form::label('title', 'Title:' ) !!}
                            {!! Form::text('title', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="mb-3">
                            {!! Form::label('content', 'Content:' ) !!}
                            {!! Form::text('content', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="d-flex">
                            {!! Form::submit('Update Post', ['class'=>'btn btn-primary flex-fill']) !!}
                        </div>
                    {!! Form::close() !!}
                    {!! Form::open(['method'=>'DELETE', 'action'=>['App\Http\Controllers\PostController@destroy', $post->id]]) !!}
                        {{ csrf_field() }}  
                        <div class="d-flex mt-2">
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger flex-fill']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
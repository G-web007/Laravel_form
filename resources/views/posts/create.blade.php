@extends('layouts.app')
@section('title', 'Create')
@section('content')
<div class="container">
    <div class="row">
        <div class="mx-auto d-block col-md-6 mt-5">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-body col-md-12">
                    {!! Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\PostController@store']) !!}
                        {{ csrf_field() }}
                        <div class="mb-3">
                            {!! Form::label('title', 'Title:' ) !!}
                            {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Enter Title']) !!}
                        </div>
                        <div class="mb-3">
                            {!! Form::label('content', 'Content:' ) !!}
                            {!! Form::text('content', null, ['class'=>'form-control', 'placeholder'=>'Enter Content']) !!}
                        </div>
                        <div class="d-flex">
                            {!! Form::submit('Create Post', ['class'=>'btn btn-primary flex-fill']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
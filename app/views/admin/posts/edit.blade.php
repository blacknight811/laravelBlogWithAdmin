@extends('admin._layouts.admin')

@section('content')

<h1>Edit Post</h1>
    {{ Form::model($post, ['route' => ['admin.posts.update', $post->id], 'method' => 'put']) }}
        @include('admin.posts._partials.form')
    {{ Form::close() }}

@stop
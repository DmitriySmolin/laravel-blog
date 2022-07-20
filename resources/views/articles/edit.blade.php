@extends('layouts.app')

@section('page-title')
    Обновление статьи
@endsection

@section('content')
    <body class="antialiased">
    <h1>Обновление статьи</h1>
    {!! Form::open(['action' => ['ArticlesController@update',$article->id],'method'=>'POST','enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Название статьи')}}
        {{Form::text('title',$article->title,['class'=> 'form-control my-2','placeholder' => 'Введите заголовок'])}}
    </div>
    <div class="form-group mb-3">
        {{Form::label('text','Сама статья')}}
        {{Form::textarea('text',$article->text,['class'=> 'form-control my-2','id'=>'app-ckeditor','placeholder' => 'Введите саму статью'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::file('main_image')}}
    <br><br>
    {{Form::submit('Обновить',['class' => 'btn btn-success mt-2'])}}
    {!! Form::close() !!}
    </body>
    </html>
@endsection

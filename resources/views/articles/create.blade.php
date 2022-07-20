@extends('layouts.app')

@section('page-title')
    Создание новой статьи
@endsection

@section('content')
    <body class="antialiased">
    <h1>Создание новой статьи</h1>
    {!! Form::open(['action' => 'ArticlesController@store','method'=>'POST','enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Название статьи')}}
        {{Form::text('title','',['class'=> 'form-control my-2','placeholder' => 'Введите заголовок'])}}
    </div>
    <div class="form-group">
        {{Form::label('text','Сама статья')}}
        {{Form::textarea('text','',['class'=> 'form-control my-2','id'=>'app-ckeditor','placeholder' => 'Введите саму статью'])}}
    </div>
    <br>
    {{Form::file('main_image')}}
    <br><br>
    {{Form::submit('Добавить',['class' => 'btn btn-success mt-2'])}}
    {!! Form::close() !!}
    </body>
    </html>
@endsection

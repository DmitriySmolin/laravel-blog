@extends('layouts.app')

@section('page-title')
    {{$title}}
@endsection

@section('content')
    <body class="antialiased">
    <h1>Страница про нас</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aspernatur culpa dolorem eius eligendi eos
        error, ipsa nisi odit porro quaerat quia, rem saepe similique temporibus, ut vel voluptates.</p>

    @if(count($params) > 0 )
        @foreach($params as $el)
            <ul class="list-group">
                <li class="list-group-item">{{$el}}</li>
            </ul>
        @endforeach
    @endif
    </body>
    </html>
@endsection

@if(count($errors) > 0)
    @foreach($errors->all() as $el)
        @if($el === 'Поле title является обязательным.')
            {{ $el = 'Необходимо добавить название для статьи'}}
        @endif
        <div class="alert alert-danger">
            {{$el}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <alert class="alert alert-success">
        {{session('success')}}
    </alert>
@endif

@if(session('error'))
    <alert class="alert alert-danger">
        {{session('error')}}
    </alert>
@endif

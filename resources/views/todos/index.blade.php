@extends('layouts.app')

@section('content')
<h1>Todos</h1>
@if(count($todos) > 0 )

    @foreach ($todos as $todo)

        <div class="card card-body bg-light" style="width: 25rem;">

            <h3><a href="todo/{{ $todo->id }}">{{ $todo->text }} </a><span class="alert-danger" style="width: 8rem;">{{ $todo->due }}</span></h3>

        </div>

        <br>
    @endforeach

@endif
@endsection

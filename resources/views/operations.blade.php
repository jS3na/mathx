@extends('layouts.main_layout')

@section('content')

<!-- operations -->
<div class="container">

    <hr>

    <div class="row">

        @foreach ($exercises as $exercise)

        <div class="col-3 display-6 mb-3">
            <span class="badge bg-dark">{{ $exercise['exercise_number'] }}</span>
            <span>{{ $exercise['exercise'] }}</span>
        </div>

        @endforeach

    </div>

    <hr>

</div>

<!-- print version -->
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <a href="{{ route('home') }}" class="btn btn-primary px-5">VOLTAR</a>
        </div>
        <div class="col text-end">
            <a href="{{ route('exportExercises') }}" class="btn btn-secondary px-5">DESCARREGAR EXERCÍCIOS</a>
            <a href="{{ route('printExercises') }}" class="btn btn-secondary px-5">IMPRIMIR EXERCÍCIOS</a>
        </div>
    </div>
</div>

@endsection
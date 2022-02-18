@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="div-btn-create d-flex justify-content-center mb-5">
            <button class="btnEvento border-0 btn-create p-4" type="button"><a id="link_create" href="{{ route('user.create')}}" class="text-decoration-none">Crear nuevo evento</a></button>
        </div>
    </div>
    <div class="container d-flex flex-wrap justify-content-center gap-4 py-4">
        @foreach ($ads as $ad)
            <x-card :ad="$ad"/>  
        @endforeach
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex justify-content-center mb-5">
            <button class="btnEvento" type="button"><a id="link_admin" href="{{ route('user.create')}}">Crear nuevo evento</a></button>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    @foreach ($ads as $ad)
        <x-card :ad="$ad"/>  
    @endforeach
</div>
@endsection
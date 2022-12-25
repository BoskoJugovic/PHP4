@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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
                    <hr>

                    <div>
                        <a href="{{ route('izvodjac.index') }}">Izvodjaci</a>
                        <hr>
                        <a href="{{ route('dobavljac.index') }}">Dobavljaci</a>
                        <hr>
                        <a href="{{ route('narucilac.index') }}">Narucioci</a>
                        <hr>
                        <a href="{{ route('projekat.index') }}">Projekti</a>
                        <hr>
                        <a href="{{ route('sektorOdrzavanja.index') }}">Sektor odrzavanja</a>
                        <hr>
                        <a href="{{ route('izvodjac.index') }}">Izvodjaci</a>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Sektor odrzavanja</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('sektor.index') }}" class="label label-primary pull-right"> Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Objekat sektora odrzavanja:</strong>
            {{ $sektor->objekat_sektora_odrzavanja }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Sluzba:</strong>
            {{ $sektor->sluzba }}
        </div>
    </div>
</div>
@endsection
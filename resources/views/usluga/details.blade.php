@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Usluga</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('usluga.index') }}" class="label label-primary pull-right"> Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Naziv:</strong>
            {{ $usluga->naziv }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Opis:</strong>
            {{ $usluga->opis }}
        </div>
    </div>
</div>
@endsection
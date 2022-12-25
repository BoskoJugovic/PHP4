@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach()
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                Izmeni izvodjaca <a href="{{ route('izvodjac.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('izvodjac.update', $izvodjac ->id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Ime</label>
                        <div class="col-sm-10">
                            <input type="text" name="ime" id="title" class="form-control" value="{{ $izvodjac->ime }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Prezime</label>
                        <div class="col-sm-10">
                            <input type="text" name="prezime" id="title" class="form-control" value="{{ $izvodjac->prezime }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Datum rodjenja</label>
                        <div class="col-sm-10">
                            <input type="date" name="datum_rodjenja" id="title" class="form-control" value="{{ $izvodjac->datum_rodjenja }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" id="title" class="form-control" value="{{ $izvodjac->email }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Radno mesto</label>
                        <div class="col-sm-10">
                            <input type="text" name="radno_mesto" id="title" class="form-control" value="{{ $izvodjac->radno_mesto }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Update" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
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
                Izmeni dobavljaca <a href="{{ route('dobavljac.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('dobavljac.update', $dobavljac ->id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Firma</label>
                        <div class="col-sm-10">
                            <input type="text" name="firma" id="title" class="form-control" value="{{ $dobavljac->firma }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Adresa</label>
                        <div class="col-sm-10">
                            <input type="text" name="adresa" id="title" class="form-control" value="{{ $dobavljac->adresa }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Telefon</label>
                        <div class="col-sm-10">
                            <input type="text" name="telefon" id="title" class="form-control" value="{{ $dobavljac->telefon }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" id="title" class="form-control" value="{{ $dobavljac->email }}">
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
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
                Izmeni projekat <a href="{{ route('projekat.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('projekat.update', $projekat ->id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Naziv</label>
                        <div class="col-sm-10">
                            <input type="text" name="naziv" id="title" class="form-control" value="{{ $projekat->naziv }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >O projektu</label>
                        <div class="col-sm-10">
                            <input type="text" name="o_projektu" id="title" class="form-control" value="{{ $projekat->o_projektu }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Status</label>
                        <div class="col-sm-10">
                            <input type="text" name="status" id="title" class="form-control" value="{{ $projekat->status }}">
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
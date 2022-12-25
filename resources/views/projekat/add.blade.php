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
                Dodaj novi projekat <a href="{{ route('projekat.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('projekat.insert') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Naziv</label>
                        <div class="col-sm-10">
                            <input type="text" name="naziv" id="title" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >O projektu</label>
                        <div class="col-sm-10">
                            <input type="text" name="o_projektu" id="title" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Status</label>
                        <div class="col-sm-10">
                            <input type="text" name="status" id="title" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Add" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
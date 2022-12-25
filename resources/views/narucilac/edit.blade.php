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
                Izmeni narucioca <a href="{{ route('narucilac.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('narucilac.update', $narucilac ->id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Organizaciona celina</label>
                        <div class="col-sm-10">
                            <input type="text" name="organizaciona_celina" id="title" class="form-control" value="{{ $narucilac->organizaciona_celina }}">
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
@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    @if(!empty($narucioci))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Narucioci </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('narucilac.add') }}"> Dodaj novog narucioca</a>
                </div>
            </div>
        </div>
        <div>
            <a href="{{ route('dobavljac.index') }}">Dobavljaci</a>
            <a href="{{ route('usluga.index') }}">Usluge</a>
            <a href="{{ route('narucilac.index') }}">Narucioci</a>
            <a href="{{ route('projekat.index') }}">Projekti</a>
            <a href="{{ route('sektorOdrzavanja.index') }}">Sektor odrzavanja</a>
            <a href="{{ route('izvodjac.index') }}">Izvodjaci</a>
        </div>
        <form action="{{ route('narucilac.index') }}" method="get" role="search">
	    {{ csrf_field() }}
            <div class="input-group">
					<input type="text" class="form-control" name="find" placeholder="Search"> 
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="d-flex justify-content-center">
                {!! $narucioci->appends(Request::all())->links() !!}
            </div>
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width=100%>Organizaciona celina</th>
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($narucioci as $narucilac)
                        <tr>
                            <td class="table-text">
                                <div>{{$narucilac->organizaciona_celina}}</div>
                            </td>
                            <td>
                                <a href="{{ route('narucilac.details', $narucilac->id) }}" class="label label-success">Details</a>
                                @auth
                                <a href="{{ route('narucilac.edit', $narucilac->id) }}" class="label label-warning">Edit</a>
                                <a href="{{ route('narucilac.delete', $narucilac->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                                @endauth
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    </div>
</div>
@endsection
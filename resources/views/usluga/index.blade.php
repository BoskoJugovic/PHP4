@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    @if(!empty($usluge))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Usluge </h2>
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
        <form action="{{ route('usluga.index') }}" method="get" role="search">
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
                {!! $usluge->appends(Request::all())->links() !!}
            </div>
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th>Naziv</th>
                        <th>Opis</th>
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($usluge as $usluga)
                        <tr>
                            <td class="table-text">
                                <div>{{$usluga->naziv}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$usluga->opis}}</div>
                            </td>
                            <td>
                                <a href="{{ route('usluga.details', $usluga->id) }}" class="label label-success">Details</a>
                                @auth
                                <a href="{{ route('usluga.edit', $usluga->id) }}" class="label label-warning">Edit</a>
                                <a href="{{ route('usluga.delete', $usluga->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
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
@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    @if(!empty($dobavljaci))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Dobavljaci </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('dobavljac.add') }}"> Add New</a>
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
        <form action="{{ route('dobavljac.index') }}" method="get" role="search">
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
                {!! $dobavljaci->appends(Request::all())->links() !!}
            </div>
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="25%">Firma</th>
                        <th width="25%">Adresa</th>
                        <th width="25%">Telefon</th>
                        <th width="25%">Email</th>
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($dobavljaci as $dobavljac)
                        <tr>
                            <td class="table-text">
                                <div>{{$dobavljac->firma}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$dobavljac->adresa}}</div>
                            </td>
                            </td>
                                <td class="table-text">
                                <div>{{$dobavljac->telefon}}</div>
                            </td>
                            </td>
                                <td class="table-text">
                                <div>{{$dobavljac->email}}</div>
                            </td>
                            <td>
                                <a href="{{ route('dobavljac.details', $dobavljac->id) }}" class="label label-success">Details</a>
                                @auth
                                <a href="{{ route('dobavljac.edit', $dobavljac->id) }}" class="label label-warning">Edit</a>
                                <a href="{{ route('dobavljac.delete', $dobavljac->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
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
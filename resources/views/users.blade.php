@extends('layout.default')

@section('content')
    <h2>Laravel Scout Full Text Search</h2>
    <div class="row justify-content-center">
        <div class="col-12">
            <form  method="get">
                <div class="col-8 float-left">
                    <input type="text" name="search" id="search" class="form-control" value="{{ request()->get('search') }}" placeholder="Search.." autofocus>
                </div>
                <div class="col-4 float-right">
                    <button type="submit" class="btn btn-primary btn-block">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-12">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Email</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
        
            </table>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <form action="{{route('dashboard.update.name')}}" method="POST">
                        <div class="card-header">Name</div>
                        <div class="card-body">
                            <input class="form-control" name="name" type="text" value="{{auth()->user()->name}}">
                        </div>
                        <div class="card-footer">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Email</div>
                    <div class="card-body">
                        <input class="form-control" type="text" value="{{auth()->user()->email}}" disabled>
                    </div>
                    <div class="card-footer">
                        For simplicity sake emails cannot be changed.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

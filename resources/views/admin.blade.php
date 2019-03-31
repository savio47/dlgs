@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> ADMIN Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as ADMIN!
                    </br>
                    
                    <br>
                    <a href="/posts" ><button type="button" class="btn btn-primary btn-lg btn-block">View/Edit License Records</button></a>
                    <br>
                    {{-- <a href="/posts"><button type="button" class="btn btn-success btn-lg btn-block"> Edit License Records</button></a>
                    <br>
                    <a href="/posts/renew"><button type="button" class="btn btn-warning btn-lg btn-block">Renew Users Driving License</button></a>
                    <br>
                    <a href="/posts"><button type="button" class="btn btn-danger btn-lg btn-block">Delete License Records</button></a>
                    <br> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <nav class="navbar navbar-light bg-light">
                   <span class="navbar-brand mb-2 h2">SELAMAT DATANG</span>
                </nav>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img src="{{asset('img/IMG-20200810-WA0086.jpg')}}" class="nav-link" height="300" alt="30" length="">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

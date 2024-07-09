@extends('layouts.app')

@section('content')
<section id="beranda">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="mb-3">
                    Mari Donasikan <br>
                    Sebagian Hartamu
                </h1>
                <p class="mb-4">
                    Bismillah mari berdonasi
                </p>
                <a href="{{ route('customer.index') }}" class="btn btn-warning btn-lg rounded-pill">Beramal</a>
            </div>
            <div class="col-md-6 d-none d-sm-block">
                <img src="{{ asset('public/image/image2vector (2).svg') }}" alt="hero" style="margin-left: 27%; max-height: 300px;" class="img-fluid d-block mx-auto">
            </div>
        </div>
    </div>
</section>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

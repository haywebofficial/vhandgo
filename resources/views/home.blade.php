@extends('layouts.admin')
@section('header, Home')

@section('css')
{{-- css --}}
@endsection

@section('content')
{{-- <div class="container">
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
</div> --}}

<section class="section home-feature">
    <div class="container">
        <div class="row">
            <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                <h1>
                    <strong>Your Account</strong>
                    <br>
                    <strong></strong>
                </h1>
            </div>
            <div class="col-lg-12">
                <div class="row justify-content-md-center">
                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-8 col-md-8 col-sm-8 col-12"data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                        <div class="features-small-item">
                            <div class="mb-4">
                                <h5 class="features-title">Name</h5>
                                <a href="javascript:;" class="d-inline-block link mb-0 js--edit-link edit-data-user" data-field="password">Edit</a>
                                <p class="mb-0 fullname text-black-50">{{auth()->user()->name}}</p>
                            </div>
                            <div class="mb-4">
                                <h5 class="features-title">Email</h5>
                                <a href="javascript:;" class="d-inline-block link mb-0 js--edit-link edit-data-user" data-field="password">Edit</a>
                                <p class="mb-0 fullname text-black-50">{{auth()->user()->email}}</p>
                            </div>
                            <div class="mb-4">
                                <h5 class="features-title">Password</h5>
                                <a href="javascript:;" class="d-inline-block link mb-0 js--edit-link edit-data-user" data-field="password">Edit</a>
                                <p class="mb-0 fullname text-black-50">{{auth()->user()->password}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
{{-- js --}}
@endsection

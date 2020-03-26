@extends('layouts.frontend')

@section('Title', 'Login')

@section('content')
    <!-- Login -->
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2>Register</h2>
                        </div>

                        <form action="{{ route('register') }}" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"" name="name" id="first_name" value="{{ old('name') }}" placeholder="First Name" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" id="last_name" value="" placeholder="Last Name" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="email" class="form-control @error('email') @if(old('type') == 'register') is-invalid @endif @enderror" id="email" placeholder="Email" name="email" value="{{ old('type') == 'register' ? old('email') : '' }}" required>
                                    @error('email')
                                        @if(old('type') == 'register')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @endif
                                    @enderror
                                </div>
                                
                                <div class="col-12 mb-3">
                                    <input type="password" class="form-control mb-3 @error('password') @if(old('type') == 'register') is-invalid @endif @enderror" name="password" id="street_address" placeholder="Password" value="" required>
                                    @error('password')
                                        @if(old('type') == 'register')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @endif
                                    @enderror
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="password" class="form-control" id="city" placeholder="Confirm Password" value="" name="password_confirmation" required>
                                </div>
                                <div class="col-12">
                                    <div class="cart-btn">
                                        <button href="#" class="btn amado-btn w-100" type="submit">Register</button>
                                    </div>
                                </div>
                                <input type="hidden" name="type" value="register">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2>Login {{ old('type') }}</h2>
                        </div>

                        <form action="{{ route('login') }}" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-12 mb-3">
                                    <input type="email" class="form-control @error('email') @if(old('type') == 'login') is-invalid @endif @enderror" id="email" placeholder="Email" name="email" value="{{ old('type') == 'login' ? old('email') : '' }}" required>
                                    @error('email')
                                        @if(old('type') == 'login')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @endif
                                    @enderror
                                </div>
                                
                                <div class="col-12 mb-3">
                                    <input type="password" class="form-control mb-3 @error('password') @if(old('type') == 'login') is-invalid @endif @enderror" name="password" id="street_address" placeholder="Password" value="" required>
                                    @error('password')
                                        @if(old('type') == 'login')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @endif
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input class="custom-control-input" id="customCheck2" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }>
                                        <label class="custom-control-label" for="customCheck2">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="cart-btn">
                                        <button type="submit" href="#" class="btn amado-btn w-100">Login</button>
                                    </div>
                                </div>
                                <input type="hidden" name="type" value="login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login -->
@endsection
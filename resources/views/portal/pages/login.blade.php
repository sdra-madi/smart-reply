@extends('portal.layout.layout')
@section('title', 'Login')
@section('body')
    <section class="login ">
        <div class="box">
            <div class="container">
                <div>
                    <div class="login100-pic js-tilt" data-tilt data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('portal/assets/images/img-01.png') }}" alt="IMG" />
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="success-alert">
                        @if (session('success'))
                            <p>{{ session('success') }}</p>
                        @endif
                    </div>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <h2>Login</h2>
                        <div>
                            <input type="email" class="form-control" name="email"
                                placeholder="{{ __('core.your_email') }}" required="" />
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password"
                                placeholder="{{ __('core.your_password') }}" required="" />
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit">{{ __('core.btn_login') }}</button>
                        <div class="forgot">
                            <span class=""> Forgot </span>
                            <a class="" href="{{ route('password.request') }}"> Username/Password ? </a>
                        </div>
                        <div class="div-width">
                            <span>Or login via :</span>
                            <div class="login-width">
                                <span>
                                    <a href="#"><i class="bi bi-google"></i></a>
                                </span>
                                <span>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                </span>
                            </div>
                        </div>
                        <div class="create">
                            <a class="txt2" href="{{ route('register') }}">
                                Create your Account
                                <i class="bi bi-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

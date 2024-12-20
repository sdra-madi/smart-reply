@extends('portal.layout.layout')
@section('title', 'SignUp')
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
                    <form action="{{ route('store') }}" method="post">
                        @csrf
                        <h2>{{ __('core.btn_signup') }}</h2>
                        <div class="div-input-c">
                            <input type="" class="form-control" name="name"
                                placeholder="{{ __('core.your_username') }}" required="" />
                            @error('name')
                                <span class="my-alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="div-input-c">
                            <input type="" class="form-control" name="email"
                                placeholder="{{ __('core.your_email') }}" required="" />
                            @error('email')
                                <span class="my-alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="div-input-c">
                            <input type="password" class="form-control" name="password"
                                placeholder="{{ __('core.your_password') }}" required="" />
                            @error('password')
                                <span class="my-alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit">{{ __('core.btn_signup') }}</button>
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
                            <a class="txt2" href="{{ route('login') }}">
                                Login
                                <i class="bi bi-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

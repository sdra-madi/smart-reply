@extends('portal.layout.layout')
@section('title', 'Home')
@section('body')

    <section class="login">
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
                    <form action="{{ route('password.update') }}" method="POST">
                        <h2>Reset Password</h2>
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="div-input-c">
                            <input type="email" name="email" placeholder="Email" required>
                            @error('email')
                                <span class="my-alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="div-input-c">
                            <input type="password" name="password" placeholder="New Password" required>
                            @error('password')
                                <span class="my-alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="div-input-c">
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                            @error('password_confirmation')
                                <span class="my-alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit">Reset Password</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

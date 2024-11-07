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
                        @if (session('status'))
                            <p>{{ session('status') }}</p>
                        @endif
                    </div>
                    <h2>Reset Password</h2>
                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                        <input type="email" name="email" placeholder="Email" required>
                        @error('email')
                            <span class="my-alert">{{ $message }}</span>
                        @enderror
                        <button type="submit">Send Password Reset Link</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

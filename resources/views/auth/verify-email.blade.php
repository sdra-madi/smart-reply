@extends('portal.layout.layout')
@section('title', 'Home')
@section('body')

    <section class="login verify">
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
                    <div class="success-alert">
                        @if (session('message'))
                            <p>{{ session('message') }}</p>
                        @endif
                    </div>
                    <h2>Verify Your Email Address</h2>
                    <p>Please check your email for a verification link.</p>
                    <form action="{{ route('verification.resend') }}" method="POST">
                        @csrf
                        <button type="submit">Resend Verification Email</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

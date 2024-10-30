@extends('portal.layout.layout')
@section('title', 'OTP')
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
                    <form id="otpForm" action="forms/verify.php" method="post">
                        <h2>{{ __('core.title_otp') }}</h2>
                        <div class="container-box">
                            <div>
                                <input maxlength="1" required />
                            </div>
                            <div>
                                <input maxlength="1" required />
                            </div>
                            <div>
                                <input maxlength="1" required />
                            </div>
                            <div>
                                <input maxlength="1" required />
                            </div>
                        </div>
                        <button type="submit" name="submit">{{ __('core.btn_login') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

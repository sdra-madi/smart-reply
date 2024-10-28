@extends('portal.layout.layout')
@section('title', 'OTP')
@section('body')
<section class="login ">
    <div class="box">
        <div class="container">
            <div>
                <div class="login100-pic js-tilt" data-tilt data-aos="fade-up" data-aos-delay="100">
                    <img src="{{asset("portal/assets/images/img-01.png")}}" alt="IMG" />
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <form id="otpForm" action="forms/verify.php" method="post">
                    <h2>{{__("core.title_otp")}}</h2>
                    <div class="container-box">
                        <div>
                            <input type="text" class="form-control" name="code1" maxlength="1" required oninput="moveToNext(this, 'code2')" onkeydown="moveToPrev(event, 'code1')"/>
                        </div>
                        <div>
                            <input type="text" class="form-control" name="code2" maxlength="1" required oninput="moveToNext(this, 'code3')" onkeydown="moveToPrev(event, 'code1')" disabled />
                        </div>
                        <div>
                            <input type="text" class="form-control" name="code3" maxlength="1" required oninput="moveToNext(this, 'code4')" onkeydown="moveToPrev(event, 'code2')" disabled />
                        </div>
                        <div>
                            <input type="text" class="form-control" name="code4" maxlength="1" required oninput="moveToNext(this, 'submit')" onkeydown="moveToPrev(event, 'code3')" disabled />
                        </div>
                    </div>
                    <button type="submit" name="submit">{{__("core.btn_login")}}</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
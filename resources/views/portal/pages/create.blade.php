@extends('portal.layout.layout')
@section('title', 'SignUp')
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
                <form action="forms/contact.php" method="post">
                    <h2>{{__("core. btn_signup")}}</h2>
                    <div>
                        <input
                        type="text"
                        class="form-control"
                        name="username"
                        placeholder="{{__("core.your_username")}}"
                        required=""
                      />
                    </div>
                    <div>
                        <input
                        type="email"
                        class="form-control"
                        name="email"
                        placeholder="{{__("core.your_email")}}"
                        required=""
                      />
                    </div>
                    <div>
                        <input
                        type="password"
                        class="form-control"
                        name="password"
                        placeholder="{{__("core.your_password")}}"
                        required=""
                      />
                    </div>
                    <button type="submit" name="submit">{{__("core.btn_signup")}}</button>
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
                        <a class="txt2" href="#">
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
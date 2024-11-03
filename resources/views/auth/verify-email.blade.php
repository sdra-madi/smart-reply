<!DOCTYPE html>
<html>
<head>
    <title>Verify Your Email</title>
</head>
<body>
    <div class="success-alert">
        @if(session('message'))
        <p>{{session('message')}}</p>
        @endif
    </div>
    <h1>Verify Your Email Address</h1>
    <p>Please check your email for a verification link.</p>
    <form action="{{ route('verification.resend') }}" method="POST">
        @csrf
        <button type="submit">Resend Verification Email</button>
    </form>
</body>
</html>

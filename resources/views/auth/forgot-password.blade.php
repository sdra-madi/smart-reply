<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>
    <div class="success-alert">
        @if(session('status'))
        <p>{{session('status')}}</p>
        @endif
    </div>
    <h1>Reset Password</h1>
    <form action="{{ route('password.email') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit">Send Password Reset Link</button>
    </form>
</body>
</html>

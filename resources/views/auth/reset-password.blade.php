<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    <h1>Reset Password</h1>
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <input type="email" name="email" placeholder="Email" required>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="password" name="password" placeholder="New Password" required>
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
        @error('password_confirmation')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit">Reset Password</button>
    </form>
</body>
</html>

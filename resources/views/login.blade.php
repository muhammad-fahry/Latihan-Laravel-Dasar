<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="login/style.css">
</head>
<body>
    <div class="login-card">
        <div class="eyes-container">
            <div class="eye">
                <div class="pupil"></div>
            </div>
            <div class="eye">
                <div class="pupil"></div>
            </div>
        </div>

        <h1>Selamat Datang</h1>
        <p>Silakan login untuk melanjutkan</p>
        <form action="/login" method="POST">
            @csrf
            <div class="input-group">
                <input type="text" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" required>
            </div>
            <br>
            <button type="submit">Login</button>
        </form>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
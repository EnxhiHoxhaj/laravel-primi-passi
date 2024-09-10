<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.css' integrity='sha512-hhSu9overYjKfSjPCtJW3688VHkfBh+W1pR5Mysll91bOJwGjYntytGTtVXb2aisFOaYXXDrO38NKXDRPJWu7A==' crossorigin='anonymous'/>
</head>
<body>
<div class="container">
        <div class="row justify-content-between">
            <div class="col-3">
            <h1>HOME PAGE</h1>
            </div>
            <div class="col-3">
                <nav>
                    <ul class="d-flex flex-row justify-content-between">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About us</a></li>
                        <li><a href="{{ route('contact') }}">Contatti</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <main class="container">
        <div class="row justify-content-center mt-3">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 class="text-success fw-bold card-title">Larevel Insta</h2>
                    <p class="fw-light text-sm card-subtitle">supported by Kredo</p>
                </div>
                <div class="card-body">
                    <p>Dear <span class="text-info fw-bold">{{ $name }}</span>,</p>
                    <h2 class="fw-bold">Thank you for your registeration!</h2>
                    <p>To start, please access the website <a href="{{ $app_url }}">here</a>.</p>
                    <p>Thank you!</p>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col">
                            <i class="fa-brands fa-facebook text-sm text-dark"></i>
                        </div>
                        <div class="col">
                            <i class="fa-brands fa-tiktok text-sm text-dark"></i>
                        </div>
                        <div class="col">
                            <i class="fa-brands fa-twitter text-sm text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>

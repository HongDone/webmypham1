<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="{{("public/user/css/style.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>
<body>
        <div>
            @include("user.header")
        </div>
        <main>
            @yield('content')
        </main>
        <div>
            @include("user.footer")
        </div>
</body>
</html>
<script src="{{("public/user/js/script.js")}}"></script>
<script>
    $('.carousel').carousel({
        interval: 1500
    })
</script>
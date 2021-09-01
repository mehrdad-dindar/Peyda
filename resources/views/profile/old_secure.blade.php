<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>امنیت</title>
</head>
<body>
<div class="visible-print text-center">
    <h1> Laravel QR Code Generator Example </h1>

    {!! QrCode::size(250)->generate('codingdriver.com'); !!}
</div>
</body>
</html>

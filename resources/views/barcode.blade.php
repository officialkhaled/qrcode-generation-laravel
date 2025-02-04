<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Barcode Generator</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div style="margin: 40px; display: flex; justify-content: center; align-items: center; gap: 10px; flex-direction: column;">
    <a href="{{ route('welcome') }}" class="btn btn-md btn-primary">
        <i class="fa-solid fa-house"></i>&nbsp;&nbsp;Home
    </a>

    <br>

    <h2>Product Barcode</h2>
    <img src="data:image/png;base64,{{ base64_encode($barcode) }}" alt="barcode">
    <img src="data:image/png;base64,{{ base64_encode((new Milon\Barcode\DNS1D())->getBarcodePNG('123456789', 'C128')) }}" alt="barcode">
    <img src="data:image/png;base64,{{ base64_encode((new Milon\Barcode\DNS2D())->getBarcodePNG('https://example.com', 'QRCODE')) }}" alt="QR Code">

    <br><br>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>

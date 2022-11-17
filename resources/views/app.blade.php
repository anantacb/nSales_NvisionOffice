<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>nVisionOffice</title>

    <meta name="description"
          content="nVisionOffice">
    <meta name="author" content="nSales">
    <meta name="robots" content="noindex, nofollow">

    <link rel="shortcut icon" href="{{ asset('/assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{ asset('/assets/media/favicons/apple-touch-icon-180x180.png') }}">
    @vite(['resources/js/app.js'])
</head>

<body>
<noscript>
    <strong>We're sorry but OneUI Vue Edition doesn't work properly without JavaScript enabled. Please enable it
        to continue.</strong>
</noscript>

<div id="app">
    <example-component heading="Header"></example-component>
</div>


</body>

</html>

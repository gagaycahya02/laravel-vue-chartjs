<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Coins Details | Laravel Vue ChartJS</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>

        <div class="cointainer" id="app">
            <coin-add-component></coin-add-component>
            <chart-component></chart-component>
        </div>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>

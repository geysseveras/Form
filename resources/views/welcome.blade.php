<html>
<head>
    <title>Calculadora</title>

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
          integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
          crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"
          integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"
            integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ=="
            crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            /*color: #B0BEC5;*/
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
            margin-bottom: 40px;
        }

        .quote {
            font-size: 24px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Calculadora</div>
        <div class="col-md-5">
            <button class="btn btn-primary btn-lg" type="button">7</button>
            <button class="btn btn-primary btn-lg" type="button">8</button>
            <button class="btn btn-primary btn-lg" type="button">9</button>
            {{--<button class="btn btn-warning btn-lg" type="button">/</button>--}}
            <button class="btn btn-primary btn-lg" type="button">4</button>
            <button class="btn btn-primary btn-lg" type="button">5</button>
            <button class="btn btn-primary btn-lg" type="button">6</button>
            {{--<button class="btn btn-warning btn-lg" type="button">x</button>--}}
            <button class="btn btn-primary btn-lg" type="button">1</button>
            <button class="btn btn-primary btn-lg" type="button">2</button>
            <button class="btn btn-primary btn-lg" type="button">3</button>
            {{--<button class="btn btn-warning btn-lg" type="button">-</button>--}}
            {{--<button class="btn btn-warning btn-lg" type="button">-</button>--}}
        </div>
        <div class="col-md-2">
            <button class="btn btn-warning btn-lg" type="button">/</button>
            <button class="btn btn-warning btn-lg" type="button">x</button>
            <button class="btn btn-warning btn-lg" type="button">-</button>
            <button class="btn btn-warning btn-lg" type="button">+</button>
        </div>
    </div>
</div>
</body>
</html>

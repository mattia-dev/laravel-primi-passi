<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hoempage</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            h1 {
                text-align: center;
                margin: 0;
                padding-top: 24px;
            }

            .ul-container {
                width: 100%;
                display: flex;
                justify-content: center;
                margin-top: 24px;
            }

            ul {
                width: 25%;
                margin: 0;
                padding: 0;
                list-style: none;
                display: flex;
                justify-content: space-between;
            }

            a {
                text-decoration: none;
                color: #636b6f;
            }

            li {
                transition: .2s;
            }

            li:hover {
                color: black;
            }
        </style>
    </head>
    <body>
        <h1>BENVENUTO {{ $name }}!</h1>

        <div class="ul-container">
            <ul>
                <a href="http://127.0.0.1:8000/about"><li>ABOUT</li></a>
                <a href="http://127.0.0.1:8000/products"><li>PRODUCTS</li></a>
                <a href="http://127.0.0.1:8000/profile"><li>PROFILE</li></a>
            </ul>
        </div>
    </body>
</html>
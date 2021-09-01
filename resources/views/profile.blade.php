<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile</title>

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

            a {
                text-decoration: none;
                color: teal;
                text-align: center;
            }

            h1 {
                text-align: center;
                margin: 0;
                padding-top: 24px;
            }
        </style>
    </head>
    <body>
        <a href="http://127.0.0.1:8000"><h4> >> Torna alla Homepage << </h4></a>

        <h1>YOUR PROFILE</h1>

        <ul>
            <li>Name: {{ $name }}</li>
            <li>Surname: {{ $surname }}</li>
            <li>Surname: {{ $age }}</li>
        </ul>
    </body>
</html>
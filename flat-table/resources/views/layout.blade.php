<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>평상도록</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/layout.css?after" type="text/css" media="all" />
        @yield ('head')
    </head>
    <body>
    <div class="flex-center position-ref full-height">
            <div class="header">
                <div class="title m-b-md">
                    평상도록
                </div>
            </div>

        @yield ('content')

            
    </div>
    </body>
</html>

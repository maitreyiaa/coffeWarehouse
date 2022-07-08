<!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>COFFE WAREHOUSE</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="{{url('css/main.css')}}" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="container">
            <div>
                <!-- MAIN CONTENT HERE -->
                @yield('content')

                <div>
                    <h4>dibuat dan ditujukan untuk tugas besar basis data dengan bantuan Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
                </div>
            </div>
        </div>
    </body>
</html>

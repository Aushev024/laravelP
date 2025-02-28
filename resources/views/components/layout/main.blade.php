@props([
    'title',
    'h1' => null,
])


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    @vite(['resources/css/app.scss'])
</head>
<body>

    <header>
        <div class="container border-bottom pb-2">
            LOGO
        </div>
    </header>
    <div>
        <div class="container">
            <h1>{{$h1 ?? $title}}</h1>
            {{$slot}}
        </div>
    </div>


    <footer>
        <div class="container border-top pt-2">
            Footer
        </div>
    </footer>





@vite(['resources/js/app.js'])
</body>
</html>




<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FizzBuzz - Laravel</title>
    </head>
    <body>
        <div class="">
            <div class="content">
                @foreach ($outputs as $output)
                    {{$output}}<br/>
                @endforeach
            </div>
        </div>
    </body>
</html>

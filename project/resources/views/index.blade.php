<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  @class(['dark' => ($appearance ?? 'system') == 'dark'])>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <main>
            <h1>会社名一覧</h1>
            <ul>
                @foreach ($company as $comp)
                <li>{{$comp -> body}}
                @endforeach
                </li>
            </ul>
        </main>
    </body>
</html>
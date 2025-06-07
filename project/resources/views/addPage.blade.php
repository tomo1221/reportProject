<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  @class(['dark' => ($appearance ?? 'system') == 'dark'])>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <main>
            <h1>会社登録画面</h1>
            <!-- フォームエリア -->
            <form action="/company" method="POST">
            会社名:<br>
            <input name="companyName">
            <br>
            {{ csrf_field() }}
            <button class="btn btn-success"> 登録 </button>
</form>
        </main>
    </body>
</html>
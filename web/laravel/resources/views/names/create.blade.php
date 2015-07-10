<!doctype html>

<html>

    <head>

        <meta charset="utf-8">

    </head>

    <body>

    <form method="post" action="/names/create">
        <label for="name">Name To Add:</label>
        <input type="text" id="name" name="name">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            <input type="submit">
        </div>
    </form>

    </body>
</html>
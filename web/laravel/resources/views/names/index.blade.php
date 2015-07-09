<!doctype html>

<html>

<head>

    <meta charset="utf-8">

</head>

<body>

@foreach($people as $person)
    <li>{{$person->name}}</li>
@endforeach

</body>
</html>
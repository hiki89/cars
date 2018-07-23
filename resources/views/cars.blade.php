<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
</head>
<body>
    <ul>
        @foreach($cars as $car)
            <li><a href="/cars/{{ $car->id }}">{{ $car->producer }}</a></li>
        @endforeach
    </ul>
</body>
</html>
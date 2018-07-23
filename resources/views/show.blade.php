<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single car</title>
</head>
<body>
    <h2> Title: {{ $car->title }} </h2>
    <p> Producer: {{ $car->producer }} </p> 
    <p> Number of doors: {{ $car->number_of_doors }} </p>
</body>
</html>
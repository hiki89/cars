@include('layout.master')
    <ul>
        @foreach($cars as $car)
            <li><a href="/cars/{{ $car->id }}">{{ $car->producer }}</a></li>
        @endforeach
    </ul>
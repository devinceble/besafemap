<ul>
    @foreach($people as $person)
        <li>{{ $person->firstname }} : {{ $person->age }}</li>
    @endforeach
</ul>
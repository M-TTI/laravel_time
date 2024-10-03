<h1>All units</h1>

<table>
@foreach($units as $unit)
    <tr>
        <th><img src="{{ $unit->image_path }}" alt="{{ $unit->name }} image" width="100"> {{ $unit->name }}</th>
        <th>{{ $unit->description }}</th>
        <th><a href="/units/{{ $unit->id }}">show</a></th>
    </tr>
@endforeach
</table>

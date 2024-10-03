<h1>{{ $unit->name }}</h1>
<img src="{{ $unit->image_path }}" alt="{{ $unit->name }} image" width="100"><br>
<section>
    <p>{{ $unit->description }}<br></p>
    <p>hp : {{ $unit->hp }}<br></p>
    <p>armor : {{ $unit->armor }}<br></p>
    <p>speed : {{ $unit->speed }}<br></p>
    <p>attack number : {{ $unit->attack_number }}<br></p>
    <p>attackdamage : {{ $unit->attack_damage }}<br></p>
    <p>attack speed : {{ $unit->attack_speed }}<br></p>
    <p>price mineral : {{ $unit->price_minerals }}<br></p>
    <p>price vespene : {{ $unit->price_vespene }}<br></p>
</section>

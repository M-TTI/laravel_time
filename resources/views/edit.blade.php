@extends('layout')
@section('title','Add a unit')
@section('main')
    <form action="/units/{{ $unit->id }}/edit" method="post">
        @csrf
        <input
            type="text"
            id="name"
            name="name"
            placeholder="unit name"
            value="{{ old('name') }}"
            required
        >
        @error('name') <p>{{ $message }}</p> @enderror<br>
        <input
            type="text"
            id="price_minerals"
            name="price_minerals"
            placeholder="minerals"
            value="{{ old('price_minerals') }}"
            required
        >
        @error('price_minerals') <p>{{ $message }}</p> @enderror<br>
        <input
            type="text"
            id="price_vespene"
            name="price_vespene"
            placeholder="vespene"
            value="{{ old('price_vespene') }}"
            required
        >
        @error('price_vespene') <p>{{ $message }}</p> @enderror<br>
        <input
            id="imagepath"
            name="image_path"
            placeholder="image path"
            value="{{ old('image_patch') }}"
            required
        >
        @error('image_path') <p>{{ $message }}</p> @enderror<br>
        <input
            id="hp"
            name="hp"
            placeholder="unit hp"
            value="{{ old('hp') }}"
            required
        >
        @error('hp') <p>{{ $message }}</p> @enderror<br>
        <input
            id="armor"
            name="armor"
            placeholder="unit armor"
            value="{{ old('armor') }}"
            required
        >
        @error('armor') <p>{{ $message }}</p> @enderror<br>
        <input
            id="speed"
            name="speed"
            placeholder="unit speed"
            value="{{ old('speed') }}"
            required
        >
        @error('speed') <p>{{ $message }}</p> @enderror<br>
        <input
            id="attack_number"
            name="attack_number"
            placeholder="unit attack number"
            value="{{ old('attack_number') }}"
            required
        >
        @error('attack_number') <p>{{ $message }}</p> @enderror<br>
        <input
            id="attack_damage"
            name="attack_damage"
            placeholder="unit attack damage"
            value="{{ old('attack_damage') }}"
            required
        >
        @error('attack_damage') <p>{{ $message }}</p> @enderror<br>
        <input
            id="attack_speed"
            name="attack_speed"
            placeholder="unit attack speed"
            value="{{ old('attack_speed') }}"
            required
        >
        @error('attack_speed') <p>{{ $message }}</p> @enderror<br>
        <textarea
            id="attack_number"
            name="attack_number"
            placeholder="unit attack number"
            required
        >
            {{ old('attack_number') }}
        </textarea>
        @error('a') <p>{{ $message }}</p> @enderror<br>

        <button type="submit" name="btn_update">Confirm</button>
        <button type="button" onclick="window.location.href='/units';">Cancel</button>
    </form>
@endsection

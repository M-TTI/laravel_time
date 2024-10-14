<?php

namespace App\Http\Controllers;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::all();
        return view('index', compact('units'));
    }
    public function create()
    {
        return view('create');
    }
    public function show(Unit $unit)
    {
        $currentUnit = Unit::find($unit);
        return view('show', compact('currentUnit'));
    }
    public function store()
    {
        $validated = request()->validate([
            'name' => 'required',
            'price_minerals' => 'required',
            'price_vespene' => 'required',
            'image_path' => 'required',
            'hp' => 'required',
            'armor' => 'required',
            'speed' => 'required',
            'attack_number' => 'required',
            'attack_damage' => 'required',
            'attack_speed' => 'required',
            'description' => 'required'
        ]);

        $current_unit = new Unit();
        $current_unit->name = request('name');
        $current_unit->price_minerals = request('price_minerals');
        $current_unit->price_vespene = request('price_vespene');
        $current_unit->image_path = request('image_path');
        $current_unit->hp = request('hp');
        $current_unit->armor = request('armor');
        $current_unit->speed = request('speed');
        $current_unit->attack_number = request('attack_number');
        $current_unit->attack_damage = request('attack_damage');
        $current_unit->attack_speed = request('attack_speed');
        $current_unit->description = request('description');
        $current_unit->save();

        return redirect('/units');
    }
    public function edit(Unit $unit)
    {
        return view('edit', compact('unit'));
    }
    public function update($unit)
    {
        $validated = request()->validate([
            'name' => 'required',
            'price_minerals' => 'required',
            'price_vespene' => 'required',
            'image_path' => 'required',
            'hp' => 'required',
            'armor' => 'required',
            'speed' => 'required',
            'attack_number' => 'required',
            'attack_damage' => 'required',
            'attack_speed' => 'required',
            'description' => 'required'
        ]);

        $current_unit = new Unit();
        $current_unit->name = request('name');
        $current_unit->price_minerals = request('price_minerals');
        $current_unit->price_vespene = request('price_vespene');
        $current_unit->image_path = request('image_path');
        $current_unit->hp = request('hp');
        $current_unit->armor = request('armor');
        $current_unit->speed = request('speed');
        $current_unit->attack_number = request('attack_number');
        $current_unit->attack_damage = request('attack_damage');
        $current_unit->attack_speed = request('attack_speed');
        $current_unit->description = request('description');
        $current_unit->save();

        return redirect('/units');
    }
    public function destroy(Unit $unit)
    {
        $unit->delete();
        return redirect('/units');
    }
}

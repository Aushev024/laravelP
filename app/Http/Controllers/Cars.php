<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cars\Store as StoreRequest;
use App\Http\Requests\Cars\Update as UpdateRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class Cars extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::orderByDesc('created_at')->get();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $transmissions = config('app-cars.transmissions');

        return view('cars.create', compact('transmissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $car = Car::create($request->validated());
        return redirect()->route('cars.show', [$car->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
//        $car = Car::findOrfail($id);
        $transmissions = config('app-cars.transmissions');
        return view('cars.edit', compact('car', 'transmissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Car $car)
    {
        $car->update($request->validated());
        return redirect()->route('cars.show', [$car->id])->with('alert', trans('alerts.cars.edited'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')->with('alert', trans('alerts.cars.deleted'));
    }

    public function trashed() {
        $cars = Car::onlyTrashed()->orderByDesc('created_at')->get();
        return view('cars.trashed', compact('cars'));
    }

    public function restore(string $id)
    {
        $car = Car::onlyTrashed()->findOrFail($id);
        if (Car::where('win', $car->win)->exists()){
            return redirect()->route('cars.trashed')->with('alert', trans('alerts.cars.restored-fail-win', ['win' => $car->win]));
        }
        $car->restore();
        return redirect()->route('cars.index')->with('alert', trans('alerts.cars.restored'));
    }
}

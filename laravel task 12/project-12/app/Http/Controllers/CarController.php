<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
    public function index()
    {
        $cars = Car::orderBy('id','desc')->paginate(10);
        return view('cars.cars', compact('cars'));
    }

    public function factoryCreateCars(){
        Car::factory()->count(10)->create();
        return response()->json("success");
    }

   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cars.manage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'model' => 'required',
            'color' => 'required',
        ]);

        $car = new Car();

        $car->name = $request->name;
        $car->model = strtolower($request->model);
        $car->color = strtolower($request->color);
        $car->save();
        return redirect()->route('carAdmincarsindex')->with('success', 'Car created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $car = Car::find($id);

        return view('cars.manage',[
            'car' => $car,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'model' => 'required|unique:cars,model,'.$id,
            'color' => 'required|unique:cars,color,'.$id,
            
        ]);

        $car = car::find($id);

        $car->name = $request->name;
        $car->model = $request->model;
        $car->color = $request->color;

        $car->save();

        return redirect()->route('carAdmincarsindex')->with('success', 'Car updated successfully.');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $car = Car::find($id);

        $car->delete();

        return redirect()->route('carAdmincarsindex')->with('success', 'Car deleted successfully.');
        //
    }
}

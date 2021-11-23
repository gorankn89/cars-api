<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCarRequest;

use App\Car;

use Illuminate\Http\Request;

class CarsController extends Controller
// $table->string('brand');
// $table->string('model');
// $table->integer('year');
// $table->integer('maxSpeed');
// $table->boolean('isAutomatic');
// $table->string('engine');
// $table->string('numbersOfDoors');
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cars = Car::all();
        return response()->json($cars);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCarRequest $request)
    {
        // $table->string('brand');
        // $table->integer('year');
        // $table->string('model');
        // $table->integer('maxSpeed');
        // $table->boolean('isAutomatic');
        // $table->string('engine');
        // $table->string('numbersOfDoors');
        // $cars = Car::create([
        //     'brand' => $request->get('brand'),
        //     'year' => $request->get('year'),
        //     'model' => $request->get('model'),
        //     'maxSpeed' => $request->get('maxSpeed'),
        //     'isAutomatic' => $request->get('isAutomatic'),
        //     'engine' => $request->get('engine'),
        //     'numbersOfDoors' => $request->get('numbersOfDoors')


        // ]);

        $data = $request->validated();
        $car = Car::create($data);

        return response()->json($car, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return response()->json($car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $car->update($request->all());
        return response()->json($car);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return response()->json($car);
    }
}

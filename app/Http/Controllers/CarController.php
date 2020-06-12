<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $car['cars'] = Car::OrderBy('id','desc')->paginate(3);
        return view('pages.index',$car);
    }

    public function login()
    {
        return view('pages.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'lloji'=>'required',
            'ngjyra'=>'required',
            'viti'=>'required',
            'kaluara'=>'required',
            'demtuar'=>'required',
        ]);

        $car = new Car;
        $car->lloji = $request->input('lloji');
        $car->ngjyra = $request->input('ngjyra');
        $car->viti = $request->input('viti');
        $car->kaluara = $request->input('kaluara');
        $car->demtuar = $request->input('demtuar');
        $car->save();

        return redirect('/')->with('success','U shtua vetura!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $car = array(
            'lloji'=>$request->lloji,
            'ngjyra'=>$request->ngjyra,
            'viti'=>$request->viti,
            'kaluara'=>$request->kaluara,
            'demtuar'=>$request->demtuar,
        );

        Car::findOrfail($request->car_id)->update($car);

        return redirect('/')->with('info','U editua vetura!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $car)
    {
        $delete = $car->all();

        $deleteCar = Car::findOrfail($car->car_id);
        $deleteCar->delete();

        return redirect('/')->with('error','U fshi vetura!');
    }
}

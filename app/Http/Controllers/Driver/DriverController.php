<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;
use App\Http\Requests\driver\DriverRequest;

class DriverController extends Controller
{
    function __construct()
    {
        $this->middleware('driver.access:ODSAdmin,Driver')
            ->only(['index', 'show']);

        $this->middleware('driver.access:ODSAdmin,NULL')
            ->only([ 'create', 'store', 'edit', 'update', 'delete']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::all();
        return view('Driver/index')->with('drivers', $drivers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('driver/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DriverRequest $request)
    {
        Driver::create
        ([
            'name' => $request->name,
            'telephone' => $request->telephone,
        ]);
        return redirect(url('driver'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Driver::findOrFail($id);
        return view('driver/show')->with('item',$item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::findOrFail($id);
        return view('driver/edit')-> with('driver', $driver);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $driver = Driver::findOrFail($id);
        $driver->name = $request->name;
        $driver->telephone = $request-> telephone;
        $driver-> save();
        return redirect(url('driver'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Driver::findOrFail($id);
		$item->delete();
		return redirect()->back('driver.index');
    }
}

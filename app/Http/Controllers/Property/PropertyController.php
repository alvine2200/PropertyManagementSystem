<?php

namespace App\Http\Controllers\Property;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property = Property::all();
        return view('property.index', compact('property'));
    }

    public function home()
    {
        return view('property.home');
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
        $type = "string|required";

        $valid = Validator::make($request->all(), [
            'name' => $type,
            'property_type' => "required",
            'lease_type' => $type,
            'location' => $type,
        ]);

        if ($valid->fails()) {
            return back()->with('fail', $valid->errors()->first());
        }

        Property::create([
            'name' => $request->name,
            'property_type' => $request->property_type,
            'lease_type' => $request->lease_type,
            'location' => $request->location
        ]);

        return back()->with('success', 'Property Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $props = Property::findOrFail($id);
        return view('property.edit', compact('props'));
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
        $type = "string|required";
        $property = Property::findOrFail($id);

        $valid = Validator::make($request->all(), [
            'name' => $type,
            'property_type' => "required",
            'lease_type' => $type,
            'location' => $type,
        ]);

        if ($valid->fails()) {
            return back()->with('fail', $valid->errors()->first());
        }

        $property->update([
            'name' => $request->name,
            'property_type' => $request->property_type,
            'lease_type' => $request->lease_type,
            'location' => $request->location
        ]);

        return back()->with('success', 'Property Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $props = Property::findOrFail($id);
        $props->delete();

        return back()->with('success', 'Propery deleted Successfully');
    }

    public function allocate($id)
    {
        $prop = Property::findOrFail($id);
        $prop->lease_status = 'Allocated';
        $prop->update();

        return back()->with('success', 'Property Successfully allocated');
    }
}

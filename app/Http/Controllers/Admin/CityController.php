<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Country;
use App\Models\Division;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'countries' => Country::orderBy('name' , 'ASC')->get(),
            'divisions' => Division::orderBy('name' , 'ASC')->get(),
            'citys' => City::with('country','division')->orderBy('name' , 'ASC')->get(),
        ];
        return view('admin.pages.city.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country_id'     => 'nullable|exists:countries,id',
            'division_id'    => 'nullable|exists:divisions,id',
            'name'           => 'required|string|max:150|unique:divisions,name',
            'status'         => 'required|in:active,inactive',
        ], [
            'country_id.exists'  => 'The selected Country does not exist.',
            'division_id.exists' => 'The selected Division does not exist.',
            'name.required'      => 'The name field is required.',
            'name.string'        => 'The name must be a string.',
            'name.max'           => 'The name may not be greater than: max characters.',
            'name.unique'        => 'This name has already been taken.',
            'status.required'    => 'The Status field is required.',
            'status.in'          => 'The status must be one of       : active, inactive.',
        ]);

        if ($validator->fails()) {
            foreach ($validator->messages()->all() as $message) {
                Session::flash('error', $message);
            }
            return redirect()->back()->withInput();
        }

        City::create([
            'country_id' => $request->country_id,
            'division_id'=> $request->division_id,
            'name'       => $request->name,
            'latitude'   => $request->latitude,
            'longitude'  => $request->longitude,
            'status'     => $request->status,
        ]);
        // toastr()->success('Data has been saved successfully!');
        return redirect()->back()->with('success', 'Data has been saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required|string|max:150',
            'status'    => 'required|in:active,inactive',
        ], [
            'name.required'   => 'The name field is required.',
            'name.string'     => 'The name must be a string.',
            'name.max'        => 'The name may not be greater than :max characters.',
            'status.required' => 'The Status field is required.',
            'status.in'       => 'The status must be one of: active, inactive.',
        ]);

        if ($validator->fails()) {
            foreach ($validator->messages()->all() as $message) {
                Session::flash('error', $message);
            }
            return redirect()->back()->withInput();
        }

        City::find($id)->update([
            'country_id' => $request->country_id,
            'division_id'=> $request->division_id,
            'name'       => $request->name,
            'latitude'   => $request->latitude,
            'longitude'  => $request->longitude,
            'status'     => $request->status,
        ]);
        // toastr()->success('Data has been saved successfully!');
        return redirect()->back()->with('success', 'Data has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        City::find($id)->delete();
    }
}
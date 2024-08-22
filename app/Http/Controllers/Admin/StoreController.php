<?php

namespace App\Http\Controllers\Admin;

use App\Models\Area;
use App\Models\City;
use App\Models\Brand;
use App\Models\Store;
use App\Models\Country;
use App\Models\Category;
use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'stores' => Store::orderBy('name', 'ASC')->get(),
        ];
        return view('admin.pages.store.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'categories' => Category::active()->get(),
            'countries'  => Country::orderBy('name', 'asc')->get(),
            'divisions'  => Division::orderBy('name', 'asc')->get(),
            'citys'      => City::orderBy('name', 'asc')->get(),
            'areas'      => Area::orderBy('name', 'asc')->get(),
        ];
        return view('admin.pages.store.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id',
            'country_id' => 'array',
            'country_id.*' => 'exists:countries,id',
            'division_id' => 'array',
            'division_id.*' => 'exists:divisions,id',
            'city_id' => 'array',
            'city_id.*' => 'exists:cities,id',
            'area_id' => 'array',
            'area_id.*' => 'exists:areas,id',
            'name' => 'required|string|max:255',
            'url' => 'nullable|url',
            'status' => 'required|in:active,inactive',
            'logo' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            'image' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            'banner_image' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            'about' => 'nullable|string',
            'offer_description' => 'nullable|string',
            'location' => 'nullable|string',
            'description' => 'nullable|string',
        ]);
        if ($validator->fails()) {
            foreach ($validator->messages()->all() as $message) {
                Session::flash('error', $message);
            }
            return redirect()->back()->withInput();
        }
        DB::beginTransaction();

        try {
            $files = [
                'logo' => $request->file('logo'),
                'image' => $request->file('image'),
                'banner_image' => $request->file('banner_image'),
            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'store/' . $key;
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }
            // Create the Brand model instance
            $store = Store::create([
                'name'              => $request->name,
                'logo'              => $uploadedFiles['logo']['status']         == 1 ? $uploadedFiles['logo']['file_path']        : null,
                'image'             => $uploadedFiles['image']['status']        == 1 ? $uploadedFiles['image']['file_path']       : null,
                'banner_image'      => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_path'] : null,
                'country_id'        => json_encode($request->country_id),
                'division_id'       => json_encode($request->division_id),
                'city_id'           => json_encode($request->city_id),
                'area_id'           => json_encode($request->area_id),
                'category_id'       => $request->category_id,
                'about'             => $request->about,
                'offer_description' => $request->offer_description,
                'location'          => $request->location,
                'description'       => $request->description,
                'url'               => $request->url,
                'category'          => $request->category,
                'status'            => $request->status,
            ]);

            // Commit the database transaction
            DB::commit();

            return redirect()->route('admin.store.index')->with('success', 'Store created successfully');
        } catch (\Exception $e) {
            // Rollback the database transaction in case of an error
            DB::rollback();

            // Return back with error message
            return redirect()->back()->withInput()->with('error', 'An error occurred while creating the Store: ' . $e->getMessage());
        }
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
        $data = [
            'store'      => Store::findOrFail($id),
            'categories' => Category::active()->get(),
            'countries'  => Country::orderBy('name', 'asc')->get(),
            'divisions'  => Division::orderBy('name', 'asc')->get(),
            'citys'      => City::orderBy('name', 'asc')->get(),
            'areas'      => Area::orderBy('name', 'asc')->get(),
        ];
        return view('admin.pages.store.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $store = Store::findOrFail($id);

        DB::beginTransaction();

        try {
            $files = [
                'logo' => $request->file('logo'),
                'image' => $request->file('image'),
                'banner_image' => $request->file('banner_image'),
            ];
            $uploadedFiles = [];
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $filePath = 'store/' . $key;
                    $oldFile = $store->$key ?? null;

                    if ($oldFile) {
                        Storage::delete("public/" . $oldFile);
                    }
                    $uploadedFiles[$key] = customUpload($file, $filePath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }

            // Update the store with the new or existing file paths
            $store->update([
                'name'              => $request->name,
                'logo'              => $uploadedFiles['logo']['status']         == 1 ? $uploadedFiles['logo']['file_path']        : $store->logo,
                'image'             => $uploadedFiles['image']['status']        == 1 ? $uploadedFiles['image']['file_path']       : $store->image,
                'banner_image'      => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_path'] : $store->banner_image,
                'country_id'        => json_encode($request->country_id),
                'division_id'       => json_encode($request->division_id),
                'city_id'           => json_encode($request->city_id),
                'area_id'           => json_encode($request->area_id),
                'category_id'       => $request->category_id,
                'about'             => $request->about,
                'offer_description' => $request->offer_description,
                'location'          => $request->location,
                'description'       => $request->description,
                'url'               => $request->url,
                'category'          => $request->category,
                'status'            => $request->status,
            ]);

            DB::commit();

            return redirect()->route('admin.store.index')->with('success', 'Store updated successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while updating the Store: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $store = Store::findOrFail($id);
        $files = [
            'logo' => $store->logo,
            'image' => $store->image,
            'banner_image' => $store->banner_image,
        ];
        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $oldFile = $store->$key ?? null;
                if ($oldFile) {
                    Storage::delete("public/" . $oldFile);
                }
            }
        }
        $store->delete();
    }

    public function toggleStatus(string $id)
    {
        $store = Store::findOrFail($id);
        $store->status = $store->status == 'active' ? 'inactive' : 'active';
        $store->save();
        return response()->json(['success' => true]);
    }
}

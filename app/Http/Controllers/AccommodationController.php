<?php

namespace App\Http\Controllers;

use App\Models\Accommodation;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accommodations = Accommodation::all();
        return $accommodations;
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
        // $validator = Validator::make($request->all(), [
        //     'title' => 'required|string|max:255',
        //     'slug' => 'required|string|max:100',
        //     'excerpt' => 'required',
        //     'body' => 'required',
        //     'category_id' => 'required'
        // ]);

        // if ($validator->fails())
        //     return response()->json($validator->errors());

        $accommodation = Accommodation::create([
            'name' => $request->name,
            'location' => $request->location,
            'type' => $request->type,
            'capacity' => $request->capacity,
            'price_per_person' => $request->price_per_person
        ]);

        return response()->json($accommodation);

        // return response()->json(['Accommodation is created successfully.', new PostResource($post)]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $accommodation = Accommodation::find($id);
        if (is_null($accommodation))
            return response()->json('Data not found', 404);
        return response()->json($accommodation);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Accommodation::destroy($id);

        return response()->json('Accommodation is deleted successfully.');
    }
}

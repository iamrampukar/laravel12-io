<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resp_data = array(
            array(
                'id' => 101,
                'first_name' => 'Ram Pukar',
                'last_name' => 'Chaudhary',
                'email' => 'rampukar@gmail.com'
            ),
            array(
                'id' => 102,
                'first_name' => 'Rajesh',
                'last_name' => 'Shrestha',
                'email' => 'rajesh_shrestha@gmail.com'
            ),
            array(
                'id' => 103,
                'first_name' => 'Mukesh',
                'last_name' => 'Thapa',
                'email' => 'mukesh_thapa@gmail.com'
            ),
            array(
                'id' => 104,
                'first_name' => 'Hemanta',
                'last_name' => 'Sharma',
                'email' => 'hemanta_sharma@gmail.com'
            ),
        );
        return $this->sendResponse($resp_data, 'User register successfully.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

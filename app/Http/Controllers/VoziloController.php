<?php

namespace App\Http\Controllers;

use App\Models\Vozilo;
use Illuminate\Http\Request;
use App\Http\Resources\VoziloResource;

class VoziloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vozila = Vozilo::all();
        return VoziloResource::collection($vozila);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vozilo  $vozilo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vozilo = Vozilo::find($id);
        return new VoziloResource($vozilo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vozilo  $vozilo
     * @return \Illuminate\Http\Response
     */
    public function edit(Vozilo $vozilo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vozilo  $vozilo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vozilo $vozilo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vozilo  $vozilo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vozilo = Vozilo::find($id);
        $vozilo->delete();
        return response()->json(['poruka' => 'Vozilo je uspešno obrisano!']);
    }
}

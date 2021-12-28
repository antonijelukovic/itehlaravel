<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use Illuminate\Http\Request;
use App\Http\Resources\ServisResource;
use Illuminate\Support\Facades\Validator;

class ServisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servisi = Servis::all();
        return ServisResource::collection($servisi);
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
     * @param  \App\Models\Servis  $servis
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $servis = Servis::find($id);
        return new ServisResource($servis);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servis  $servis
     * @return \Illuminate\Http\Response
     */
    public function edit(Servis $servis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servis  $servis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string',
            'grad' => 'required|string',
            'adresa' => 'required|string',
            'broj_zaposlenih' => 'required|integer',
            'website' => 'required|string'
        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $servis = Servis::find($id);

        if ($servis) {

            $servis->naziv = $request->naziv;
            $servis->grad = $request->grad;
            $servis->adresa = $request->adresa;
            $servis->broj_zaposlenih = $request->broj_zaposlenih;
            $servis->website = $request->website;

            $servis->update();

            return response()->json([
                'poruka' => 'Servis je uspešno izmenjen!',
                'servis' => new ServisResource($servis)
            ]);
        } else {
            return response()->json(['poruka' => 'Servis nije izmenjen!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servis  $servis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servis = Servis::find($id);
        $servis->delete();
        return response()->json(['poruka' => 'Servis je uspešno obrisan!']);
    }
}

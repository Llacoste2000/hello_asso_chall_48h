<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etablissement;
use DB;


class EtablissementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main_page.etablissement');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etablissement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $this->validate($request, [
                'name' => 'required',
                'city' => 'required',
                'adresse' => 'required|string',
                'code' => 'required|string|min:5|max:5',
                'phone' => 'required|string|min:10|max:10',
                'price' => 'required|string',
                'cleaning_price' => 'required|string',
                'area' => 'required',
                'kitchen' => 'required',

            ]);

            $user = auth()->user();

            Etablissement::create([
                'name' => $request->name,
                'city' => $request->city,
                'adresse' => $request->adresse,
                'code' => $request->code,
                'phone' => $request->phone,
                'price' => $request->price,
                'cleaning_price' => $request->cleaning_price,
                'area' => $request->area,
                'kitchen' => $request->kitchen,
                'description' => $request->description,
                'user_id' => $user->id

            ]);
            return back()->with("success");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $etab = Etablissement::find($id);

        $this->validate($request, [
            'adresse' => 'string',
            'code' => 'string|min:5|max:5',
            'phone' => 'string|min:10|max:10',
            'price' => 'string',
            'cleaning_price' => 'string',
        ]);

        $etab->name = $request->name;
        $etab->code = $request->code;
        $etab->adresse = $request->adresse;
        $etab->city = $request->city;
        $etab->price = $request->price;
        $etab->cleaning_price = $request->cleaning_price;
        $etab->area = $request->area;
        $etab->description = $request->description;

        $etab->save();

        return back()->with("success", "Update was good");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

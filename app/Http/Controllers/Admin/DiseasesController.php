<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Disease;
use App\TypeOfDisease;

class DiseasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diseases = Disease::paginate(10);
        return view('admin.diseases.index', compact('diseases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeDisease = TypeOfDisease::all();
        return view("admin.diseases.create", compact("typeDisease"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Disease $disease)
    {
        $payload = $request->all();
        $disease->create($payload);
        return redirect()->route("admin.diseases.index");
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
    public function edit(Disease $disease)
    {
        $typeDisease = TypeOfDisease::all();
        return view("admin.diseases.edit", compact("disease", "typeDisease"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disease $disease)
    {
        $payload = $request->all();
        $disease->update($payload);
        return redirect()->route("admin.diseases.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disease $disease)
    {
        $disease->delete();
        return redirect()->route("admin.diseases.index");
    }

    public function search(Request $request)
    {
        if(empty($request->diseaseSearch)) {
            return redirect()->route('admin.diseases.index');
        } else {
            $diseases = Disease::where('diseases.name', 'like', '%' . $request->diseaseSearch . '%')
            ->paginate(10)->withPath('search?diseaseSearch=' . $request->diseaseSearch);
            return view("admin.diseases.index")->with("diseases", $diseases);
        }
    }
}

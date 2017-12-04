<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TypeOfDisease;

class TypeOfDiseasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeofdiseases = TypeOfDisease::paginate(10);
        return view('admin.typeofdiseases.index', compact("typeofdiseases"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.typeofdiseases.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payload = $request->all();
        $typeofdiseases = new TypeOfDisease();
        $typeofdiseases->create($payload);
        return redirect()->route("admin.typeofdiseases.index");
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
    public function edit(TypeOfDisease $typeofdisease)
    {
        return view("admin.typeofdiseases.edit", compact("typeofdisease"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeOfDisease $typeofdisease)
    {
        $payload = $request->all();
        $typeofdisease->update($payload);
        return redirect()->route('admin.typeofdiseases.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeOfDisease $typeofdisease)
    {
        $typeofdisease->delete();
        return redirect()->route("admin.typeofdiseases.index");
    }

    public function search(Request $request)
    {
        if(empty($request->typeofdiseaseSearch)) {
            return redirect()->route('admin.typeofdiseases.index');
        } else {
            $typeofdiseases = TypeOfDisease::where('type_of_diseases.name', 'like', '%' . $request->typeofdiseaseSearch . '%')
            ->paginate(10)->withPath('search?typeofdiseaseSearch=' . $request->typeofdiseaseSearch);
            return view("admin.typeofdiseases.index")->with("typeofdiseases", $typeofdiseases);
        }
    }
}

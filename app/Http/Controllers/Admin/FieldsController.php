<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Field;

class FieldsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fields = Field::paginate(10);
        return view("admin.fields.index")->with("fields", $fields);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fields.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Field $field)
    {
        $payload = $request->all();
        $field->create($payload);
        return redirect()->route('admin.fields.index');
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
    public function edit(Field $field)
    {
        return view('admin.fields.edit', compact("field"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Field $field)
    {
        $payload = $request->all();
        $field->update($payload);
        return redirect()->route("admin.fields.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Field $field)
    {
        $field->delete();
        return redirect()->route('admin.fields.index');
    }

    public function search(Request $request)
    {
        if(empty($request->fieldSearch)) {
            return redirect()->route('admin.fields.index');
        } else {
            $fields = Field::where('fields.name', 'like', '%' . $request->fieldSearch . '%')
            ->paginate(10)->withPath('search?fieldSearch=' . $request->fieldSearch);
            return view("admin.fields.index")->with("fields", $fields);
        }
    }
}

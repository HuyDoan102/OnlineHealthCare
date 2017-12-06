<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Field;
use DB;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $doctors = User::with('fields')->join('specialties', 'users.id', 'specialties.user_id')
        ->join('fields', 'fields.id', 'specialties.field_id')->select('users.name as username', 'users.email as mail', 'fields.name as fieldsName', 'specialties.years_of_experience as kinhNghiem','users.phone as phone', 'users.id as id', 'users.avatar as image');
        if ($request->has('fieldType')) {
            $doctors = $doctors->whereHas('fields', function ($query) use ($request) {
                $query->where('id', $request->fieldType);
            });
        }
        $doctors = $doctors->paginate(10);
        return view('doctors.index', compact('doctors'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $doctor)
    {
        $relatedDoctors = $doctor->relatedDoctor();
        return view('doctors.show', compact('doctor', 'relatedDoctors'));
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
        //
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

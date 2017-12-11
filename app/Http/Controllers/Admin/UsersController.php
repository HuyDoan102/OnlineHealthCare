<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;
use App\Field;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view("admin.users.index")->with("users", $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fields = Field::all();
        return view('admin.users.create', compact("fields"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        \DB::transaction(function () use ($request) {
            $userData = $request->only([
                'name', 'email', 'date_of_birth', 'phone', 'gender', 'address', 'password', 'role_id',
            ]);
            $userData['password'] = bcrypt($userData['password']);
            $user = User::create($userData);

            $fields = $request->fields;

            foreach ($fields as $field) {
                if (!empty($field['checked'])) {
                    $user->fields()->attach($field['field_id'], [
                        'diploma' => $field['diploma'],
                        'years_of_experience' => $field['years_of_experience']
                    ]);
                }
            }
        });

        return redirect()->route("admin.users.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route("admin.users.index");
    }

    public function search(Request $request)
    {
        if(empty($request->userSearch)) {
            return redirect()->route('admin.users.index');
        } else {
            $users = User::where('users.name', 'like', '%' . $request->userSearch . '%')
            ->paginate(10)->withPath('search?userSearch=' . $request->userSearch);
            return view("admin.users.index")->with("users", $users);
        }
    }
}

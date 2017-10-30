@extends("layouts.partials.admin")

@section("admin")
<div class="content-wrapper">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <h5 class="card-title mb-4">Users Management</h5>
                    <div class="table-responsive">
                        <table class="table center-aligned-table">
                            <thead>
                                <tr class="text-primary">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Date of birth</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $index => $user)
                                <tr class="">
                                    <td>{{ ++$index }}</td>
                                    <td><a href="{{ route("admin.users.show", $user->id) }}" title="">{{ $user->name }}</a></td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->gender == '1' ? 'male' : 'female' }}</td>
                                    <td>{{ $user->date_of_birth }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->role->name }}</td>
                                    <td><a href="{{-- {{ route("users.create", $user->id) }} --}}" class="btn btn-primary btn-sm">Manage</a></td>
                                    <td><a href="#" class="btn btn-danger btn-sm">Remove</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

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
                                    <th width="80px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr class="">
                                    @php
                                        $size = 30;
                                    @endphp
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->gender == '1' ? 'male' : 'female' }}</td>
                                    <td>{{ $user->date_of_birth }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->role->name }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm"
                                            data-toggle="modal" data-target="#modalShow"
                                            data-id="{{ $user->id }}" data-name="{{ $user->name }}"
                                            data-email="{{ $user->email }}" data-address="{{ $user->address }}"
                                            data-phone="{{ $user->phone }}" data-role="{{ $user->role->name }}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="javascript:void(0)" url="{{ route( 'admin.users.destroy', [ 'user' => $user->id ] ) }}" class="delete btn btn-danger btn-sm"
                                            data-toggle="modal" data-target="#modalDetele">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">
                            {{ $users->links() }}
                        </div>

                        @include("admin.users.delete")
                        @include("admin.users.show")

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

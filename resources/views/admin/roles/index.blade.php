@extends("layouts.partials.admin")

@section("admin")

<div class="content-wrapper">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <h5 class="card-title mb-4">
                        <span>Roles Management</span>
                        <a href="#" data-toggle="modal" data-target="#modalCreate"
                        class="btn btn-primary"><i class="fa fa-plus-circle"></i></a>
                    </h5>

                    <div class="table-responsive">
                        <table class="table center-aligned-table">
                            <thead>
                                <tr class="text-primary">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $index => $role)
                                <tr class="">
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm"
                                            data-toggle="modal" data-target="#modalEdit"
                                            data-id="{{ $role->id }}" data-name="{{ $role->name }}">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm"
                                            data-toggle="modal" data-target="#modalDelete"
                                            data-id="{{ $role->id }}">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @include("admin.roles.edit")
                                @include("admin.roles.create")
                                @include("admin.roles.delete")
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

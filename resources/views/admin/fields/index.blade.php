@extends('layouts.partials.admin')

@section('admin')
<div class="content-wrapper">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <h5 class="card-title mb-4">
                        <span>Fields Management</span>
                    </h5>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <a href="{{ route("admin.fields.create") }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-plus-circle"></i>New
                            </a>
                        </div>
                        <form action="{{ route("admin.fields.search") }}" class="col-sm-6" method="GET">
                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <input type="text" name="fieldSearch" class="form-control form-control-sm">
                                </div>
                                <div class="col-sm-4">
                                    <button class="btn btn-primary btn-sm" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>

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
                                @foreach($fields as $index => $field)
                                <tr>
                                    <th scope="row">{{ $field->id }}</th>
                                    <td>{{ $field->name }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm"
                                        data-toggle="modal" data-target="#fieldShow"
                                        data-id="{{ $field->id }}" data-name="{{ $field->name }}">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <a href="{{ route('admin.fields.edit', $field->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                                        <a href="javascript:void(0)" url="{{ route( 'admin.fields.destroy', [ 'field' => $field->id ] ) }}" class="delete btn btn-danger btn-sm"
                                            data-toggle="modal" data-target="#fieldDetele"
                                            data-id="{{ $field->id }}">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">
                            {{ $fields->links() }}
                        </div>
                        @include("admin.fields.delete")
                        @include("admin.fields.show")
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

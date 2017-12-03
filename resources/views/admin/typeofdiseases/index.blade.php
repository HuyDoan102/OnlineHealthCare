@extends('layouts.partials.admin')

@section('admin')
<div class="content-wrapper">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <h5 class="card-title mb-4">
                        <span>Type Of Diseases Management</span>
                    </h5>
                    <div class="row">
                        <form action="{{ route("admin.typeofdiseases.search") }}" class="col-sm-6" method="GET">
                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <input type="text" name="feedbackSearch" class="form-control form-control-sm">
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
                                @foreach($typeofdiseases as $index => $typeofdisease)
                                <tr>
                                    <th scope="row">{{ $typeofdisease->id }}</th>
                                    <td>{{ $typeofdisease->name }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm"
                                            data-toggle="modal" data-target="#typeofdiseaseShow" data-id="{{ $typeofdisease->id }}"
                                            data-name="{{ $typeofdisease->name }}">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                        <a href="{{ route('admin.typeofdiseases.show', $typeofdisease->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                        </a>

                                        <a href="javascript:void(0)" url="{{ route( 'admin.typeofdiseases.destroy', [ 'typeofdisease' => $typeofdisease->id ] ) }}" class="delete btn btn-danger btn-sm"
                                            data-toggle="modal" data-target="#deletetypeofdisease"
                                            data-id="{{ $typeofdisease->id }}">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">
                            {{ $typeofdiseases->links() }}
                        </div>
                        {{-- @include("admin.typeofdiseases.delete")
                        @include("admin.typeofdiseases.show") --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.partials.admin')
@section('admin')
<div class="content-wrapper">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <h5 class="card-title mb-4">Diseases Management</h5>
                    <div class="row">
                        <form action="{{ route("admin.diseases.search") }}" class="col-sm-6" method="GET">
                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <input type="text" name="userSearch" class="form-control form-control-sm">
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
                                    <th>Symptom</th>
                                    <th>Type of disease</th>
                                    <th width="120px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($diseases as $disease)
                                <tr class="">
                                    @php
                                    $size = 30;
                                    @endphp
                                    <td>{{ $disease->id }}</td>
                                    <td>{{ $disease->name }}</td>
                                    <td>{{ $disease->symptom }}</td>
                                    <td>{{ $disease->type_of_diseases->name }}</td>
                                    <td>
                                        <a href="{{ route("admin.diseases.show", $disease->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route("admin.diseases.edit", $disease->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" url="{{ route( 'admin.diseases.destroy', [ 'disease' => $disease->id ] ) }}" class="delete btn btn-danger btn-sm"
                                            data-toggle="modal" data-target="#deleteArticle">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @include('admin.diseases.delete')
                        <div class="text-center">
                            {{ $diseases->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

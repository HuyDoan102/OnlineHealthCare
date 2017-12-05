@extends('layouts.partials.admin')

@section('admin')
<div class="content-wrapper">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <a href="{{ route("admin.fields.index") }}"><i class="fa fa-arrow-left"></i> Back</a>
                    <h5 class="card-title mb-4">Update type of diseases</h5>
                    <form action="{{ route("admin.fields.update", $field->id) }}" class="forms-sample" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field("PUT") }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control p-input" value="{{ $field->name }}" id="name" aria-describedby="emailHelp" placeholder="Name">
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

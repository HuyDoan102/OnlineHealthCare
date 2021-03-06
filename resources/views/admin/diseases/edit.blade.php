@extends('layouts.partials.admin')

@section('admin')
<div class="content-wrapper">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <a href="{{ route("admin.diseases.index") }}"><i class="fa fa-arrow-left"></i> Back</a>
                    <h5 class="card-title mb-4">Update disease</h5>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route("admin.diseases.update", $disease->id) }}" class="forms-sample" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field("PUT") }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control p-input" value="{{ $disease->name }}" id="name" aria-describedby="emailHelp" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label for="symptom">Symptom</label>
                            <input type="text" name="symptom" class="form-control p-input" value="{{ $disease->symptom }}" id="symptom" placeholder="Symptom">
                        </div>

                        <div class="form-group">
                            <label for="name">Type of disease</label>
                            <select name="type_of_diseases_id" class="form-control" id="">

                                @foreach($typeDisease as $type)
                                    @if($disease->type_of_diseases->id ===  $type->id)
                                        <option value="{{ $type->id }}" selected>{{ $disease->type_of_diseases->name }}</option>
                                    @else
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endif
                                @endforeach
                            </select>
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

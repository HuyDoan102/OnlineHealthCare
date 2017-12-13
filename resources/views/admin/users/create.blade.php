@extends('layouts.partials.admin')
@section('admin')
<div class="content-wrapper">
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-block">
          <a href="{{ route("admin.users.index") }}"><i class="fa fa-arrow-left"></i> Back</a>
          <h1>Pushlish Doctor</h1>
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="role_id" value="2">
            <div class="form-group row">
              <div class="col-sm-6">
                <label for="name" class="col-md-4 control-label">Name</label>
                <input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Name...">
              </div>
              <div class="col-sm-6">
                <label for="email" class="col-md-4 control-label">Email</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email...">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6">
                <label for="date_of_birth" class="col-md-4 control-label">Date_of_birth</label>
                <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" value="{{ old('date_of_birth') }}" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
              </div>
              <div class="col-sm-6">
                <label for="phone" class="col-md-4 control-label">Phone</label>
                <input id="phone" type="phone" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Phone...">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label for="gender" class="col-md-4 control-label">Gender</label>
                <select class="form-control" id="gender" name="gender">
                  <option value="1">Nam</option>
                  <option value="0">Nữ</option>
                </select>
              </div>
              <div class="col-sm-6">
                <label for="address" class="col-md-4 control-label">Address</label>
                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label for="password" class="col-md-4 control-label">Password</label>
                <input id="password" type="password" class="form-control" name="password" placeholder="Password...">
              </div>
              <div class="col-md-6">
                <label for="image">Image</label>
                <input type="file" name="avatar" class="form-control-file" id="avatar" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
              </div>
            </div>

            <div class="form-group table">
              <table>
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Diploma</th>
                    <th>Year of Experience</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($fields as $index => $field)
                  <tr>
                    <input type="hidden" name="fields[{{ $index }}][field_id]" value="{{ $field->id }}">
                    <td>
                      <input type="checkbox" name="fields[{{ $index }}][checked]">
                    </td>
                    <td>{{ $field->name }}</td>
                    <td>
                      <input type="text" class="form-control" name="fields[{{ $index }}][diploma]">
                    </td>
                    <td>
                      <input type="number" class="form-control" name="fields[{{ $index }}][years_of_experience]">
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <div class="form-group">
              <button class="btn btn-primary" type="submit">SUBMIT</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

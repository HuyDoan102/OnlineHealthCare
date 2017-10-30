@extends("layouts.partials.admin")

@section("admin")

<div class="content-wrapper">

  <a href="{{ route("admin.users.index") }}">&#x21A9;Back Home User</a>
  <h2>User #{{$user->id}}</h2>
  <p>{{ $user->name }}</p>
  <p>{{ $user->email }}</p>

</div>

@endsection

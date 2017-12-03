@extends('layouts.partials.admin')

@section('admin')
<div class="content-wrapper">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <h5 class="card-title mb-4">
                        <span>Posts Management</span>
                    </h5>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <a href="{{ route("admin.posts.create") }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-plus-circle"></i>New
                            </a>
                        </div>
                        <form action="{{ route("admin.posts.search") }}" class="col-sm-6" method="GET">
                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <input type="text" name="postSearch" class="form-control form-control-sm">
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
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Source</th>
                                    <th>Status</th>
                                    <th style="width: 120px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $index => $post)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td><img class="image-post" src="/images/{{ $post->image }}" alt=""></td>
                                    @php
                                        $size = 10;
                                    @endphp
                                    @if (strlen($post->title) <= $size)
                                        <td>{{ $post->title }}</td>
                                    @else
                                        <td>{{ mb_substr($post->title,0, $size,'UTF-8') . '...' }}</td>
                                    @endif

                                    @php
                                        $length = 30;
                                    @endphp
                                    @if (strlen($post->content) <= $length)
                                        <td>{{ $post->content }}</td>
                                    @else
                                        <td>{{ mb_substr($post->content,0, $length,'UTF-8') . '...' }}</td>
                                    @endif
                                    <td>{{ $post->source }}</td>
                                    <td>
                                        {{ $post->status == 0 ? "not approval" : "approval" }}
                                    </td>
                                    <td>
                                        <a href="{{ route("admin.posts.show", $post->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route("admin.posts.edit", $post->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" url="{{ route( 'admin.posts.destroy', [ 'post' => $post->id ] ) }}" class="delete btn btn-danger btn-sm"
                                            data-toggle="modal" data-target="#deletePost"
                                            data-id="{{ $post->id }}">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @include("admin.posts.delete")
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

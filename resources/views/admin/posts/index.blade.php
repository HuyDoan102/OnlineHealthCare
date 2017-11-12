@extends('layouts.partials.admin')

@section('admin')
<div class="content-wrapper">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <h5 class="card-title mb-4">
                        <span>Posts Management</span>
                        <a href="{{ route("admin.posts.create") }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></a>
                    </h5>
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $index => $post)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td><img class="image-post" src="/images/{{ $post->image }}" alt=""></td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->content }}</td>
                                    <td>{{ $post->source }}</td>
                                    <td>
                                        {{ $post->status == 0 ? "not approval" : "approval" }}
                                    </td>
                                    <th>
                                        <a href="#" class="btn btn-primary btn-sm"
                                            data-toggle="modal" data-target="#modalShow" data-id="{{ $post->id }}"
                                            data-title="{{ $post->title }}" data-content="{{ $post->content }}"
                                            data-source="{{ $post->source }}" data-created_at="{{ $post->created_at }}"
                                            data-status="{{ $post->status }}" data-view="{{ $post->view }}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm"
                                        data-toggle="modal" data-target="#modalEdit"
                                        data-id="{{ $post->id }}" data-name="{{ $post->title }}">
                                        <i class="fa fa-pencil-square-o"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm"
                                            data-toggle="modal" data-target="#modalDelete"
                                            data-id="{{ $post->id }}">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </th>
                                </tr>
                                @endforeach
                                @include("admin.posts.show")
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

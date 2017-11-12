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
                    <p>
                        <a href="{{ route("admin.posts.create") }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus-circle"></i>New
                        </a>
                    </p>
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
                                    <th>
                                        <a href="#" class="btn btn-primary btn-sm"
                                        data-toggle="modal" data-target="#modalShow" data-id="{{ $post->id }}"
                                        data-title="{{ $post->title }}" data-content="{{ $post->content }}"
                                        data-source="{{ $post->source }}" data-created_at="{{ $post->created_at }}"
                                        data-status="{{ $post->status }}" data-view="{{ $post->view }}">
                                        <i class="fa fa-eye"></i></a>
                                        <a href="#" class="btn btn-primary btn-sm"
                                        data-toggle="modal" data-target="#modalEdit"
                                        data-id="{{ $post->id }}" data-name="{{ $post->title }}">
                                        <i class="fa fa-pencil-square-o"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"
                                        data-toggle="modal" data-target="#modalDelete"
                                        data-id="{{ $post->id }}">
                                        <i class="fa fa-trash-o"></i></a>
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

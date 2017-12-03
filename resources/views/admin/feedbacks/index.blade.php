@extends('layouts.partials.admin')

@section('admin')
<div class="content-wrapper">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <h5 class="card-title mb-4">
                        <span>Feedbacks Management</span>
                    </h5>
                    <div class="row">
                        <form action="{{ route("admin.feedbacks.search") }}" class="col-sm-6" method="GET">
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
                                    <th style="width: 150px">Email</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th style="width: 120px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($feedbacks as $index => $feedback)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $feedback->email }}</td>
                                    @php
                                        $size = 10;
                                    @endphp
                                    @if (strlen($feedback->title) <= $size)
                                        <td>{{ $feedback->title }}</td>
                                    @else
                                        <td>{{ mb_substr($feedback->title,0, $size,'UTF-8') . '...' }}</td>
                                    @endif

                                    @php
                                        $length = 30;
                                    @endphp
                                    @if (strlen($feedback->content) <= $length)
                                        <td>{{ $feedback->content }}</td>
                                    @else
                                        <td>{{ mb_substr($feedback->content,0, $length,'UTF-8') . '...' }}</td>
                                    @endif
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm"
                                            data-toggle="modal" data-target="#feedbackShow" data-id="{{ $feedback->id }}"
                                            data-email="{{ $feedback->email }}" data-title="{{ $feedback->title }}"
                                            data-content="{{ $feedback->content }}">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                        <a href="{{ route('admin.feedbacks.mail', $feedback->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                        </a>

                                        <a href="javascript:void(0)" url="{{ route( 'admin.feedbacks.destroy', [ 'feedback' => $feedback->id ] ) }}" class="delete btn btn-danger btn-sm"
                                            data-toggle="modal" data-target="#deleteFeedback"
                                            data-id="{{ $feedback->id }}">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">
                            {{ $feedbacks->links() }}
                        </div>
                        @include("admin.feedbacks.delete")
                        @include("admin.feedbacks.show")
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

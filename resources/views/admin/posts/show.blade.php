@extends('layouts.partials.admin')

@section('admin')

<div class="content-wrapper">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <a href="{{ route("admin.posts.index") }}"><i class="fa fa-arrow-left"></i> Back</a>
                    <!-- Modal content-->
                    <h2 class="title-modal">Post</h2>
                    <input type="hidden" class="form-control" id="id" name="id">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="title" value="{{ $post->title }}" name="title" disabled></input>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Content</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="content" value="{{ $post->content }}" name="content" disabled></input>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Source</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="source" value="{{ $post->source }}" name="source" disabled></input>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="status" value="{{ $post->status }}" name="status" disabled></input>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">View</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="view" value="{{ $post->view }}" name="view" disabled></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Time create</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="created_at" value="{{ $post->created_at }}" name="created_at" disabled></input>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



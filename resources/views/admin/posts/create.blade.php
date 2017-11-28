@extends('layouts.partials.admin')

@section('admin')
<div class="content-wrapper">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <h5 class="card-title mb-4">Pushlish Post</h5>
                    <form action="{{ route("admin.posts.store") }}" class="forms-sample" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control p-input" id="title" aria-describedby="emailHelp" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="source">Source</label>
                            <input type="text" name="source" class="form-control p-input" id="source" placeholder="Source">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control p-input" id="content" rows="3" placeholder="Content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control-file" id="image" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                        </div>
                        <div class="form-group">
                            <label for=""></label>
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

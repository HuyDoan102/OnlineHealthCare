@extends("layouts.partials.admin")

@section("admin")

<div class="content-wrapper">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <h5 class="card-title mb-4">Pushlish Post</h5>
                    <form action="{{ route("admin.posts.update", $post->id) }}" class="forms-sample" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field("PUT") }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control p-input" value="{{ $post->title }}" id="title" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="source">Source</label>
                            <input type="text" name="source" class="form-control p-input" value="{{ $post->source }}" id="source">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control p-input" id="content" rows="3">{{ $post->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="content">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="{{ $post->status }}">{{ $post->status == 0 ? "not approval" : "approval" }}</option>
                                <option value="{{ $post->status == 0 ? "1" : "0"}}">{{ $post->status == 0 ? "approval" : "not approval" }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>

                            <input type="file" name="image" class="form-control-file" value="{{ $post->image }}" id="image" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
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
@extends("layouts.partials.admin")

@section("admin")

<div class="content-wrapper">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card col-lg-12">
                <div class="card-block">
                    <a href="{{ route("admin.articles.index") }}"><i class="fa fa-arrow-left"></i> Back</a>
                    <h5 class="card-title mb-4">Update Aritcle</h5>
                    <form action="{{ route("admin.articles.update", $article->id) }}" class="forms-sample" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field("PUT") }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control p-input" value="{{ $article->title }}" id="title" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea type="text" name="content" class="form-control p-input" id="content">
                                {{ $article->content }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="creator">Creator</label>
                            <input type="text" name="creator" class="form-control p-input" value="{{ $article->creator }}" id="content" disabled>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

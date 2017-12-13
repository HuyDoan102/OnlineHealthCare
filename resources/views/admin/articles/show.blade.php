@extends('layouts.partials.admin')

@section('admin')

<div class="content-wrapper">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <a href="{{ route("admin.articles.index") }}"><i class="fa fa-arrow-left"></i> Back</a>
                    <!-- Modal content-->
                    <h2 class="title-modal">Article</h2>
                    <input type="hidden" class="form-control" id="id" name="id">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="title" value="{{ $article->title }}" name="title" disabled></input>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Content</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="15" id="content" name="content" disabled>{{ $article->content }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Creator</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="source" value="{{ $article->creator }}" name="source" disabled></input>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



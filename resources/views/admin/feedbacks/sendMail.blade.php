@extends('layouts.partials.admin')

@section('admin')
<div class="content-wrapper">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <div class="card-block">
                        <h5 class="card-title mb-4">Content Feedback</h5>
                        <div class="form-group">
                            <label for="source">Email</label>
                            <input type="email" name="email" value="{{ $feedback->email }}" class="form-control p-input" id="email" placeholder="Email" disabled>
                        </div>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" value="{{ $feedback->title }}" class="form-control p-input" id="title" aria-describedby="emailHelp" placeholder="Title" disabled>
                        </div>

                        <div class="form-group">
                            <label for="title">Content</label>
                            <input type="text" name="content" value="{{ $feedback->content }}" class="form-control p-input" id="title" aria-describedby="emailHelp" placeholder="Title" disabled>
                        </div>
                    </div>
                </div>

                <div class="card-block">
                    <h5 class="card-title mb-4">Respone mail</h5>
                    <form action="{{ route("admin.feedbacks.send") }}" class="forms-sample" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="source">Email</label>
                            <input type="email" value="{{ $feedback->email }}" class="form-control p-input" id="email" placeholder="Email" disabled>
                            <input type="hidden" name="email" value="{{ $feedback->email }}">
                        </div>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control p-input" id="title" aria-describedby="emailHelp" placeholder="Title">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Content</label>
                            <textarea name="content" class="form-control " id="editor1"></textarea>
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

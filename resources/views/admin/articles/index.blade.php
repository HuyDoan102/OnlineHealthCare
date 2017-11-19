@extends("layouts.partials.admin")

@section("admin")
<div class="content-wrapper">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-block">
                    <h5 class="card-title mb-4">Articles Management</h5>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <a href="{{ route("admin.articles.create") }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>New</a>
                        </div>
                        <form action="{{ route("admin.articles.search") }}" class="col-sm-6" method="GET">
                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <input type="text" name="userSearch" class="form-control form-control-sm">
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
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Creator</th>
                                    <th width="80px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($articles as $article)
                                <tr class="">
                                    @php
                                        $size = 30;
                                    @endphp
                                    <td>{{ $article->id }}</td>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ $article->content }}</td>
                                    <td>{{ $article->user_id }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm"
                                            data-toggle="modal" data-target="#modalShow"
                                            data-id="{{ $article->id }}" data-name="{{ $article->name }}"
                                            data-content="{{ $article->content }}" data-creator="{{ $article->user_id }}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        {{-- <a href="javascript:void(0)" url="{{ route( 'admin.article.destroy', [ 'article' => $article->id ] ) }}" class="delete btn btn-danger btn-sm"
                                            data-toggle="modal" data-target="#modalDetele">
                                            <i class="fa fa-trash-o"></i>
                                        </a> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">
                            {{ $articles->links() }}
                        </div>

                        {{-- @include("admin.article.delete")
                        @include("admin.article.show") --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
